<?php

namespace App\Http\Controllers\Website\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\CartRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Cart;

class AddOrRemoveQuantityToCartAction extends Controller
{
    /**
     * @param CartRequest $request
     * @param string|null $type
     * @return JsonResponse
     */
    public function __invoke(CartRequest $request, string|null $type = null)
    {

        if (!$type || !in_array($type, ['increment', 'decrement'])) {
            return response()->json([
                'success' => false,
                'message' => trans('website.not_found'),
            ], 421);
        }


        $cart = Cart::session(Session::getId());

        $product = Product::whereId($request->input('product_id'))->first();

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => trans('website.not_found'),
            ], 421);
        }
        $deleted = false;
        $detailsCart = $cart->get($product->id);

        if (!$detailsCart && $type == 'increment') {

            $cart = $cart->add("$product->id", $product->name, $product->price, 1, [
                'image' => $product->main_image,
                'seller_id' => $product->seller_id,
                'quantity_available' => $product->quantity_available,
                'type' => $product->type,
            ]);

            $typeForMessage = 'increased';
        } else {

            if ($product->quantity_available == $detailsCart->quantity && $type == 'increment') {
                return response()->json([
                    'success' => false,
                    'product_quantity' => $detailsCart->quantity ?? 0,
                    'message' => trans('website.the_quantity_in_the_cart_equals_the_quantity_available_for_this_product'),
                ], 421);
            }

            $currentQuantity = $detailsCart->quantity ?? 0;

            $currentQuantity = $type === 'increment' ? ($currentQuantity + 1) : ($currentQuantity - 1);

            if ($currentQuantity <= 0) {
                $cart->remove($product->id);
                $deleted = true;
            } else {
                $cart->update($product->id, [
                    'quantity' => [
                        'relative' => false,
                        'value' => $currentQuantity,
                    ],
                ]);
            }

            $typeForMessage = $type == 'increment' ? 'increased' : 'reduced';
        }

        $detailsCart = $cart->get($product->id);


        return response()->json([
                'success' => true,
                'deleted' => $deleted,
                'quantity' => $cart->getContent()->count(),
                'product_quantity' => $detailsCart->quantity ?? 0,
                'product_total' => $detailsCart ?->getPriceSum() ?? 0,
            'sub_total' => $cart->getSubTotal(),
            'total' => $cart->getTotal(),
            'message' => trans('website.add_or_remove_quantity', [
        'type' => trans("website.$typeForMessage")
    ]),
        ]);
    }

}
