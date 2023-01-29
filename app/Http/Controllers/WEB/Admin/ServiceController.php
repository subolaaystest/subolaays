<?php
namespace App\Http\Controllers\WEB\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Image;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Service;
use App\Models\ServicePlace;
use App\Models\ServiceCondition;
use App\Models\ServiceDocument;
use App\Models\ServiceStep;
use App\Models\ServiceFee;
use App\Models\ServiceQuery;
use App\Models\ServiceForm;


class ServiceController extends Controller
{


    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share(['locales' => $this->locales,'settings' => $this->settings]);
    }



    public function index()
    {
        $items = Service::latest()->get();
        return view('admin.procedures.home', ['items' => $items]);
    }


    public function create()
    {
        return view('admin.procedures.create');
    }


    public function store(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['details_' . $locale] = 'required';
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new Service();
        $item->url = $request->url;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->service_provider = $request->get('service_provider_' . $locale);
            $item->translateOrNew($locale)->beneficiary = $request->get('beneficiary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures')->with('status', __('cp.create'));
    }


    public function edit($id)
    {
        $item = Service::findOrFail($id);
        return view('admin.procedures.edit', ['item' => $item]);
    }


    public function update(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['details_' . $locale] = 'required';
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = Service::query()->findOrFail($id);

        $item->url = $request->url;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->service_provider = $request->get('service_provider_' . $locale);
            $item->translateOrNew($locale)->beneficiary = $request->get('beneficiary_' . $locale);
            $item->translateOrNew($locale)->details = $request->get('details_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures')->with('status', __('cp.update'));
    }


    public function destroy($id)
    {
        $item = Service::query()->findOrFail($id);
        if ($item) {
            Service::query()->where('id', $id)->delete();

            return redirect('admin/procedures')->with('status', __('website.deleted'));

        }
        return "fail";
    }






    public function procedures_places($id)
    {
        $service = Service::findOrFail($id);
        $items = ServicePlace::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_places', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_places($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_places', ['item' => $item]);
    }


    public function insert_procedures_places (Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServicePlace();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_places/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_places($id)
    {
        $item = ServicePlace::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_places', ['item' => $item]);
    }


    public function update_procedures_places(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServicePlace::query()->findOrFail($id);


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_places/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_places ($id)
    {
        $item = ServicePlace::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServicePlace::query()->where('id', $id)->delete();
            return redirect('admin/procedures_places/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }









    public function procedures_conditions($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceCondition::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_conditions', ['service' => $service,'items' => $items]);
    }


    public function create_procedures_conditions($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_conditions', ['item' => $item]);
    }


    public function insert_procedures_conditions(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceCondition();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_conditions/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_conditions($id)
    {
        $item = ServiceCondition::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_conditions', ['item' => $item]);
    }


    public function update_procedures_conditions(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
           $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceCondition::query()->findOrFail($id);


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_conditions/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_conditions($id)
    {
        $item = ServiceCondition::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceCondition::query()->where('id', $id)->delete();
            return redirect('admin/procedures_conditions/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }






    public function procedures_documents($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceDocument::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_documents', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_documents($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_documents', ['item' => $item]);
    }


    public function insert_procedures_documents(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['versions_count_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceDocument();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->versions_count = $request->get('versions_count_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_documents/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_documents($id)
    {
        $item = ServiceDocument::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_documents', ['item' => $item]);
    }


    public function update_procedures_documents(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['versions_count_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceDocument::query()->findOrFail($id);


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->versions_count = $request->get('versions_count_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_documents/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_documents($id)
    {
        $item = ServiceDocument::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceDocument::query()->where('id', $id)->delete();
            return redirect('admin/procedures_documents/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }







    public function procedures_steps($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceStep::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_steps', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_steps($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_steps', ['item' => $item]);
    }


    public function insert_procedures_steps(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['period_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceStep();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->period = $request->get('period_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_steps/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_steps($id)
    {
        $item = ServiceStep::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_steps', ['item' => $item]);
    }


    public function update_procedures_steps(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['period_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceStep::query()->findOrFail($id);


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->period = $request->get('period_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_steps/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_steps($id)
    {
        $item = ServiceStep::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceStep::query()->where('id', $id)->delete();
            return redirect('admin/procedures_steps/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }








    public function procedures_fees($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceFee::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_fees', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_fees($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_fees', ['item' => $item]);
    }


    public function insert_procedures_fees(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['total_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceFee();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->total = $request->get('total_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_fees/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_fees($id)
    {
        $item = ServiceFee::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_fees', ['item' => $item]);
    }


    public function update_procedures_fees(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['total_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceFee::query()->findOrFail($id);


        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->total = $request->get('total_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_fees/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_fees($id)
    {
        $item = ServiceFee::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceFee::query()->where('id', $id)->delete();
            return redirect('admin/procedures_fees/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }











    public function procedures_queries($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceQuery::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_queries', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_queries($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_queries', ['item' => $item]);
    }


    public function insert_procedures_queries(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceQuery();
        $item->service_id = $request->service_id;
        $item->phone = $request->phone;
        $item->email = $request->email;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_queries/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_queries($id)
    {
        $item = ServiceQuery::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_queries', ['item' => $item]);
    }


    public function update_procedures_queries(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceQuery::query()->findOrFail($id);
        $item->phone = $request->phone;
        $item->email = $request->email;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        $item->save();
        return redirect('admin/procedures_queries/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_queries($id)
    {
        $item = ServiceQuery::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceQuery::query()->where('id', $id)->delete();
            return redirect('admin/procedures_queries/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }









    public function procedures_forms($id)
    {
        $service = Service::findOrFail($id);
        $items = ServiceForm::where('service_id', $id)->latest()->get();
        return view('admin.procedures.procedures_forms', ['service' => $service, 'items' => $items]);
    }


    public function create_procedures_forms($id)
    {
        $item = Service::where('id', $id)->first();
        return view('admin.procedures.create_procedures_forms', ['item' => $item]);
    }


    public function insert_procedures_forms(Request $request)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = new ServiceForm();
        $item->service_id = $request->service_id;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }


        if(isset($request->file)){
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $filename  = rand(1, 1000) . "_" . time() . "_" . rand(1,50000) . 'book.' .$extension;
            $destinationPath = 'uploads/files';
            $file->move($destinationPath,$filename);
            $item->file = $filename;
        }

        $item->save();
        return redirect('admin/procedures_forms/' . $request->service_id)->with('status', __('cp.create'));
    }


    public function edit_procedures_forms($id)
    {
        $item = ServiceForm::where('id', $id)->first();
        return view('admin.procedures.edit_procedures_forms', ['item' => $item]);
    }


    public function update_procedures_forms(Request $request, $id)
    {

        $locales = Language::all()->pluck('lang');

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
        }

        $this->validate($request, $roles);

        $item = ServiceForm::query()->findOrFail($id);

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        }

        if(isset($request->file)){
            $file = $request->file;
            $extension = $file->getClientOriginalExtension();
            $filename  = rand(1, 1000) . "_" . time() . "_" . rand(1,50000) . 'book.' .$extension;
            $destinationPath = 'uploads/files';
            $file->move($destinationPath,$filename);
            $item->file = $filename;
        }

        $item->save();
        return redirect('admin/procedures_forms/' . $item->service_id)->with('status', __('cp.update'));
    }


    public function delet_procedures_forms($id)
    {
        $item = ServiceForm::query()->findOrFail($id);
        $service_id = $item->service_id;
        if ($item) {
            ServiceForm::query()->where('id', $id)->delete();
            return redirect('admin/procedures_forms/' . $service_id)->with('status', __('website.deleted'));
        }
        return "fail";
    }


}
