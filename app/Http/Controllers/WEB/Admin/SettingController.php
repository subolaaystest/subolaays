<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Category;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;



class SettingController extends Controller
{


    private $locales = '';

    public function __construct()
    {
        $this->locales = Language::all();
        view()->share(['locales' => $this->locales]);
    }




    public function image_extensions(){
        return array('jpg','png','jpeg','gif','bmp','pdf','txt','docx','doc','ppt','xls','zip','rar','svg');
    }


    public function index()
    {
        $item = Setting::query()->first();
        return view('admin.settings.edit', ['item' => $item]);
    }



    public function statistics ()
    {
        $item = Setting::query()->first();
        return view('admin.settings.statistics', ['item' => $item]);
    }




    public function complaints()
    {
        $item = Category::where('id', 14)->first();
        return view('admin.settings.complaints', ['item' => $item]);
    }


    public function update_complaints(Request $request)
    {

        $item = Category::where('id', 14)->first();

        $item->url = $request->url;
        $item->save();

        return redirect()->back()->with('status', __('cp.update'));
    }






    public function update(Request $request)
    {

        $locales = Language::all()->pluck('lang');
        $roles = [
            'email' => 'nullable|email',
            'mobile' => 'nullable|numeric',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linked_in' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
        ];


        $this->validate($request, $roles);

        $setting = Setting::query()->findOrFail(1);

        $setting->email = trim($request->get('email'));
        $setting->phone = trim($request->get('phone'));
        $setting->mobile = trim($request->get('mobile'));
        $setting->whatsapp = trim($request->get('whatsapp'));
        $setting->facebook = trim($request->get('facebook'));
        $setting->twitter = trim($request->get('twitter'));
        $setting->linked_in = trim($request->get('linked_in'));
        $setting->instagram = trim($request->get('instagram'));
        $setting->snapchat = trim($request->get('snapchat'));
        $setting->telegram = trim($request->get('telegram'));
        $setting->youtube = trim($request->get('youtube'));



        foreach ($locales as $locale) {
            $setting->translateOrNew($locale)->description = $request->get('description' . $locale);
            $setting->translateOrNew($locale)->title = $request->get('title_' . $locale);
//            $setting->translate($locale)->title = trim(ucwords($request->get('title_' . $locale)));
//            $setting->translate($locale)->description = ucwords($request->get('description_' . $locale));
            $setting->translate($locale)->keywords = ucwords($request->get('keywords_' . $locale));
        }

        if ($request->hasFile('logo')) {
            $directory = "settings";
            $path = $request->file('logo')->store($directory, 'images');
            $setting->logo = substr($path, strlen($directory)+1, strlen($path));
        }




        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/settings/$file_name");
            $setting->logo = $file_name;
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/settings/$file_name");
            $setting->image = $file_name;
        }



        $setting->save();

        return redirect()->back()->with('status', __('cp.update'));
    }



    public function update_statistics(Request $request)
    {

        $locales = Language::all()->pluck('lang');
        $setting = Setting::query()->findOrFail(1);

        $setting->total_prisoners = $request->total_prisoners;
        $setting->female_prisoners = $request->female_prisoners;
        $setting->children_prisoners = $request->children_prisoners;
        $setting->administrative_detainees = $request->administrative_detainees;
        $setting->prisoners_gov = $request->prisoners_gov;
        $setting->sick_prisoners = $request->sick_prisoners;
        $setting->all_life_prisoners = $request->all_life_prisoners;
        $setting->press_prisoners = $request->press_prisoners;
        $setting->old_prisoners = $request->old_prisoners;

        $setting->save();

        return redirect()->back()->with('status', __('cp.update'));
    }


}
