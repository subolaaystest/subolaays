<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Notification;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserRank;
use App\Models\Visitor;
use App\Models\Wallet;
use App\Notifications\NewPostNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Image;


class UserController extends Controller
{
    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,
        ]);
    }



    public function index(Request $request)
    {


        $items = User::query();

        if($request->email != ''){
            $items->where('email', 'like', '%' . $request->get('email') . '%');
        }

        if($request->phone != ''){
            $items->where('phone', 'like', '%' . $request->get('phone') . '%');
        }

        if($request->country_id != ''){
            $items->where('country_id', $request->country_id);
        }

        if($request->city_id != ''){
            $items->where('city_id', $request->city_id);
        }


        if($request->username != ''){
            $items->where('username', 'like', '%' . $request->get('username') . '%');
        }


        $items = $items->where('type','1');
        $items = $items->latest()->get();
        return view('admin.users.home', ['items' => $items]);

    }




    public function verified_users(Request $request)
    {
        $items = User::query();


        if($request->username != ''){
            $items->where('username', 'like', '%' . $request->get('username') . '%');
        }


        if($request->email != ''){
            $items->where('email', 'like', '%' . $request->get('email') . '%');
        }

        if($request->phone != ''){
            $items->where('phone', 'like', '%' . $request->get('phone') . '%');
        }

        if($request->country_id != ''){
            $items->where('country_id', $request->country_id);
        }

        if($request->city_id != ''){
            $items->where('city_id', $request->city_id);
        }

        $items = $items->where('type','1')->where('account_type', 1);
        $items = $items->latest()->get();
        return view('admin.users.verified_users', ['items' => $items]);

    }


    public function VerificationRequests()
    {
        $items = User::where('card_number', '<>', NULL)->where('date_of_issue', '<>', NULL)->where('date_of_expiration', '<>', NULL)->where('account_type', 0)->get();
        return view('admin.users.VerificationRequests', ['items' => $items]);
    }







    public function create()
    {
        $countries = Country::get();
        return view('admin.users.create', ['countries' => $countries]);
    }




    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'country_id' => 'required',
            'city_id' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();

        if($request->sponsor_username){
            $CheckParent = User::where('username', $request->sponsor_username)->first();
            if($CheckParent){
                $user->parent_id = $CheckParent->id;
            }
        }

        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->country_id = $request->country_id;
        $user->date_of_birth = $request->date_of_birth;
        $user->address = $request->address;
        $user->city_id = $request->city_id;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->card_number = $request->card_number;
        $user->date_of_issue = $request->date_of_issue;
        $user->date_of_expiration = $request->date_of_expiration;
        $user->position = $request->position;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->image = $file_name;
        }


        if ($request->hasFile('first_card_photo')) {
            $image = $request->file('first_card_photo');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->first_card_photo = $file_name;
        }


        if ($request->hasFile('second_card_photo')) {
            $image = $request->file('second_card_photo');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->second_card_photo = $file_name;
        }

        $user->save();

        return redirect('/admin/users')->with('status', __('cp.create'));
    }


    public function show($id)
    {
        $item = User::findOrFail($id);
        return view('admin.users.show', ['item' => $item]);
    }


    public function edit($id)
    {
        $countries = Country::get();
        $item = User::findOrFail($id);
        $cities = City::where('country_id', $item->country_id)->get();
        return view('admin.users.edit', ['item' => $item, 'countries' => $countries, 'cities' => $cities]);
    }



    public function editVerification($id)
    {
        $item = User::findOrFail($id);
        return view('admin.users.editVerification', ['item' => $item]);
    }




 public function updateVerification(Request $request, $id)
    {

        $user= User::findOrFail($id);
        $user->account_type = $request->account_type;
        $user->save();

        return redirect('/admin/VerificationRequests')->with('status', __('cp.update'));
    }





    // public function updateVerification(Request $request, $id)
    // {
    //     $item = User::findOrFail($id);
    //     return view('admin.users.edit_password', ['item' => $item]);
    // }



    public function update(Request $request, $id)
    {
        $user= User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,'.$user->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
            'country_id' => 'required',
            'date_of_birth' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->username = $request->username;
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country_id = $request->country_id;
        $user->date_of_birth = $request->date_of_birth;
        $user->address = $request->address;
        $user->city_id = $request->city_id;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->card_number = $request->card_number;
        $user->date_of_issue = $request->date_of_issue;
        $user->date_of_expiration = $request->date_of_expiration;
        // $user->position = $request->position;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->image = $file_name;
        }


        if ($request->hasFile('first_card_photo')) {
            $image = $request->file('first_card_photo');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->first_card_photo = $file_name;
        }


        if ($request->hasFile('second_card_photo')) {
            $image = $request->file('second_card_photo');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("uploads/images/users/$file_name");
            $user->second_card_photo = $file_name;
        }

        $user->save();

        return redirect('/admin/users')->with('status', __('cp.update'));
    }



    public function edit_password(Request $request, $id)
    {
        $item = User::findOrFail($id);
        return view('admin.users.edit_password', ['item' => $item]);
    }



    public function DepositAmount()
    {
        $items =  Wallet::where(['action_user_id' => 0, 'action_type' => 1])->latest()->get();



        return view('admin.users.DepositAmount', ['items' => $items]);
    }



    public function profitPercent(Request $request)
    {

         if($request->username != ''){
            $items = User::where('investment_amount', '>', 0)->where('username', 'like', '%' . $request->get('username'))->orderBy('real_investment_profits', 'desc')->get();
        }else{
            $items = User::where('investment_amount', '>', 0)->orderBy('real_investment_profits', 'desc')->get();
        }


        return view('admin.users.profitPercent', ['items' => $items]);
    }



    public function ranks_prizes(Request $request)
    {

        if($request->username != ''){
            $usersIDs = User::where('username', 'like', '%' . $request->get('username') . '%')->pluck('id')->toArray();
            $items  = UserRank::whereIn('user_id', $usersIDs)->get();
        }else{
            $items = UserRank::latest()->get();
        }

        return view('admin.users.ranks_prizes', ['items' => $items]);
    }



    public function visitors(Request $request)
    {

        $items = Visitor::query();

        //Carbon::now()


        if($request->filter_by == 'daily'){
            $items->whereDate('created_at', '=', Carbon::today()->toDateString());
        }


        if($request->filter_by == 'weekly'){
            $items->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()]);
        }


        if($request->filter_by == 'monthly'){
            $items->whereBetween('created_at', [Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()]);
        }



        $items = $items->latest()->get();
        return view('admin.users.visitors', ['items' => $items]);
    }




    public function InsertDepositAmount (Request $request)
    {
        $users_rules=array(
            'username' => 'required',
            'amount' => 'required',
            'payment_method' => 'required',
        );

        $users_validation = Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }

        $user = User::where('username', $request->username)->first();


        if(!$user){
            return redirect()->back()->with('status', __('cp.pleaseEnterTrueUsername'));
        }else{

            $item = new Wallet();
            $item->action_user_id = 0;
            $item->action_type = 1;
            $item->user_id = $user->id;
            $item->amount = $request->amount;
            $item->type = 'deposit';
            $item->operation_id = 1;
            $item->payment_method = $request->payment_method;
            $item->save();


            $message_en = "You has deposited  " . $request->amount . "$ into your account";
            $message_ar = "لقد قمت بإيداع مبلغ  " . $request->amount . "$  " .  "في حسابك";

            $notification = new Notification();
            $notification->user_id = $user->id;
            $notification->message_ar = $message_ar;
            $notification->message_en = $message_en;
            $notification->save();


            return redirect()->back()->with('status', __('cp.TheAmountIsDepositedSuccessfully'));
        }

    }






    public function update_password (Request $request, $id)
    {
        $users_rules=array(
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
        );

        $users_validation=Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }

        $user = User::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('status', __('cp.update'));
    }



    public function destroy($id)
    {
        $item = User::query()->findOrFail($id);
        if ($item) {
            User::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }


}
