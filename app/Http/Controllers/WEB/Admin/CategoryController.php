<?php


namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

use Image;
use App\Models\Setting;
use App\Models\Language;
use App\Models\Category;
use App\Models\Post;
use App\Models\Photo;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share([
            'locales' => $this->locales,
            'settings' => $this->settings,

        ]);
    }
    
    
    
    public function viewPages()
    {
        $items = Category::where('is_page', 1)->get();
        return view('admin.categories.viewPages', ['items' => $items]);
    }


    
    public function editPage($id)
    {
        $item = Category::findOrFail($id);
        return view('admin.categories.editPage', ['item' => $item]);

    }


    public function updatePage(Request $request)
    {
        $roles = [
        //    'image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['details_' . $locale] = 'required';
           $roles['name_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Category::findOrFail($request->id);
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
           $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/categories/".$file_name);
            $item->image = $file_name;
        }

        $item->save();
        return redirect('admin/pages')->with('status', __('cp.update'));
    }



        
    public function viewPhotos()
    {
        $items = Post::where('category_id', 34)->latest()->get();
        return view('admin.categories.viewPhotos ', ['items' => $items]);
    }


    public function viewVideo()
    {
        $items = Post::where('category_id', 35)->latest()->get();
        return view('admin.categories.viewVideo  ', ['items' => $items]);
    }





    public function viewPosts()
    {
        $post_categories = Category::where(['has_posts' => 1, 'is_photo' => 0, 'is_vedio' => 0, 'is_page' => 0, 'is_url' => 0])->pluck('id')->toArray();
        $items = Post::whereIn('category_id', $post_categories)->latest()->get();
        return view('admin.categories.viewPosts', ['items' => $items]);
    }




    public function deletePost($id)
    {
        $item = Post::query()->findOrFail($id);
        if ($item) {
            Post::query()->where('id', $id)->delete();
            return redirect('admin/posts/')->with('status', __('website.deleted'));
        }
        return "fail";
    }


    public function deletePhoto($id)
    {
        $item = Post::query()->findOrFail($id);
        if ($item) {
            Post::query()->where('id', $id)->delete();
            return redirect('admin/photos/')->with('status', __('website.deleted'));
        }
        return "fail";
    }



    public function deletevideo($id)
    {
        $item = Post::query()->findOrFail($id);
        if ($item) {
            Post::query()->where('id', $id)->delete();
            return redirect('admin/video/')->with('status', __('website.deleted'));
        }
        return "fail";
    }




    public function createPost()
    {
        $post_categories = Category::where(['has_posts' => 1, 'is_photo' => 0, 'is_vedio' => 0, 'is_page' => 0, 'is_url' => 0])->get();
        return view('admin.categories.createPost', ['post_categories' => $post_categories]);
    }



    public function createPhotos ()
    {
        return view('admin.categories.createPhotos');
    }



    
    public function createvideo()
    {
        return view('admin.categories.createvideo');
    }


    public function insertPost (Request $request)
    {
        $roles = [
        //    'image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['summary_' . $locale] = 'required';
            $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new Post();
        $item->category_id = $request->category_id;
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/posts/".$file_name);
            $item->image = $file_name;
        }

        $item->save();



        if($request->has('filename')  && !empty($request->filename))
        {
           foreach($request->filename as $one)
           {
               if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = rand(1000000, 9999999) . "_" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $newName = $name. ".jpg";
                    Image::make($one)->resize(2000, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/photos/$newName");
                    $item_image= new Photo();
                    $item_image->post_id = $item->id;
                    $item_image->image = $newName;
                    $item_image->save();
                }
           }
        }

        return redirect('admin/posts')->with('status', __('cp.create'));
    }



    public function insertPhotos(Request $request)
    {
        $roles = [
        //    'image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['summary_' . $locale] = 'required';
            $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new Post();
        $item->category_id = 34;
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/posts/".$file_name);
            $item->image = $file_name;
        }

        $item->save();



        if($request->has('filename')  && !empty($request->filename))
        {
           foreach($request->filename as $one)
           {
               if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = rand(1000000, 9999999) . "_" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $newName = $name. ".jpg";
                    Image::make($one)->resize(2000, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/photos/$newName");
                    $item_image= new Photo();
                    $item_image->post_id = $item->id;
                    $item_image->image = $newName;
                    $item_image->save();
                }
           }
        }

        return redirect('admin/photos')->with('status', __('cp.create'));
    }



    public function insertvideo(Request $request)
    {
        $roles = [
        //    'image' => 'required|image|mimes:jpeg,jpg,png',
        'url' => 'required|url',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            // $roles['summary_' . $locale] = 'required';
            // $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new Post();
        $item->category_id = 35;
        $item->url = $request->url;
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($logo)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/posts/".$file_name);
            $item->image = $file_name;
        }

        $item->save();

        return redirect('admin/video')->with('status', __('cp.create'));
    }



    public function editPhotos($id)
    {
        $item = Post::findOrFail($id);
        return view('admin.categories.editPhotos', ['item' => $item]);
    }




    public function editvideo($id)
    {
        $item = Post::findOrFail($id);
        return view('admin.categories.editvideo', ['item' => $item]);
    }




    public function editPost($id)
    {
        $post_categories = Category::where(['has_posts' => 1, 'is_photo' => 0, 'is_vedio' => 0, 'is_page' => 0, 'is_url' => 0])->get();
        $item = Post::findOrFail($id);
        return view('admin.categories.editPost', ['post_categories' => $post_categories, 'item' => $item]);
    }


    public function updatePost (Request $request)
    {
        $roles = [
        //    'image' => 'nullable|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['summary_' . $locale] = 'required';
            $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Post::where('id', $request->id)->first();
        $item->category_id = $request->category_id;
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
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


        return redirect('admin/posts')->with('status', __('cp.update'));
    }

    

    public function updatePhotos (Request $request)
    {
        $roles = [
        //    'image' => 'nullable|image|mimes:jpeg,jpg,png',
        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['summary_' . $locale] = 'required';
            $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Post::where('id', $request->id)->first();
        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
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


        return redirect('admin/photos')->with('status', __('cp.update'));
    }



    public function updatevideo (Request $request)
    {
        $roles = [
        //    'image' => 'nullable|image|mimes:jpeg,jpg,png',
        'url' => 'required|url',

        ];

        $locales = Language::all()->pluck('lang');
        
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            // $roles['summary_' . $locale] = 'required';
            // $roles['details_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Post::where('id', $request->id)->first();
        $item->url = $request->url;

        
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->summary = $request->get('summary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        if ($request->hasFile('image')) {
            $logo = $request->file('image');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
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

        return redirect('admin/video')->with('status', __('cp.update'));
    }

    
    public function create()
    {
        return view('admin.categories.create');
    }

    
    
    
    public function store(Request $request)
    {
        $roles = [
            'image' => 'nullable|image|mimes:jpeg,jpg,png',
            // 'name'     => 'required',

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $cat= new Category();


        foreach ($locales as $locale)
        {
            $cat->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/category/".$file_name);
            $cat->image = $file_name;
        }
        $cat->sub_id = 0;
        $cat->save();
        return redirect()->back()->with('status', __('cp.create'));

    }



    public function show($id)
    {
        $item = Category::findOrFail($id);
    }




    public function edit($id)
    {
        $item = Category::findOrFail($id);
        return view('admin.categories.edit', [
            'item' => $item
        ]);
    }

    
    
    
    public function update(Request $request, $id)
    {

        $roles = [
            'image' => 'image|mimes:jpeg,jpg,png',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


        $item = Category::query()->findOrFail($id);

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name = $request->get('name_' . $locale);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(2000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/category/".$file_name);
            $item->image = $file_name;
        }
        $item->save();

        return redirect()->back()->with('status', __('cp.update'));
    }

    
    
    
    public function destroy($id)
    {

        $item = Category::query()->findOrFail($id);
        if ($item) {
            Category::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
