@extends('website.layouts.app')

@section('content')
    <div class="main-content pb-5">
        <div class="order-success text-center">
            <div class="icon">
                <svg>
                    <use href="{{asset('website/assets/images/icons/icons.svg#check')}}"></use>
                </svg>
            </div>
            <h3 class="mt-5 fw-bold">تم ارسال طلب التوثيق بنجاح</h3><a href="#"> سيتم مراجعته من قبل خدمة العملاء لدينا</a>
            <div class="comp-order mt-4">
                <a href="{{route('home.index')}}" class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" ><span>الرجوع للرئيسية</span>
                </a>
            </div>
        </div>
    </div>
 @endsection
