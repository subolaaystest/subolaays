@extends('layout.website.dashboardLayout')

@section('title', __('translate.offers'))

@section('content')

<div class="main-content pb-5">
    <div class="sidbar-icon"> <i class="fas fa-bars"></i></div>
    <div class="header">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homeWebSite') }}">الرئيسية</a></li>
          <li class="breadcrumb-item"> {{ @$category->name }} </li>
        </ol>
      </nav>
    </div>
    <div class="page-content mt-5">
      <div class="dash-sidebar">
        <div class="top-sidebar">
          <div class="logo">  <img src="{{ url('frontend/images/logo.png') }}" alt="alt"></div>
          <div class="close-menu"> <i class="fas fa-times">    </i></div>
        </div>
        <div class="list-links">
          <div class="filtering d-flex align-items-center justify-content-between mb-4 pb-4">
            <h5 class="m-0">تصفية
              <p class="filter-no d-inline-block m-0"> <span>2</span></p>
            </h5><span class="reload">إعادة تعيين</span>
          </div>
          <div class="list-links-group">
            <h5>حسب القسم الفرعى</h5>
            <ul>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/All_Section.svg') }}" alt=""></div><span>جميع الاقسام الفرعية </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>جبن </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Milk.svg') }}" alt=""></div><span>ألبان </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Ege.svg') }}" alt=""></div><span>بيض </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Yogurt.svg') }}" alt=""></div><span>زبادي </span></a></li>
            </ul>
          </div>
          <div class="list-links-group">
            <h5>السعر</h5>
          </div>
          <div class="list-links-group">
            <h5>حسب العلامة التجارية</h5>
            <ul>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/All_Section.svg') }}" alt=""></div><span>جميع الاقسام الفرعية </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>اسم المتجر </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>اسم المتجر </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>اسم المتجر </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>اسم المتجر </span></a></li>
              <li><a href="#">
                  <div class="icon"> <img src="{{ url('frontend/images/landing-menu/Cheese.svg') }}" alt=""></div><span>اسم المتجر </span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="header d-md-flex align-items-md-center justify-content-md-between">
          <div class="result d-flex align-items-center">
            <p class="result-number mb-0">155</p>
            <h4 class="m-0">نتائج البحث لـ <span>"البقالة"</span></h4>
          </div>
          <div class="filter d-flex aling-items-center">
            <p class="mb-0">ترتيب حسب </p>
            <div class="page-filters-2">
              <div class="inputs-btn">
                <div class="form-group">
                  <select class="niceselect" type="text" id="select-609">
                    <option value=" الأدنى سعر للأعلى"> الأدنى سعر للأعلى  </option>
                    <option value="الأعلى سعر للأدنى">الأعلى سعر للأدنى  </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="icon ms-5 list-one">
              <svg class="non-active">
                <use href="{{ url('frontend/images/icons/icons.svg#list-2') }}"></use>
              </svg>
              <svg class="active">
                <use href="{{ url('frontend/images/icons/icons.svg#list-2-active') }}"></use>
              </svg>
            </div>
            <div class="icon ms-3 list-two">
              <svg class="non-active">
                <use href="{{ url('frontend/images/icons/icons.svg#list') }}"></use>
              </svg>
              <svg class="active">
                <use href="{{ url('frontend/images/icons/icons.svg#list-active') }}"></use>
              </svg>
            </div>
          </div>
        </div>
        <div class="list-product vertical">
          <div class="row row-cols-md-2 row-cols-lg-3 match-height mt-5">

            @isset($products)
            @foreach($products as $one)
                <div class="col"> <a class="product hvr-float-shadow" href="{{ route('getProductDetails', $one->id) }}">
                    <div>
                    <div class="icon d-flex justify-content-center align-items-center">
                        <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#heart-fill') }}"></use>
                        </svg>
                    </div>

                    @isset($one->discount_percentage)
                        <span class="discount">- {{ $one->discount_percentage }}%</span>
                    @endisset

                    <div>
                        <div class="img"><img src="{{ $one->main_image }}" style="max-width:80%;" alt=""/></div>
                    </div>
                    <div>
                        <p class="name"> {{ @$one->seller->name }} </p>
                        <h4> {{ @$one->name }} </h4>
                        <p class="price"> {{ @$one->offer_price }} دينار<span class="old-price">{{ @$one->price }} دينار</span></p>

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
            @endisset

          </div>

{{--
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
            </ul>
          </nav> --}}


        </div>
      </div>
    </div>
  </div>

@endsection
