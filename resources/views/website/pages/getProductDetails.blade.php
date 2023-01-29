@extends('layout.website.dashboardLayout')

@section('title', __('translate.products'))

@section('content')

<div class="main-content pb-5">
    <div class="header">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homeWebSite') }}">الرئيسية</a></li>
          <li class="breadcrumb-item">
              <a href="{{ route('getProductsByCategory', $product->main_category_id) }}"> {{ @$category->name }} </a>
            </li>
          <li class="breadcrumb-item"> {{ $product->name }} </li>
        </ol>
      </nav>
    </div>
    <div class="product-details mt-5">
      <div class="row w-100 m-0">
        <div class="col-md-6 px-5">
          <div class="images-side">


            <div class="fotorama" data-loop="true" data-allowfullscreen="true" data-autoplay="true" data-nav="thumbs" data-thumbwidth="200" data-thumbheight="200" data-thumbmargin="20" data-thumbborderwidth="1">

                @foreach($product->photos as $one)
                    <img src="{{ $one->image }}" alt="">
                @endforeach

            </div>


          </div>
        </div>
        <div class="col-md-6">
          <div class="details-side">
            <div class="details-header d-flex justify-content-between mb-3">
              <div class="d-flex justify-content-start align-items-center">
                <p class="mb-0">  {{ @$product->sub_category->name }} </p>
                <p class="mb-0"> {{ @$product->name }} </p>
              </div>
              <div class="icon d-flex justify-content-center align-items-center">
                <svg>
                    <use href="{{ url('frontend/images/icons/icons.svg#heart-fill') }}"></use>
                </svg>
              </div>
            </div>
            <div class="details-content">
              <h2 class="my-3"> {{ $product->name }} </h2>
              <div class="d-flex justify-content-start align-items-center mt-3">
                <p class="price m-0"> {{ @$product->offer_price }} <span>ريال</span>


                    @if($product->discount_percentage != null)
                        <span class="old-price">{{ @$product->price }} دينار</span>
                    @endif

                </p>

                @if($product->discount_percentage != null)
                    <p class="mb-0 discount">
                    <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#heart') }}"></use>
                    </svg> {{ @$product->discount_percentage }}% خصم
                    </p>
                @endif


              </div>
              <p class="mb-0 mt-3"> {!! @$product->description !!} </p>
              <p class="mb-0 mt-4 amount">تبقى {{ @$product->quantity_available }} قطع فقط</p>
              <div class="input-margin d-flex justify-content-start align-items-center mt-3">
                <div class="input-number">
                  <div class="form-group">
                    <div class="input-number-control"><a class="input-increment" href="#"> +</a>
                      <input type="text" id="input-28" placeholder="0" value="0"/><a class="input-decrement" href="#"> -</a>
                    </div>
                  </div>
                </div>
                <p class="mb-0 add-cart d-flex justify-content-between align-items-center">
                  <sapn>اضافة للسلة</sapn><span class="font-bold">{{ @$product->active_price }}  ريال</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="add-product-title mt-5">
        <h2>مواصفات المنتج</h2>
      </div>
      <div class="order-details">
        <div class="order-total">
          <ul class="m-0">
            <li>
              <h5>الحجم </h5>
              <h6>50 كيلو جرام</h6>
            </li>
            <li>
              <h5>النوع</h5>
              <h6>مزارع</h6>
            </li>
            <li>
              <h5>التاجر </h5>
              <h6> <a>Grocery shope</a></h6>
            </li>
            <li>
              <h5>مواد حافظة</h5>
              <h6>لا</h6>
            </li>
            <li>
              <h5>الحجم</h5>
              <h6>50 كيلو جرام</h6>
            </li>
          </ul>
        </div>
      </div>
      <div class="add-product-title mt-5">
        <h2>جدول الكمية<span>كل مازادت الكمية قل السعر</span></h2>
      </div>
      <div class="amount-table">
        <div class="row w-100 m-0">
          <div class="col-6 mb-4">
            <h5 class="fw-bold">100 ريال</h5><span>5-55 حبة</span>
          </div>
          <div class="col-6 mb-4">
            <h5 class="fw-bold">100 ريال</h5><span>5-55 حبة</span>
          </div>
          <div class="col-6 mb-4">
            <h5 class="fw-bold">100 ريال</h5><span>5-55 حبة</span>
          </div>
          <div class="col-6 mb-4">
            <h5 class="fw-bold">100 ريال</h5><span>5-55 حبة</span>
          </div>
          <div class="col-12"> <span>السعر الاساسى 85 ريال</span></div>
        </div>
      </div>
      <div class="add-product-title mt-5">
        <h2>منتجات مشابهة</h2>
      </div>
      <div class="row m-0 w-100">


        @if(count($related_products) > 0)
        @foreach ($related_products as $one)
        <div class="col"> <a class="product hvr-float-shadow" href="{{ route('getProductDetails', $one->id) }}">
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
            </div></a>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>

@endsection
