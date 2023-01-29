<?php
namespace App\Http\Controllers\WEB\Admin;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use Image;
use Response;

class PostController extends Controller
{

    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales, 'settings' => $this->settings]);
    }


    public function index()
    {
        $items = Post::orderBy('id', 'desc')->get();
        return view('admin.posts.home', ['items' => $items]);
    }


    public function create()
    {
        return view('admin.posts.create');
    }



    public function store(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        $item = new Post();
        $item->category_id = $request->category_id;
        $item->url = $request->url;
        $item->is_marquee = $request->is_marquee;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = rand(1000000, 9999999) . "_" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->save("uploads/posts/".$file_name);
            $item->image = $file_name;
        }
        $item->save();


        if($request->has('filename')  && !empty($request->filename))
        {
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $newName = rand(1000000, 9999999) . "_" . time() . "" . rand(1000000, 9999999). ".jpg";
                    Image::make($one)->save("uploads/photos/$newName");
                    $item_image= new Photo();
                    $item_image->post_id = $item->id;
                    $item_image->image = $newName;
                    $item_image->save();
                }
            }
        }

        return redirect()->route('admin.posts.index')->with('status', __('cp.create'));
    }



    public function edit($id)
    {
        $item = Post::findOrFail($id);

        return view('admin.posts.edit', ['item' => $item]);
    }



    public function update(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        $item = Post::findOrFail($id);

        $item->category_id = $request->category_id;
        $item->url = $request->url;
        $item->is_marquee = $request->is_marquee;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/posts/".$file_name);
            $item->image = $file_name;
        }
        $item->save();

        $imgsIds = $item->photos->pluck('id')->toArray();
        $newImgsIds = ($request->has('oldImages'))? $request->oldImages:[];
        $diff = array_diff($imgsIds,$newImgsIds);
        Photo::whereIn('id',$diff)->delete();

        if($request->has('filename')  && !empty($request->filename)){
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = str_random(15) . "_" .str_random(8) . "_" .  "_" . time() . "_" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(2000, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/photos/$newName");
                    }

                    $item_image= new Photo();
                    $item_image->post_id = $item->id;
                    $item_image->image = $newName;
                    $item_image->save();
                }
            }
        }
        return redirect()->route('admin.posts.index')->with('status', __('cp.update'));
    }


    public function show($id)
    {
        $item = Post::findOrFail($id);
        return view('admin.posts.show',['item' => $item]);
    }


    public function destroy($id)
    {
        $item = Post::query()->findOrFail($id);
        if ($item) {
            Post::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
