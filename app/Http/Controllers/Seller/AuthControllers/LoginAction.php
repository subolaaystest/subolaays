<?php

namespace App\Http\Controllers\Seller\AuthControllers;

use App\Http\Requests\Seller\LoginRequest;
use App\Services\Seller\SellerService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Exception;

class LoginAction extends Controller
{
    private SellerService $service;

    public function __construct(SellerService $service)
    {
        $this->service = $service;
    }

    /**
     * Handle the incoming request.
     *
     * @param  LoginRequest  $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        // get the seller by mobile number
        $seller = $this->service->getSellerByMobile($request->input('fullNumber'));
        // generate code for seller for login
        $this->service->generateCode($seller);

        // redirect to check code form
        return redirect()->route('checkSellerLoginForm', ['mobile' => $request->input('fullNumber')]);
    }

}
