<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Area;
use App\Models\AreaRequest;
use App\Models\Booking;
use App\Models\PromotionCode;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Response;


class HomeController extends Controller
{


    public function index()
    {
        $admin=Admin::findOrFail(auth()->guard('admin')->user()->id);
        return view('admin.home.dashboard',['admin'=>$admin]);
    }


    public function changeStatus($model,Request $request)
    {
        $role = "";
        if($model == "admins") $role = 'App\Models\Admin';
        if($model == "ads") $role = 'App\Models\Ad';
        if($model == "posts") $role = 'App\Models\Post';
        if($model == "procedures") $role = 'App\Models\Service';
        if($model == "procedures_places") $role = 'App\Models\ServicePlace';
        if($model == "procedures_conditions") $role = 'App\Models\ServiceCondition';
        if($model == "procedures_documents") $role = 'App\Models\ServiceDocument';
        if($model == "procedures_steps") $role = 'App\Models\ServiceStep';
        if($model == "procedures_fees") $role = 'App\Models\ServiceFee';
        if($model == "procedures_queries") $role = 'App\Models\ServiceQuery';
        if($model == "procedures_forms") $role = 'App\Models\ServiceForm';
        if($model == "services_bars") $role = 'App\Models\ServiceBar';
        if($model == "statistics") $role = 'App\Models\Statistic';


        if($model == "pages") $role = 'App\Models\Page';
        if($role !=""){
             if ($request->action == 'delete') {
                $role::query()->whereIn('id', $request->IDsArray)->delete();
            }
            else {
                if($request->action) {
                    $role::query()->whereIn('id', $request->IDsArray)->update(['status' => $request->action]);
                }
            }

            return $request->action;
        }
        return false;


    }



    public function getSubCategories($id){
        return SubCategory::active()->where('main_category_id', $id)->get();
    }

}
