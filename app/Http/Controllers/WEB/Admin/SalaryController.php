<?php
namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Image;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Salary;


use App\Imports\SalaryImport;
use Maatwebsite\Excel\Facades\Excel;



class SalaryController extends Controller
{
    
    
    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales,'settings' => $this->settings]);
    }



    public function index()
    {
        return view('admin.salaries.home');
    }





    public function importExportView()
    {
       return view('import');
    }
     
    
    
     
    public function import() 
    {
        Excel::import(new SalaryImport,request()->file('file'));  
        return redirect('admin/salaries')->with('status', __('website.imported'));
    }






}
