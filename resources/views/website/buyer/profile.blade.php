@extends('website.buyer.layout')
@push('css')
    <style>
        .building-box input:checked ~ .icon.bg-gray{
            background: var(--bs-gray-500);
        }
    </style>
@endpush
@section('main-content')
    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="home-progress">
        <div class="row m-0 w-100">
            <div class="col-10">
                <h2 class="home-progress-title">أكمل إعدادات متجرك</h2>
                <div class="home-progress-bar-parent m-0">
                    <div class="home-progress-bar-inner" style="width:57%"></div>
                    <h4><span>مكتمل</span><span><div class="counter">57</div>% </span></h4>
                </div>
            </div>
        </div><a class="icon" href="#">
            <svg>
                <use href="{{asset('website_assets/')}}/assets/images/icons/icons.svg#arrow-left"></use>
            </svg></a>
    </div>
    @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
    @endif
    @if($errors->count() > 0)
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form method="POST" action="{{route('buyer.profile',\Auth::guard('buyer')->user()->id)}}">
        @csrf
        <div class="support-content">
            <div class="sign-up-steps-title">
                <h2> ﻧﻮع اﻟﻤﻨﺸﺄة</h2>
                <p> ﻣﻦ ﻓﻀﻠﻚ أﺧﺘﺮ ﻧﻮع اﻟﻤﻨﺸﺄة   </p>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-wrap">
                @foreach($buyer_categories as $category)
                    <div class="building-box mx-3">
                        <input type="radio" name="buyer_category_id"id="food-delivery" value="{{$category->id}}" {{(isset($category) && $category->id == \Auth::guard('buyer')->user()->buyer_category_id) ? "checked" : "" }}>
                        <div class="icon"> <img src="{{$category->image}}" alt=""></div>
                        <h3>{{$category->name}}</h3>
                    </div>
                @endforeach
                @if(auth('buyer')->user()->buyer_category_id && auth('buyer')->user()->buyerCategory->isNotActive())
                    <div class="building-box mx-3">
                        <input type="radio" name="buyer_category_id"id="food-delivery" value="{{auth('buyer')->user()->buyer_category_id}}"  checked>
                        <div class="icon bg-gray"> <img class="bg-gray" src="{{auth('buyer')->user()->buyerCategory->image}}" alt=""></div>
                        <h3>{{auth('buyer')->user()->buyerCategory->name}}</h3>
                    </div>
                @endif
                <div class="building-box other-building mx-2">
                    <input type="radio" name="other_buyer_category" id="position">
                    <div class="icon"> <img src="{{asset('website_assets/assets/images/building/position.png')}}" alt=""></div>
                    <h3>أخرى</h3>
                </div>
            </div>
            <div class="form-other other-building-form">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="إضافة منشأة أخرى" name="other_buyer_category_text">
                </div>
            </div>
            <div class="form mt-5">
                <div class="row m-0 w-100 mt-5">
                    <div class="col-12 col-md-6">
                        <div class="input-text-icon-box mb-3">
                            <svg>
                                <use href="{{asset('website_assets/')}}/assets/images/icons/icons.svg#phone"></use>
                            </svg><span>رقم الجوال</span>
                            <input class="phone_number" type="text" id="phone" name="mobile" value="{{\Auth::guard('buyer')->user()->mobile}}">
                            <input type="hidden" id="fullNumber" name="fullNumber">
                        </div>
                        <div class="input-text-icon-box form-group">
                            <svg>
                                <use href="{{asset('/website_assets/')}}/assets/images/icons/icons.svg#user-2"></use>
                            </svg><span>أﺳﻢ اﻟﻤﻨﺸﺄة :</span>
                            <input type="text" name="name" value="{{\Auth::guard('buyer')->user()->name}}">
                        </div>
                        <h4>ﺑﻴﺎﻧﺎت ﺗﻮاﺻﻞ اﻟﻤﻨﺸﺄة</h4>
                        <div class="input-text-icon-box form-group">
                            <svg>
                                <use href="{{asset('/website_assets/')}}/assets/images/icons/icons.svg#envelope"></use>
                            </svg><span>اﻟﺒﺮﻳﺪ اﻟﺎﻟﻜﺘﺮوﻧﻰ :</span>
                            <input type="email" name="email" value="{{\Auth::guard('buyer')->user()->email}}">
                        </div>
                        <div class="login-with"> <a href="tel:{{\Auth::guard('buyer')->user()->mobile}}">
                                <svg>
                                    <use href="{{asset('website_assets/')}}/assets/images/icons/icons.svg#phone"></use>
                                </svg></a><a href="{{\Auth::guard('buyer')->user()->whatsapp}}">
                                <svg>
                                    <use href="{{asset('website_assets/')}}/assets/images/icons/icons.svg#whatsapp"></use>
                                </svg></a></div>
                        <div class="btn-submit mt-5">
                            <button class="btnn-orange btn btnn btn-fill hvr-shadow" type="submit"><span>حفظ التعديلات </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
