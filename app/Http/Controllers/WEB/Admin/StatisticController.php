<?php
namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Image;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Statistic;


class StatisticController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales,'settings' => $this->settings]);
    }



    public function index()
    {
        $items = Statistic::get();
        return view('admin.statistics.home', ['items' => $items]);
    }



    public function create()
    {
        return view('admin.statistics.create');
    }



    public function store(Request $request)
    {
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new Statistic();
        $item->count = $request->count;

        foreach ($locales as $locale)
        {
           $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/statistics/".$file_name);
            $item->image = $file_name;
        }
        $item->save();
        return redirect('admin/statistics')->with('status', __('cp.create'));
    }


    public function edit($id)
    {
        $item = Statistic::findOrFail($id);
        return view('admin.statistics.edit', ['item' => $item]);
    }



    public function update(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Statistic::query()->findOrFail($id);

        $item->count = $request->count;

        foreach ($locales as $locale)
        {
           $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/statistics/".$file_name);
            $item->image = $file_name;
        }
        $item->save();

        return redirect('admin/statistics')->with('status', __('cp.update'));
    }

    public function destroy($id)
    {
        $ad = Statistic::query()->findOrFail($id);
        if ($ad) {
            Statistic::query()->where('id', $id)->delete();
            return redirect('admin/statistics')->with('status', __('website.deleted'));
        }
        return "fail";
    }



}
