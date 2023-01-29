<?php

namespace App\Http\Controllers\Website\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\CartRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $allCart = Cart::session(Session::getId());
        $carts = $allCart->getContent();

        return view('website.carts.index', ['carts' => $carts, 'allCart' => $allCart]);
    }

    /**
     * @param CartRequest $request
     * @return JsonResponse
     */
    public function store(CartRequest $request)
    {
        $product = Product::whereId($request->input('product_id'))->first();

        if (!$product || !$product->name || $product->quantity_available == 0) {
            return response()->json([
                'success' => false,
                'message' => trans('website.not_found'),
            ], 421);
        }

        $cart = Cart::session(Session::getId());

        if ($detailsCart = $cart->get($product->id)) {
            if ($product->quantity_available == $detailsCart->quantity) {
                return response()->json([
                    'success' => false,
                    'message' => trans('website.the_quantity_in_the_cart_equals_the_quantity_available_for_this_product'),
                ], 421);
            }
            Cart::session(Session::getId())->update($product->id, ['quantity' => 1]);
        } else {
            $cart
                ->add("$product->id", $product->name, $product->price, $request->input('quantity', 1), [
                    'image' => $product->main_image,
                    'seller_id' => $product->seller_id,
                    'quantity_available' => $product->quantity_available,
                    'type' => $product->type,
                ]);
        }

        return response()->json([
            'success' => true,
            'quantity' => $cart->getContent()->count(),
            'message' => trans('website.added_to_cart_successfully', [
                'product' => $product->name,
                'quantity' => $detailsCart->quantity ?? 1,
            ]),
        ]);
    }

    /**
     * @param Product $model
     * @return JsonResponse
     */
    public function destroy(Product $model)
    {
        $cart = Cart::session(Session::getId());
        $cart->remove($model->id);

        return response()->json([
            'success' => true,
            'quantity' => $cart->getContent()->count(),
            'total' => $cart->getTotal(),
            'message' => trans('website.deleted_product_successfully', [
                'product' => $model->name
            ]),
        ]);
    }

}
