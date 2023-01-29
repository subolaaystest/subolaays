<?php

namespace App\Http\Controllers\Seller\AuthControllers;

use App\Http\Requests\Seller\RegisterRequest;
use App\Services\Seller\SellerService;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Exception;

class RegisterAction extends Controller
{
     private SellerService $service;

     public function __construct(SellerService $service)
     {
         $this->service = $service;
     }

    /**
     * Handle the incoming request.
     *
     * @param  RegisterRequest  $request
     * @return RedirectResponse
     *
     * @throws Exception
     */
    public function __invoke(RegisterRequest $request): RedirectResponse
    {
        // create new seller with mobile number
        $seller = $this->service->createSeller([
            'mobile' => $request->fullNumber,
        ]);

        // generate code for seller for login
        $this->service->generateCode($seller);

        return redirect()->route('checkSellerSignUpForm', ['mobile' => $request->fullNumber]);
    }
}
