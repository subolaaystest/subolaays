@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.coverPoints'))

@section('content')

<div class="main-content">

    <form id="storeSellerProduct" method="post" action="{{ route('storeCoverPoints') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
        {{ csrf_field() }}


    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="page-content-inner">
      <div class="map mb-5">
        <div class="map-box">
          <button class="btn" id="locat_me">
            <svg>
              <use href="url('frontend/images/icons/icons.svg#location') }}"></use>
            </svg>
          </button>
          <div id="map"></div>
        </div>
      </div>
      <div class="form-group">
        <label for="input-410">عنوان الزون</label>
        <input class="form-control" type="text" name="address" id="input-410" required/>
      </div>
      <div class="form-group">
        <label for="input-139">مساحة الزون </label>
        <input class="form-control" type="number" name="zone_size" min="0" id="input-139"/>
        <div class="value-text">كم/ مربع</div>
      </div>
      <div class="add-product-title">
        <h2>  المدينة</h2>
        <p>أﺧﺘﺮ ﻣﺪﻳﻨﺔ ﻣﻦ ﻣﺪن اﻟﺴﻌﻮدﻳﺔ</p>
      </div>
      <div class="form-group">
        <select class="niceselect" type="text" name="city_id" id="select-345" required>
          <option value=""> {{ __('translate.ChooseCities') }} </option>

          @isset($cities)
          @foreach ($cities as $one)
            <option value="{{ $one->id }}"> {{ $one->name }} </option>
          @endforeach
          @endisset

        </select>
      </div>
      <div class="form-group">
        <label for="input-819">الحي </label>
        <input class="form-control" type="text" id="input-819" name="district" required />
      </div>
      <div class="form-group">
        <label for="input-50">الرقم البريدى </label>
        <input class="form-control" type="text" id="input-50" name="postal_code" />
      </div>
      <div class="add-product-footer">
        <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit"><span>حفظ </span>
        </button>

        <a href="{{ route('getCoverPoints') }}">
            <button class="btnn-red btn btnn hvr-shadow" type="button"><span>إلغاء </span>
            </button>
        </a>

      </div>
    </div>

    <input id="lat" name="latitude" type="hidden" value="24.233">
    <input id="lng"name="longitude" type="hidden" value="43.23">

    </form>

  </div>







@endsection
