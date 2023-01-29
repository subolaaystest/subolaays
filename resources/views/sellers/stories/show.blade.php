@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.stories'))

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
          <button class="btnn-gray btn btnn hvr-shadow" type="button">
              <span> {{ __('translate.editStory') }} </span>
          </button>

          <a href="{{ route('deleteSellerStory', $product->id) }}">
          <button class="btnn-red btn btnn mr-2 hvr-shadow" type="button">
              <span> {{ __('translate.deleteStory') }} </span>
          </button>
        </a>


          <button class="btnn-orange btn btnn mr-2 hvr-shadow" type="button">
              <span> {{ __('translate.statistics') }} </span>
            <svg>
              <use href="../../assets/images/icons/icons.svg#export"></use>
            </svg>
          </button>
        </div>
      </div>
      <div class="body">
        <div class="order-image"> <img src="{{ @$product->main_image }}" alt=""></div>
        <div class="order-details">
          <div class="row row-cols-lg-2 row-cols-1">
            <div class="col">
              <div class="order-details-group order-desc">
                <h3> {{ __('translate.ProductDescription') }} </h3>
                <p> {{ @$product->description }} </p>
              </div>
              <div class="order-details-group order-details-table">
                <h3> {{ __('translate.productSpecification') }} </h3>
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
                <h3> {{ __('translate.price') }} </h3>
                <h2> {{ @$product->active_price }} {{ __('translate.riyal') }} </h2>
              </div>
              <div class="order-details-group order-discount">
                <h3> {{ __('translate.discountPercentage') }} </h3>
                <h2> {{ __('translate.Discount') }} {{ @$product->discount_percentage }}%</h2>
                <ul>
                  <li>
                      <span> {{ __('translate.PriceBeforeDiscount') }} </span>
                      <strong>({{ @$product->price }} {{ __('translate.riyal') }} )  </strong>
                    </li>
                  <li>
                    <span> {{ __('translate.priceAfterDiscount') }} </span>
                    <strong>({{ @$product->active_price }} {{ __('translate.riyal') }}  ) </strong>
                </li>
                </ul>
              </div>
              <div class="order-details-group order-status">
                <h3>حالة المنتج </h3>
                <p>أوشك على النفاذ</p>
              </div>
              <div class="order-details-group order-status">
                <h3> {{ __('translate.AvailableQuantity') }} </h3>
                <p>{{ @$product->quantity_available }}  {{ __('translate.Product') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
