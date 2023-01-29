@extends('layout.website.dashboardLayout')

@section('title', __('translate.home'))

@section('content')

   <div class="main-content pb-5">


    @isset($main_ads)
    <div class="home-slider">
        <div class="owl-carousel owl-theme">
            @foreach($main_ads as $one)
                <div class="itme">
                    <img src="{{ $one->image }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    @endisset

    <div class="product-type-list mt-5">
        <div class="owl-carousel owl-theme">


                @isset($main_categories)
                @foreach($main_categories as $one)
                <div class="item product-type">
                    <input type="checkbox" name="prduct_type0">
                    <div class="image">
                        <img src="{{ $one->image }}" alt="">
                    </div>
                    <h3> {{ @$one->name }} </h3>
                </div>
                @endforeach
                @endisset


        </div>
    </div>


    <div class="stories mt-5">
        <div class="home-sec-head mb-4">
            <div class="text">
                <h4> قصص عروض التجار</h4>
                <p> شاهد حالات وقصص التجار</p>
            </div>
            <div class="button">
                <button class="btnn-orange btn btnn hvr-shadow" type="button">
                    <span>عرض الكل  </span>
                </button>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item product-type">
                <input type="checkbox" name="marchants0">
                <div class="image">
                    <img src="{{ url('frontend/images/merchants/merchant-1.png') }}" alt="">
                </div>
                <h3>Grocery</h3>
            </div>
        </div>
    </div>

    @isset($categories_on_homepage)
    <div class="products mt-5">
        <div class="home-sec-head mb-4">
            <div class="text">
                <h4> وصل حديثا فى قسم {{ $categories_on_homepage[0]->name }}</h4>
                <a class="link" href="{{ route('getProductsByCategory', $categories_on_homepage[0]->id) }}">زيارة القسم
                    <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#arrow-right') }}"></use>
                    </svg>
                </a>
            </div>
            <div class="button">
                <a href="{{ route('getProductsByCategory', $categories_on_homepage[0]->id) }}">
                    <button class="btnn-orange btn btnn hvr-shadow" type="button">
                        <span>زيارة القسم</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="row m-0 w-100 mt-5">

            @if(count($categories_on_homepage[0]->products) > 0)
            @foreach ($categories_on_homepage[0]->products->take(4) as $one)
                <div class="col">
                    <a class="product hvr-float-shadow" href="{{ route('getProductDetails', $one->id) }}">
                        <div>
                            <div class="icon d-flex justify-content-center align-items-center">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#heart-fill') }}"></use>
                                </svg>
                            </div>

                            @if($one->discount_percentage != null)
                                <span class="discount">- {{$one->discount_percentage}}%</span>
                            @endif

                            <div>
                                <div class="img">
                                    <img src="{{ $one->main_image }}" style="max-width:90%;" alt=""/>
                                </div>
                            </div>
                            <div>
                                <p class="name"> {{ @$one->seller->name }} </p>
                                <h4> {{ @$one->name }} </h4>
                                <p class="price">{{ @$one->offer_price }} دينار

                                    @if($one->discount_percentage != null)
                                        <span class="old-price">{{ @$one->price }} دينار</span>
                                    @endif

                                </p>
                                <span class="number">{{ @$one->quantity_available }} قطعة</span>
                            </div>
                            <button class="plus">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#plus') }}"></use>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            @endforeach
            @endif

        </div>
    </div>
    @endisset



    @isset($sub1_ads)
        <div class="img-section mt-5"> <img src="{{ $sub1_ads->image }}" alt=""> </div>
    @endisset

    <div class="bargains mt-5">
        <div class="home-sec-head mb-4">
            <div class="text">
                <h4> الصفقات الحديثة</h4>
                <p> أحدث الصفقات الي طلبها المستخدمين</p>
            </div>
            <div class="button">
                <button class="btnn-orange btn btnn hvr-shadow" type="button">
                    <span>زيارة القسم</span>
                </button>
            </div>
        </div>
        <div class="row m-0 w-100 mt-5">
            <div class="col-md-4">
                <div class="bargains-img">
                    <p>أحدث صفقات البقالة</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="all-bargins">
                    <p class="mt-3">
                        <a href="#">عرض جميع الصفقات لهذا القسم
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#arrow-right') }}"></use>
                            </svg>
                        </a>
                    </p>
                    <div class="row m-0 w-100 mt-4">
                        <div class="col-md-6 mb-4">
                            <a class="bargain hvr-float-shadow" href="#">
                                <div class="bargain-head">
                                    <h6 class="m-0">حالة الصفقة</h6><span>لم يتم الترسية بعد</span>
                                </div>
                                <div class="bargain-body">
                                    <div class="row w-100 m-0">
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>القسم</span>
                                                <h6>بقالة - خضراوات</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>اسم المنتج</span>
                                                <h6>Grocery shope</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>الكمية</span>
                                                <h6>40 صندوق</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>العروض</span>
                                                <h6 class="textt-red">50 عرض</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4">
                            <a class="bargain hvr-float-shadow" href="#">
                                <div class="bargain-head">
                                    <h6 class="m-0">حالة الصفقة</h6><span>لم يتم الترسية بعد</span>
                                </div>
                                <div class="bargain-body">
                                    <div class="row w-100 m-0">
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>القسم</span>
                                                <h6>بقالة - خضراوات</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>اسم المنتج</span>
                                                <h6>Grocery shope</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>الكمية</span>
                                                <h6>40 صندوق</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bargain-body-sec">
                                                <span>العروض</span>
                                                <h6 class="textt-red">50 عرض</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @if(count($categories_on_homepage) > 1)
    <div class="products mt-5">
        <div class="home-sec-head mb-4">
            <div class="text">
                <h4> وصل حديثا فى قسم {{ $categories_on_homepage[1]->name }}</h4>
                <a class="link" href="{{ route('getProductsByCategory', $categories_on_homepage[1]->id) }}">زيارة القسم
                    <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#arrow-right') }}"></use>
                    </svg>
                </a>
            </div>
            <div class="button">
                <a href="{{ route('getProductsByCategory', $categories_on_homepage[1]->id) }}">
                    <button class="btnn-orange btn btnn hvr-shadow" type="button">
                        <span>زيارة القسم</span>
                    </button>
                </a>
            </div>
        </div>

        <div class="row m-0 w-100 mt-5">

            @if(count($categories_on_homepage[1]->products) > 0)
            @foreach ($categories_on_homepage[1]->products->take(4) as $one)
                <div class="col">
                    <a class="product hvr-float-shadow" href="{{ route('getProductDetails', $one->id) }}">
                        <div>
                            <div class="icon d-flex justify-content-center align-items-center">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#heart-fill') }}"></use>
                                </svg>
                            </div>

                            @if($one->discount_percentage != null)
                                <span class="discount">- {{$one->discount_percentage}}%</span>
                            @endif

                            <div>
                                <div class="img">
                                    <img src="{{ $one->main_image }}" style="max-width:90%;" alt=""/>
                                </div>
                            </div>
                            <div>
                                <p class="name"> {{ @$one->seller->name }} </p>
                                <h4> {{ @$one->name }} </h4>
                                <p class="price">{{ @$one->offer_price }} دينار

                                    @if($one->discount_percentage != null)
                                        <span class="old-price">{{ @$one->price }} دينار</span>
                                    @endif

                                </p>
                                <span class="number">{{ @$one->quantity_available }} قطعة</span>
                            </div>
                            <button class="plus">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#plus') }}"></use>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            @endforeach
            @endif

        </div>
    </div>
    @endif



    @isset($sub1_ads)
        <div class="img-section mt-5"> <img src="{{ $sub1_ads->image }}" alt=""> </div>
    @endisset


    <div class="stories-marchants mt-5">
        <div class="home-sec-head mb-4">
            <div class="text">
                <h4>  عروض التجار</h4>
            </div>
            <div class="button">
                <a href="{{ route('getAllOffers') }}">
                    <button class="btnn-orange btn btnn hvr-shadow" type="button">
                        <span>زيارة القسم</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="offers mt-5">
        @isset($offers)
        @foreach($offers as $one)
        <a class="offer hvr-float-shadow" href="{{ route('getProductDetails', $one->id) }}">
            <div class="offer-image"><img src="{{ $one->main_image }}" style="max-width: 90%;" alt=""/></div>
            <div class="offer-body">
                <h4 class="mb-2"> {{ @$one->name }} </h4>
                <p class="m-0">خصم {{ @$one->discount_percentage }}%</p>
            </div>
        </a>
        @endforeach
        @endisset

    </div>
</div>

@endsection
