@extends('layout.sellers.dashboardLayout')

@section('title', 'تفاصيل المنتج')

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="page-content-inner single-order">
            <div class="head">
                <div class="single-order-title">
                    <h1> {{ @$product->name }} </h1>
                    <h5> {{ @$product->sku }} </h5>
                </div>
                <div class="buttons-list">

                    <a href="{{ route('editSellerProduct', $product->id) }}">
                    <button class="btnn-gray btn btnn hvr-shadow">
                        <span>تعديل المنتج</span>
                    </button>
                    </a>

                    <a href="{{ route('deleteSellerProduct', $product->id) }}">
                    <button class="btnn-red btn btnn mr-2 hvr-shadow">
                        <span>حذف المنتج</span>
                    </button>
                    </a>


                    <a href="{{ route('exportSellerProduct', $product->id) }}">
                        <button class="btnn-orange btn btnn mr-2 hvr-shadow">
                            <span>تصدير</span>
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#export') }}"></use>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <div class="body">
                <div class="order-image">
                    <img src="{{ @$product->main_image }}" alt="{{ @$product->name }}">
                </div>
                <div class="order-details">
                    <div class="row row-cols-lg-2 row-cols-1">
                        <div class="col">
                            <div class="order-details-group order-desc">
                                <h3>وصف المنتج</h3>
                                <p> {{ @$product->description }} </p>
                            </div>
                            <div class="order-details-group order-details-table">
                                <h3>مواصفات المنتج</h3>
                                <ul>
                                    <li> <span>الحجم</span><strong>50 كيلو جرام</strong></li>
                                    <li> <span>النوع</span><strong>مزارع</strong></li>
                                    <li> <span>مواد حافظة</span><strong>لا</strong></li>
                                    <li> <span>الحجم</span><strong>50 كيلو جرام </strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="order-details-group order-price">
                                <h3>السعر الحالي</h3>
                                <h2>{{ @$product->active_price }} ريال سعودي</h2>
                            </div>
                            <div class="order-details-group order-discount">
                                <h3>الخصم المفعل</h3>
                                <h2>خصم {{ @$product->discount_percentage }}%</h2>
                                <ul>
                                    <li> <span>السعر قبل الخصم</span><strong>({{ @$product->price }} ريال)  </strong></li>
                                    <li> <span>السعر بعد الخصم</span><strong>({{ @$product->active_price }} ريال) </strong></li>
                                </ul>
                            </div>
                            <div class="order-details-group order-status">
                                <h3>حالة المنتج </h3>
                                <p> {{ @$product->approve_status }}</p>
                            </div>
                            <div class="order-details-group order-status">
                                <h3>الكمية المتاحة </h3>
                                <p>{{ @$product->quantity_available }} قطع فقط</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
