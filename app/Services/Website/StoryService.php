<?php

namespace App\Services\Website;
use App\Models\Product;

class StoryService
{
    public function getActiveStories()
    {
        return Product::with(['photos', 'main_photo'])->active()->story()->limit(100)->get()->map(function($product){
            return [
                "id" => "product_" . $product->id,
                "photo" => $product->main_photo->image,
                "name" => $product->name,
                "link" => route('products.show', ['product' => $product->id]),
                "lastUpdated" => $product->created_at->timestamp,
                "items" => $product->photos->map(function($photo) use ($product){
                    return [
                        "id" => "product_" . $product->id . '-' . $photo->id,
                        "type" => "photo",
                        "length" => 3,
                        "src" => $photo->image,
                        "preview" => $photo->image,
                        "link" => route('products.show', ['product' => $product->id]),
                        "linkText" => trans('website.visit_product'),
                        "time" => $product->created_at->timestamp
                    ];
                })->toArray()
            ];
        });
    }
}
