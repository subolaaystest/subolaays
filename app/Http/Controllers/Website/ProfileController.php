<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\ProfileRequest;
use App\Models\Buyer;
use App\Services\Website\BuyerService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    private $buyerService;

    public function __construct()
    {
        $this->buyerService = new BuyerService();
    }

    public function profileForm()
    {

        return view('website.buyer.profile')->with([
            'buyer_categories' => $this->buyerService->getBuyerCategory()
        ]);
    }

    public function profile(ProfileRequest $request, Buyer $buyer)
    {
        $data = $request->validated();
        $data['mobile'] = $data['fullNumber'];

        $this->buyerService->createOrUpdateBuyer($data, $buyer->id);
        return redirect()->back()->with('success', 'profile updated successfully');
    }
}
