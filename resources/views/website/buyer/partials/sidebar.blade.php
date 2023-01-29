@php
$lang = app()->getLocale()
@endphp
<div class="account-sidebar">
    <div class="top-sidebar">
        <div class="logo"><img src="{{asset('website_assets')}}/assets/images/logo.png" alt="alt"></div>
        <div class="close-menu"><i class="fas fa-times"> </i></div>
    </div>
    <div class="list-links">
        <div class="d-flex justify-content-start align-items-center">
            <div class="img me-3"><img class="img" src="{{auth('buyer')->user()->image_profile ?? asset('website_assets/assets/images/landing/avatar.png')}}" alt=""></div>
            <div class="info">
{{--                <h5 class="fw-bold">التاجر</h5>--}}
                <h6>{{auth('buyer')->user()->name}}</h6>
            </div>
        </div>
        <div class="mt-5">
            <ul>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets/assets/images/account-menu/followers.svg')}}" alt=""></div>
                            <span>اتابع </span>
                        </div>
                        <div class="number fw-bold">646</div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center @if(\Request::is("$lang/buyer/orders*")) active @endif" href="{{route('buyer.orders.index')}}">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/newOrder.svg" alt=""></div>
                            <span>طلب جديد </span>
                        </div>
                        <div class="number fw-bold">{{\App\Models\Order::newOrdersCount(auth('buyer')->id())}}</div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/points.svg" alt=""></div>
                            <span>نقاط مكافئة </span>
                        </div>
                        <div class="number fw-bold">66</div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/layer.svg" alt=""></div>
                            <span>الفروع </span>
                        </div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/credit.svg" alt=""></div>
                            <span>طرق الدفع </span>
                        </div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/technical-support.svg" alt="">
                            </div>
                            <span>الدعم الفنى  </span>
                        </div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/comm.svg" alt=""></div>
                            <span>الرسائل </span>
                        </div>
                    </a></li>
                <li class="mb-3"><a class="d-flex justify-content-between align-items-center" href="#">
                        <div class="d-flex">
                            <div class="icon"><img src="{{asset('website_assets')}}/assets/images/account-menu/setting.svg" alt=""></div>
                            <span> تعديل بياناتى </span>
                        </div>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
