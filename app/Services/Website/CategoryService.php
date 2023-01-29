<?php

namespace App\Services\Website;
use App\Models\MainCategory;
use App\Models\SubCategory;


class CategoryService
{

    public function getAllMainCategoriesAppearOnHomePage()
    {
        return MainCategory::active()->appearonhomepage()->get();
    }

    public function getActiveMainCategories(){
        return MainCategory::with('translations')->active()->get();
    }

    public function getAllMainCategories(){
        return MainCategory::with('translations')->active()->get();
    }

    public function getSubCategories(){
        return SubCategory::with('translations')->active()->get();
    }
}
