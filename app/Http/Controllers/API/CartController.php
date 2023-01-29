<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Addition;
use App\Models\Cart;
use App\Models\CartAddition;
use App\Models\City;
use App\Models\NotificationMessage;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductAddition;
use App\Models\Product;
use App\Models\PromotionCode;
use App\Models\Rate;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserWallet;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Image;


class CartController extends Controller
{
    public function image_extensions()
    {
        return array('jpg', 'png', 'jpeg', 'gif', 'bmp');
    }


    public function addProductToCart(Request $request ,$id){
//return $request;
        $myCartProduct = Cart::where('fcm_token', '=', $request->header('fcmToken'))->where('product_id',$id)->with('additions')->get();
           $kk=0;
           foreach($myCartProduct as $one){
               $a=CartAddition::where('cart_id',$one->id)->pluck('addition_id')->toArray();
                if($a==$request->addition_id){
                    $kk=$one->id;
                }
           }
         // return $kk;

        if($kk > 0){
            // $message = __('api.sameCart');
            // return response()->json(['status' => false, 'code' => 200, 'message' =>  $message]);
            $cart = Cart::where('id',$kk)->first();
            $cart->quantity = $cart->quantity + 1;
            $cart->save();

            $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();
            $count_products = count($myNewCart);

            $total_cart = 0;
            $total_addition = 0;
            foreach($myNewCart as $one) {
                $price_val =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;
                $total_cart +=$price_val * $one->quantity;
                    foreach($one->additions as $item){
                        $total_addition +=@$item->addition->price * $one->quantity;
                     }
            }


            $message = __('api.add_cart');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message , 'count_products'=>$count_products, 'total_cart'=>$total_cart+$total_addition]);

        }

        $myCart = new Cart();
        if(Auth::check()){
            $myCart->user_id = auth('api')->id();
          }
            $myCart->fcm_token = $request->header('fcmToken');
            $myCart->product_id = $id;
            $myCart->quantity = 1;

            $myCart->save();



        if($request->addition_id !=null){
            foreach($request->addition_id as $id => $addition_id){
                $data[] = [
                    'addition_id' => $addition_id,
                    'cart_id' => $myCart->id,
                ];
            }
            CartAddition::insert($data);
        }

            $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();
            $count_products = count($myNewCart);

            $total_cart = 0;
              $total_addition = 0;
            foreach($myNewCart as $one) {
                $price_val =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;
                $total_cart +=$price_val * $one->quantity;
                    foreach($one->additions as $item){
                        $total_addition +=@$item->addition->price * $one->quantity;
                     }
            }


            $message = __('api.add_cart');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message , 'count_products'=>$count_products, 'total_cart'=>$total_cart+$total_addition]);
        }


    public function getMyCart(Request $request)
    {

        $myCart = Cart::where('fcm_token', $request->header('fcmToken'))->with('product','additions')->paginate(20);
        if ($myCart) {
            //return $myCartProduct;
            $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();
            $count_products = count($myNewCart);
            $total_cart = 0;
              $total_addition = 0;
            foreach($myNewCart as $one) {
                $price_val =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;
                $total_cart +=$price_val * $one->quantity;
                    foreach($one->additions as $item){
                        $total_addition +=@$item->addition->price * $one->quantity;
                     }
            }

            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message  ,'total'=>$total_cart+$total_addition, 'MyCart' => $myCart ]);
        }
        $message = __('api.cartEmpty');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'MyCart' => $myCart]);

    }

    public function changeQuantity(Request $request ,$id)
    {

        $myCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->where('id',$id)->first();

        if ($myCart) {
               if($request->type==1){
                $newValue = $myCart->quantity +1 ;
                }else{
                    $newValue = $myCart->quantity -1 ;
                }
                $myCart->update(['quantity'=>$newValue]);
                $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product','additions')->get();
                  $total_cart = 0;
                  $total_addition = 0;
                    foreach($myNewCart as $one) {
                        $price_val =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;
                        $total_cart +=$price_val * $one->quantity;
                         foreach($one->additions as $item){
                           $total_addition +=@$item->addition->price * $one->quantity;
                         }

                    }
                    //  $total_addition=$total_addition * $newValue;
                $message = __('api.ok');
                return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'Quantity' => $newValue ,'total_cart'=>$total_addition+$total_cart ]);

        } else {
            $message = __('api.not_found');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message]);
        }
    }

    public function deleteProductCart(Request $request,$id){
        $myCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->where('id',$id)->delete();

        if($myCart){

            $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();
            $total_cart = 0;
             $total_addition = 0;
            foreach($myNewCart as $one) {
                $price_val =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;
                $total_cart +=$price_val * $one->quantity;

                  foreach($one->additions as $item){
                           $total_addition +=@$item->addition->price * $one->quantity;
                         }
            }

            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'total_cart'=>$total_cart+$total_addition]);
        }else{
            $message = __('api.not_found');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message]);
        }

    }

    public function checkOut(Request $request){

       $user_id = auth('api')->id();

       $validator = Validator::make($request->all(), [
           'customer_name' => 'required',
            'delivery_city_id' => 'required',
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }
        $myCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();

        if ($myCart) {
           if($myCart->isEmpty()){
            $message = __('api.cartEmpty');
            return response()->json(['status' => false, 'code' => 202, 'message' => $message]);
        }

        // $totalproduct = 0;
        // foreach($myCart as $one) {
        //     $price =  ($one->product->price_offer)? $one->product->price_offer:$one->product->price;

        //     $totalproduct +=$price * $one->quantity;

        // }

            $myNewCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->with('product')->get();
            $count_products = count($myNewCart);

            $totalproduct = 0;
            $total_addition = 0;
            foreach($myNewCart as $one) {
                $price_val =  ($one->product->price_offer !=0)? $one->product->price_offer:$one->product->price;
                $totalproduct +=$price_val * $one->quantity;
                    foreach($one->additions as $item){
                        $total_addition +=@$item->addition->price * $one->quantity;
                     }
            }

         $myCity=City::findOrFail($request->delivery_city_id);
         $total=$totalproduct + $total_addition +$myCity->deliveryCost;

        $promoCode=PromotionCode:: where('name',$request->get('promoCode_name'))->first();
         if($promoCode){
             $discount = ($total * $promoCode->discount)/100;
         }else {
             $discount =0 ;
            }


           if($request->payment_type==2){
                $item = Setting::query()->first();
               $points_amount = auth('api')->user()->points / $item->points_in_mony;

              if($total-$discount > $points_amount){
                 $message = __('api.your_points_not_enough');
                 return response()->json(['status' => false, 'code' => 200, 'message' => $message]);
                }else{
                    $remaining_mony=$points_amount-($total-$discount);
                    $remaining_points=$remaining_mony * $item->points_in_mony;
                }

           }

        $order= new Order();
        $order->user_id= $user_id;
        $order->delivery_city_id=$request->delivery_city_id;
        $order->customer_name=$request->customer_name;
        $order->mobile=$request->mobile;
        $order->latitude=$request->latitude;
        $order->longitude=$request->longitude;
        $order->payment_type =$request->payment_type;
        $order->delivery_cost=($myCity->deliveryCost == 0)? 0:$myCity->deliveryCost;
        $order->discount_code=($promoCode)? $promoCode->discount:0;
        $order->code_name=($promoCode)? $promoCode->name:0;
        $order->total_price=$total;
        $order->invoice_discount=$discount;
         if($request->type==1){
            $order->type=1;
            $order->from_name=$request->from_name;
            $order->to_name=$request->to_name;
            $order->gift_message=$request->gift_message;
         }
        $order->save();

        if($order){

            foreach ($myCart as $one) {
                 if($one->product->price_offer !=0){
                      $price=$one->product->price_offer;
                  }else{
                 $price=0;
                   }

                $ProductOrder = new OrderProduct();
                $ProductOrder->order_id = $order->id;
                $ProductOrder->product_id = $one->product_id;
                $ProductOrder->quantity = $one->quantity;
                $ProductOrder->discount = $one->product->discount;
                $ProductOrder->price =$one->product->price;
                $ProductOrder->offer_price =$price;
                $ProductOrder->save();

                foreach($one->additions as $item){
                     $addition=new OrderProductAddition();
                    $addition->addition_id =@$item->addition->id;
                    $addition->addition_name =@$item->addition->name;
                    $addition->addition_price =@$item->addition->price;
                    $addition->product_id = $ProductOrder->id;
                    $addition->order_id = $order->id;
                     $addition->save();
                     }

            }

            Cart::where('fcm_token', $request->header('fcmToken'))->delete();
        }
         if($request->payment_type==1){
             $item = Setting::query()->first();
         $wallet=new UserWallet();
         $wallet->user_id=$user_id;
         $wallet->order_id=$order->id;
         $wallet->total_price =$total;
         $wallet->points =($total-$discount) * $item->points_in_mony ;
         $wallet->points_percent =$item->points_in_mony;
         $wallet->type =1;
         $wallet->save();

         $user=User::findOrFail(Auth::user()->id);
         $user->points =  $user->points + $wallet->points;
         $user->save();
        }
         if($request->payment_type==2){
         $wallet=new UserWallet();
         $wallet->user_id=$user_id;
         $wallet->order_id=$order->id;
         $wallet->total_price =$total;
         $wallet->points =$item->points_in_mony - $remaining_points;
         $wallet->type =2;
         $wallet->points_percent =$item->points_in_mony;
         $wallet->save();

         $user=User::findOrFail(Auth::user()->id);
         $user->points =  $remaining_points;
         $user->save();
        }
        $my_user=User::findOrFail(Auth::user()->id);
        $my_user['access_token'] = $my_user->createToken('mobile')->accessToken;
        $message = __('api.status1');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message,
               'checkOut'=> ['phoneNumber'=>$request->mobile ,'totalProduct'=>$total ,'price_discount_code'=> $discount,'order'=>$order ,'my_user'=>$my_user ] ]);
    }
        else{
            $message = __('api.not_found');
            return response()->json(['status' => false, 'code' => 200, 'message' => $message]);

        }


    }
    public function monthlySubscripe(Request $request){

       $user_id = auth('api')->id();

       $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'ordered_date1' => 'required',
            'ordered_date2' => 'required',
            'ordered_date3' => 'required',
            'ordered_date4' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }
        $product = Product::findOrFail($request->product_id);

        if ($product) {

            $totalproduct = ($product->price_offer !=0)? $product->price_offer:$product->price;
            $total_addition = 0;
             if($request->has('additions')){
                $total_addition=   Addition::whereIn('id',$request->additions)->sum('price');
        }


         $total=$totalproduct + $total_addition;

        // $promoCode=PromotionCode:: where('name',$request->get('promoCode_name'))->first();
        //  if($promoCode){
        //      $discount = ($total * $promoCode->discount)/100;
        //  }else {
        //      $discount =0 ;
        //     }


        $order= new Order();
        $order->user_id= $user_id;
       // $order->delivery_city_id=$request->delivery_city_id;
       // $order->customer_name=$request->customer_name;
       // $order->mobile=$request->mobile;
        $order->ordered_date=$request->ordered_date1;
       // $order->latitude=$request->latitude;
       // $order->longitude=$request->longitude;
        $order->payment_type =3;
       // $order->delivery_cost=($myCity->deliveryCost == 0)? 0:$myCity->deliveryCost;
       // $order->discount_code=($promoCode)? $promoCode->discount:0;
       // $order->code_name=($promoCode)? $promoCode->name:0;
        $order->total_price=$total;
       // $order->invoice_discount=$discount;

        $order->save();

        $order2 = $order->replicate();
            $order2->ordered_date = $request->ordered_date2;


        $order2->save();

        $order3 = $order2->replicate();
            $order3->ordered_date = $request->ordered_date3;


        $order3->save();

        $order4 = $order3->replicate();
            $order4->ordered_date = $request->ordered_date4;


        $order4->save();


                 if($product->price_offer !=0){
                      $price=$product->price_offer;
                  }else{
                 $price=0;
                  }

                $ProductOrder = new OrderProduct();
                $ProductOrder->order_id = $order->id;
                $ProductOrder->product_id = $request->product_id;
                $ProductOrder->quantity = 1;
                $ProductOrder->discount = $product->discount;
                $ProductOrder->price =$product->price;
                $ProductOrder->offer_price =$price;
                $ProductOrder->save();

                  $ProductOrder2 = $ProductOrder->replicate();
                  $ProductOrder2->order_id = $order2->id;


                  $ProductOrder2->save();

                  $ProductOrder3 = $ProductOrder2->replicate();
                 $ProductOrder3->order_id =  $order3->id;


                  $ProductOrder3->save();

                  $ProductOrder4 = $ProductOrder3->replicate();
                 $ProductOrder4->order_id =  $order4->id;


                  $ProductOrder4->save();


                foreach($request->additions as $id => $item1){
                    $add=Addition::where('id',$item1)->first();
                     $addition=new OrderProductAddition();
                    $addition->addition_id =$item1;
                    $addition->addition_price =$add->price;
                    $addition->product_id = $ProductOrder->id;
                    $addition->order_id = $order->id;
                     $addition->save();
                     }
                foreach($request->additions as $id => $item2){
                    $add=Addition::where('id',$item2)->first();
                     $addition=new OrderProductAddition();
                    $addition->addition_id =$item2;
                    $addition->addition_price =$add->price;
                    $addition->addition_name =$add->name;
                    $addition->product_id = $ProductOrder2->id;
                    $addition->order_id = $order->id;
                     $addition->save();
                     }
                foreach($request->additions as $id => $item3){
                    $add=Addition::where('id',$item3)->first();
                     $addition=new OrderProductAddition();
                    $addition->addition_id =$item3;
                    $addition->addition_price =$add->price;
                    $addition->addition_name =$add->name;
                    $addition->product_id = $ProductOrder3->id;
                    $addition->order_id = $order->id;
                     $addition->save();
                     }
                foreach($request->additions as $id => $item4){
                    $add=Addition::where('id',$item4)->first();
                     $addition=new OrderProductAddition();
                    $addition->addition_id =$item4;
                     $addition->addition_price =$add->price;
                    $addition->addition_name =$add->name;
                    $addition->product_id = $ProductOrder4->id;
                    $addition->order_id = $order->id;
                     $addition->save();
                     }




        $message = __('api.status1');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message,
               'checkOut'=> ['phoneNumber'=>$request->mobile ,'totalProduct'=>$total ,'order'=>$order ] ]);
    }
        else{
            $message = __('api.not_found');
            return response()->json(['status' => false, 'code' => 200, 'message' => $message]);

        }


    }



  public function buyGift(Request $request ,$id){

        $user_id = auth('api')->id();

       $validator = Validator::make($request->all(), [
           'customer_name' => 'required',
            'delivery_city_id' => 'required',
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }


            $product = Product::where('status', 'active')->findOrFail($id);
             if($product){

            if($product->price_offer !=0){
                $totalproduct=$product->price_offer;
            }else{
                 $totalproduct=$product->price;
          }
           // $totalproduct = $product->price;
            $total_addition = 0;
            if($request->addition_id){
            foreach($request->addition_id as $addition_id) {

                  $total_addition +=Addition::where('id',$addition_id)->value('price');

            }
            }
        // $total_addition = $total_addition * $request->quantity;
         $myCity=City::findOrFail($request->delivery_city_id);
         $total=$totalproduct + $total_addition +$myCity->deliveryCost;

        $promoCode=PromotionCode:: where('name',$request->get('promoCode_name'))->first();
         if($promoCode){
             $discount = ($total * $promoCode->discount)/100;
         }else {
             $discount =0 ;
            }


           if($request->payment_type==2){
                $item = Setting::query()->first();
               $points_amount = auth('api')->user()->points / $item->points_in_mony;

              if($total-$discount > $points_amount){
                 $message = __('api.your_points_not_enough');
                 return response()->json(['status' => false, 'code' => 200, 'message' => $message]);
                }else{
                    $remaining_mony=$points_amount-($total-$discount);
                    $remaining_points=$remaining_mony * $item->points_in_mony;
                }

           }

        $order= new Order();
        $order->user_id= $user_id;
        $order->delivery_city_id=$request->delivery_city_id;
        $order->customer_name=$request->customer_name;
        $order->mobile=$request->mobile;
        $order->latitude=$request->latitude;
        $order->longitude=$request->longitude;
        $order->payment_type =$request->payment_type;
        $order->delivery_cost=($myCity->deliveryCost == 0)? 0:$myCity->deliveryCost;
        $order->discount_code=($promoCode)? $promoCode->discount:0;
        $order->code_name=($promoCode)? $promoCode->name:0;
        $order->total_price=$total;
        $order->invoice_discount=$discount;
        $order->type=1;  //gift
        $order->from_name=$request->from_name;
        $order->to_name=$request->to_name;
        $order->gift_message=$request->gift_message;


        $order->save();

        if($order){


                $ProductOrder = new OrderProduct();
                $ProductOrder->order_id = $order->id;
                $ProductOrder->product_id = $id;
                $ProductOrder->quantity = 1;
                $ProductOrder->discount = $product->discount;
                $ProductOrder->price =$product->price;
                $ProductOrder->offer_price =$product->price_offer;
                $ProductOrder->save();

                if($request->addition_id){
                    foreach($request->addition_id as $addition_id){
                        $add=Addition::where('id',$addition_id)->first();
                         $addition=new OrderProductAddition();
                        $addition->addition_id =$addition_id;
                        $addition->addition_price =$add->price;
                        $addition->addition_name =$add->name;
                        $addition->product_id = $ProductOrder->id;
                        $addition->order_id = $order->id;
                         $addition->save();
                     }
                }
        }

         if($request->payment_type==1){
              $item = Setting::query()->first();
             $wallet=new UserWallet();
             $wallet->user_id=$user_id;
             $wallet->order_id=$order->id;
             $wallet->total_price =$total;
             $wallet->points =($total-$discount) * $item->points_in_mony ;
             $wallet->points_percent =$item->points_in_mony;
             $wallet->type =1;
             $wallet->save();

             $user=User::findOrFail(Auth::user()->id);
             $user->points =  $user->points + $wallet->points;
             $user->save();
        }
         if($request->payment_type==2){
             $wallet=new UserWallet();
             $wallet->user_id=$user_id;
             $wallet->order_id=$order->id;
             $wallet->total_price =$total;
             $wallet->points =$item->points_in_mony - $remaining_points;
             $wallet->type =2;
             $wallet->points_percent =$item->points_in_mony;
             $wallet->save();

             $user=User::findOrFail(Auth::user()->id);
             $user->points =  $remaining_points;
             $user->save();
        }
         $my_user=User::findOrFail(Auth::user()->id);
         $my_user['access_token'] = $my_user->createToken('mobile')->accessToken;
        $message = __('api.status1');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message,
               'checkOut'=> ['phoneNumber'=>$request->mobile ,'totalProduct'=>$total ,'price_discount_code'=> $discount,'order'=>$order ,'my_user'=>$my_user ] ]);

         }else{
            $message = __('api.not_found');
            return response()->json(['status' => false, 'code' => 200, 'message' => $message]);

        }


    }


    public function checkPromo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200, 'validator' => implode("\n", $validator->messages()->all())]);
        }
        $promo = PromotionCode::where('name',$request->get('name'))->whereDate('end','>=', date('Y-m-d'))->whereDate('start','<=',date('Y-m-d'))->where('status','active')->first();
        if ($promo) {
            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message , 'PromotionCode'=> $promo]);
        } else {
            $message = __('api.wrongPromo');
            return response()->json(['status' => false, 'code' => 200, 'message' => $message ]);

        }

    }

    public function deleteCartItems(Request $request){
        $myCart = Cart::where('fcm_token', '=', $request->header('fcmToken'))->delete();

        if($myCart){
            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message]);
        }else{
            $message = __('api.not_found');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message]);
        }

    }




}
