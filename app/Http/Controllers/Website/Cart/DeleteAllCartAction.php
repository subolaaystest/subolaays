<?php

namespace App\Http\Controllers\Website\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;
use Cart;

class DeleteAllCartAction extends Controller
{
    /**
     * @return JsonResponse
     */
    public function __invoke()
    {
        Cart::session(Session::getId())->clear();

        return response()->json([
            'success' => true,
            'message' => trans('website.all_have_been_deleted_successfully'),
        ]);
    }

}
