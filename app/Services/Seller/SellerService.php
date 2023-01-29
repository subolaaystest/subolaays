<?php

namespace App\Services\Seller;

use App\Models\Code;
use App\Models\Seller;
use Exception;

class SellerService
{
    // get the seller by mobile number
    public function getSellerByMobile($mobile): Seller
    {
        return Seller::mobile($mobile)->first();
    }

    // generate code for seller for login
    /**
     * @throws Exception
     */
    public function generateCode(Seller $seller): void
    {
        $randomCode = app()->environment('local') ? 1111: random_int(1000, 9999);

        Code::create([
            'user_id' => $seller->id,
            'user_type' => 'seller',
            'code' => $randomCode,
        ]);
    }

    // create seller
    public function createSeller(array $data): Seller
    {
        return Seller::create($data);
    }

}
