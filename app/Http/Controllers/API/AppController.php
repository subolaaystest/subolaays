<?php
namespace App\Http\Controllers\API;
use App\Models\Ad;
use App\Models\Category;

use App\Models\Product;
use App\Models\Question;
use App\Models\City;
use App\Models\Cart;
use App\Models\Service;
use App\Models\AdditionService;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Workrequest;
use App\Models\EventCategory;
use App\Models\Giftcard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AppController extends Controller
{


    public function getAds()
    {
        $data = Ad::query()->where('status', 'active')->get();
        if (count($data) > 0) {
            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'ads' => $data]);

        } else {
            $message = __('api.not_found');
            // return mainResponse(true, $message, $data, 200, 'items', '');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'ads' => $data]);

        }
    }

    public function getCities()
    {

        $cities = City::query()->where('status', 'active')->get();

        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'cities' => $cities]);
    }

    public function getCategories()
    {
        $categories = Category::query()->where('status', 'active')->get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'categories' => $categories]);
    }
    public function eventCategories()
    {
        $eventCategories = EventCategory::query()->where('status', 'active')->get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'eventCategories' => $eventCategories]);
    }
    public function getGiftCards()
    {
        $giftcards = Giftcard::query()->where('status', 'active')->get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'giftcards' => $giftcards]);
    }

    public function allQuestions()
    {
        $questions = Question::query()->where('status', 'active')->get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'questions' => $questions]);
    }



    public function pages($id)
    {

        $page = Page::where('id',$id)->first();

        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' =>$message,'page'=>$page]);

    }

    public function getSetting()
    {

        $settings = Setting::query()->first();

        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' =>$message,'settings'=>$settings]);

    }

    public function contactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'mobile' => 'required|digits_between:8,12',
            'name' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }

        $contact = new  Contact();
        $contact->email = $request->get('email');
        $contact->name = $request->get('name');
        $contact->mobile = $request->get('mobile');
        $contact->message = $request->get('message');
        $contact->read = 0;
        $contact->save();

        $message = __('api.ok');

        return response()->json(['status' => true, 'code' => 200, 'message' => $message]);

    }
    public function workRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'mobile' => 'required|digits_between:8,12',
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }

        $workRequest = new  Workrequest();
        $workRequest->email = $request->get('email');
        $workRequest->name = $request->get('name');
        $workRequest->mobile = $request->get('mobile');
        $workRequest->read = 0;
        $workRequest->save();

        $message = __('api.ok');

        return response()->json(['status' => true, 'code' => 200, 'message' => $message]);

    }
}







