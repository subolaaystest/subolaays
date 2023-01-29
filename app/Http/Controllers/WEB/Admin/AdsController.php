<?php
namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Image;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Ad;


class AdsController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales,'settings' => $this->settings]);
    }



    public function index()
    {
        $items = Ad::latest()->get();
        return view('admin.ads.home', ['items' => $items]);
    }



    public function create()
    {
        return view('admin.ads.create');
    }



    public function store(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $ad= new Ad();

        foreach ($locales as $locale)
        {
            $ad->translateOrNew($locale)->details = $request->get('details_' . $locale);
           $ad->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }
        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/ads/".$file_name);
            $ad->image = $file_name;
        }
        $ad->save();
        return redirect('admin/ads')->with('status', __('cp.create'));
    }


    public function edit($id)
    {
        $item = Ad::findOrFail($id);
        return view('admin.ads.edit', ['item' => $item]);
    }



    public function update(Request $request, $id)
    {
        $locales = Language::all()->pluck('lang');

        $ad = Ad::query()->findOrFail($id);

        foreach ($locales as $locale)
        {
            $ad->translateOrNew($locale)->details = $request->get('details_' . $locale);
           $ad->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/ads/".$file_name);
            $ad->image = $file_name;
        }

        $ad->save();
        return redirect('admin/ads')->with('status', __('cp.update'));
    }

    public function destroy($id)
    {
        $ad = Ad::query()->findOrFail($id);
        if ($ad) {
            Ad::query()->where('id', $id)->delete();
            return redirect('admin/ads')->with('status', __('website.deleted'));
        }
        return "fail";
    }
}
