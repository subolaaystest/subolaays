@extends('website.buyer.layout')
@push('css')
    <style>
        .building-box input:checked ~ .icon.bg-gray {
            background: var(--bs-gray-500);
        }
    </style>
@endpush
@section('main-content')
    <div class="page-content-inner bargains-request mt-5">
        <div class="add-product-title d-flex justify-content-between">
            <h2>تفاصيل العرض</h2>
            <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>{{$order->status}}</span>
            </button>
        </div>
        <div class="order-details">
            <div class="row">
                <div class="col-lg-4">
                    <div class="order-details-box"> <span>رقم العرض </span>
                        <h5>{{$order->order_number}}</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-details-box"> <span> تاريخ ووقت الطلب </span>
                        <h5>{{$order->created_at->toDateTimeString()}}</h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-details-box"> <span>إجمالي الطلب</span>
                        <h5> {{$order->final_total}} ريال</h5>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5 cus-hr">
        <div class="add-product-title">
            <h2>تفاصيل التاجر </h2>
           @foreach($order->sellerOrderProducts  as $orderProduct)
                <div class="merchant-details d-flex justify-content-between mb-4">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="img me-3"> <img class="img" src="{{$orderProduct->seller->image_profile ?? ''}}" alt=""/></div>
                        <div class="info">
                            <h6>التاجر</h6>
                            <h5 class="mb-0">{{$orderProduct->seller->name ?? ''}}</h5>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <hr class="my-5 cus-hr">
        <div class="add-product-title">
            <h2>اﻟﻤﻨﺘﺠﺎت </h2>
        </div>
        <div class="table-container">
            <div class="dash-table table-responsive">
                <table class="table responsive" id="">
                    <thead>
                    <th>المنتج</th>
                    <th>الإسم</th>
                    <th>القسم</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    </thead>
                    <tbody>
                    @foreach($order->orderProducts as $orderProduct)
                        <tr>
                            <td><div class="table-img">
                                  @if($orderProduct->product->main_image)  <img src="{{$orderProduct->product->main_image}}" />@endif
                                </div></td>
                            <td><div class="table-two-texts"><h5>{{$orderProduct->product->name}}</h5></div></td>
                            <td><div class="table-two-texts"><h5>{{$orderProduct->product->main_category->name}}</h5><h6> {{$orderProduct->product->sub_category->name}} </h6></div></td>
                            <td><h5 class="textt-green">{{$orderProduct->price}} ريال</h5></td>
                            <td><h5><strong>{{$orderProduct->quantity}}</strong></h5></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

{{--        <hr class="my-5 cus-hr">--}}
{{--        <div class="add-product-title">--}}
{{--            <h2>تفاصيل الشحن</h2>--}}
{{--        </div>--}}
{{--        <div class="row row-cols-1 row-cols-md-2 align-items-end">--}}
{{--            <div class="col">--}}
{{--                <div class="order-details-box"> <span> تاريخ ووقت الطلب </span>--}}
{{--                    <h5>   12 سبتمبر ، 2021 -  50:4 مساءً</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="order-details-box"> <span> خيارات الشحن </span>--}}
{{--                    <h5> خيارات الشحن  <b class="textt-red">50 ريال + 20 ريال توصيل سريع</b></h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="add-product-title pt-5">--}}
{{--            <h2>ملاجظاتك</h2>--}}
{{--            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء        </p>--}}
{{--        </div>--}}


        <hr class="my-5 cus-hr">
        <div class="add-product-title">
            <h2>الفاتورة</h2>
        </div>
        <div class="order-details">
            <div class="order-total">
                <ul class="p-0 m-0">
                    <li>
                        <h5>السعر الفرعي </h5>
                        <h6>{{$order->sub_total}} ريال</h6>
                    </li>
                    @if($order->shipping_method_id)
                    <li>
                        <h5>التوصيل<span class="express">Express </span></h5>
                        <h6>{{$order->shipping_method_cost}} ريال</h6>
                    </li>
                    @endif
                    @if($order->coupon_id)
                    <li>
                        <h5>كوبون الخصم </h5>
                        <h6>{{$order->coupon_discount}} ريال</h6>
                    </li>
                    @endif
                    <li>
                        <h5>إجمالي الطلبات</h5>
                        <h6 class="fw-bold">{{$order->final_total}} ريال</h6>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
{{--        <div class="coupon-note">--}}
{{--            <h3 class="m-0">تحتاج مساعدة ؟</h3>--}}
{{--            <div class="coupon-finish"> <img src="../../assets/images/landing/help.png" alt=""></div>--}}
{{--        </div>--}}
{{--        <div class="technical-support d-flex justify-content-between align-items-center mt-3">--}}
{{--            <p class="m-0">الدعم الفني</p>--}}
{{--            <svg>--}}
{{--                <use href="../../assets/images/icons/icons.svg#person"></use>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-start align-items-center mt-5">--}}
{{--            <button class="btnn-orange btn-fill px-5 me-3 btn btnn hvr-shadow" data-bs-toggle="modal" data-bs-target="#evaluationModal"><span>تقييم التاجر</span></button>--}}
{{--            <button class="btnn-red btn btnn btn-fill px-5 hvr-shadow" type="button"><span>طباعة الفاتورة</span>--}}
{{--            </button>--}}
{{--        </div>--}}
    </div>
{{--    <div class="modal fade" id="evaluationModal" tabindex="-1" aria-labelledby="dayModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content evaluation-modal">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="timeModalLabel"> </h5>--}}
{{--                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body p-5">--}}
{{--                    <div class="cansel-offer-modal p-0"> <span class="close" data-bs-toggle="modal" data-bs-target="#dayModal">--}}
{{--                    <svg>--}}
{{--                      <use href="../../assets/images/icons/icons.svg#close"></use>--}}
{{--                    </svg></span>--}}
{{--                        <h5 class="fw-bold red">تقييم التاجر</h5>--}}
{{--                        <p>يسعدنا معرفة مدى رضاك عن الخدمة</p>--}}
{{--                        <h5 class="fw-bold">سلوك التاجر</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-1" id="angry">--}}
{{--                                <label for="angry"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-1" id="sad">--}}
{{--                                <label for="sad"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-1" id="smile">--}}
{{--                                <label for="smile"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-1" id="happy">--}}
{{--                                <label for="happy"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="fw-bold">سرعة الرد</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="angry-2">--}}
{{--                                <label for="angry-2"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="sad-2">--}}
{{--                                <label for="sad-2"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="smile-2">--}}
{{--                                <label for="smile-2"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="happy-2">--}}
{{--                                <label for="happy-2"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="fw-bold">ما هي المشكلة</h5>--}}
{{--                        <ul class="payments-list-check problem">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="payment" id="complaint">--}}
{{--                                <label for="complaint">--}}
{{--                                    <div class="title">توصيل متأخر</div>--}}
{{--                                </label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="payment" id="suggestion">--}}
{{--                                <label for="suggestion">--}}
{{--                                    <div class="title">غير مهذب</div>--}}
{{--                                </label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="payment" id="opinions">--}}
{{--                                <label for="opinions">--}}
{{--                                    <div class="title">المنتج غير الوصف</div>--}}
{{--                                </label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="input-583">ملاحظاتك  </label>--}}
{{--                            <textarea class="form-control" rows="5"></textarea>--}}
{{--                        </div>--}}
{{--                        <h5 class="fw-bold red">تقييم المنصة</h5>--}}
{{--                        <p>يسعدنا معرفة مدى رضاك عن الخدمة</p>--}}
{{--                        <h5 class="fw-bold">سلوك التاجر</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-3" id="angry-3">--}}
{{--                                <label for="angry-3"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-3" id="sad-3">--}}
{{--                                <label for="sad-3"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-3" id="smile-3">--}}
{{--                                <label for="smile-3"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-3" id="happy-3">--}}
{{--                                <label for="happy-3"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="fw-bold">التنقل السريع بين صفحات المنصة</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-4" id="angry-4">--}}
{{--                                <label for="angry-4"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="sad-4">--}}
{{--                                <label for="sad-4"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="smile-4">--}}
{{--                                <label for="smile-4"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-2" id="happy-4">--}}
{{--                                <label for="happy-4"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="fw-bold red">قيم البضاعة</h5>--}}
{{--                        <p>يسعدنا معرفة مدى رضاك عن الخدمة</p>--}}
{{--                        <h5 class="fw-bold">البضاعة كانت سليمة</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-5" id="angry-5">--}}
{{--                                <label for="angry-5"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-5" id="sad-5">--}}
{{--                                <label for="sad-5"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-5" id="smile-5">--}}
{{--                                <label for="smile-5"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-5" id="happy-5">--}}
{{--                                <label for="happy-5"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h5 class="fw-bold">البضاعة نفس المطلوبة</h5>--}}
{{--                        <ul class="payments-list-check mt-4">--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-6" id="angry-6">--}}
{{--                                <label for="angry-6"> <img class="img" src="../../assets/images/landing/smile/angry.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/angry-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-6" id="sad-6">--}}
{{--                                <label for="sad-6"> <img class="img" src="../../assets/images/landing/smile/sad.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/sad-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-6" id="smile-6">--}}
{{--                                <label for="smile-6"> <img class="img" src="../../assets/images/landing/smile/smile.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/smile-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <input type="radio" name="smile-6" id="happy-6">--}}
{{--                                <label for="happy-6"> <img class="img" src="../../assets/images/landing/smile/happy.png" alt=""><img class="img-active" src="../../assets/images/landing/smile/happy-active.png" alt=""></label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <button class="w-100 btnn-orange btn-fill btn btnn hvr-shadow send" data-bs-toggle="modal" data-bs-target="#dayModal"><span>ارسال </span></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
