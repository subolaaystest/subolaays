<?php
namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Image;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Prisoner;


use App\Imports\PrisonerImport;
use Maatwebsite\Excel\Facades\Excel;



class PrisonerController extends Controller
{
    
    
    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales,'settings' => $this->settings]);
    }



    public function index()
    {
        return view('admin.prisoners_data.home');
    }





    public function importExportView()
    {
       return view('import');
    }
     
    
    
     
    public function import() 
    {
        Excel::import(new PrisonerImport,request()->file('file'));  
        return redirect('admin/prisoners_data')->with('status', __('website.imported'));
    }






}
