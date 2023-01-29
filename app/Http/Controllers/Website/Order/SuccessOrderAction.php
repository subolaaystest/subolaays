<?php

namespace App\Http\Controllers\Website\Order;

use App\Http\Controllers\Controller;

class SuccessOrderAction extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke()
    {
        return view('website.buyer.orders.success');
    }

}
