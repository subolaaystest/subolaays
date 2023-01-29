@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.StorageLocations'))

@section('content')

<div class="main-content">

    <form id="storeSellerProduct" method="post" action="{{ route('storeSellerStorage') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
        {{ csrf_field() }}


    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="page-content-inner">
      <div class="map mb-5">
        <div class="map-box">
          <button class="btn" id="locat_me">
            <svg>
              <use href="{{ url('frontend/images/icons/icons.svg#location') }}"></use>
            </svg>
          </button>
          <div id="map"></div>
        </div>
      </div>
      <div class="form-group">
        <label for="input-882"> {{ __('translate.type') }} </label>
        <input class="form-control" type="text" id="input-463" name="storage_type" required placeholder=""/>
      </div>
      <div class="form-group">
        <label for="input-463"> {{ __('translate.name') }} </label>
        <input class="form-control" type="text" id="input-463" name="name" required placeholder=""/>
      </div>
      <div class="add-product-title">
        <h2> {{ __('translate.city') }} </h2>
        {{-- <p>أﺧﺘﺮ ﻣﺪﻳﻨﺔ ﻣﻦ ﻣﺪن اﻟﺴﻌﻮدﻳﺔ</p> --}}
      </div>


      <div class="form-group">
        <select class="niceselect" type="text" name="city_id" id="select-547">
          <option value=""> {{ __('translate.ChooseCities') }} </option>

          isset($cities)
          @foreach ($cities as $one)
            <option value="{{ $one->id }}"> {{ $one->name }} </option>
          @endforeach

        </select>
      </div>
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col">
          <div class="form-group">
            <label for="input-312"> {{ __('translate.address') }} </label>
            <input class="form-control" type="text" name="address" id="input-312"/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="input-529"> {{ __('translate.postalCode') }} </label>
            <input class="form-control" type="text" name="postal_code" id="input-529"/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="input-293"> {{ __('translate.street') }} </label>
            <input class="form-control" type="text" name="street" id="input-293"/>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="input-421"> {{ __('translate.building') }}</label>
            <input class="form-control" type="text" name="building" id="input-421"/>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 mb-3">
        <div class="col">
          <div class="input-group flex-nowrap"><span class="input-group-text" id="phone_number"> <i class="fas fa-phone"></i></span>
            <input class="form-control" type="number" name="phone" aria-label="Username" aria-describedby="phone_number">
          </div>
        </div>
        <div class="col">
          <div class="input-group flex-nowrap"><span class="input-group-text" id="mobile"> <i class="fas fa-mobile-alt"></i></span>
            <input class="form-control" type="number" name="mobile" aria-label="Username" aria-describedby="mobile">
          </div>
        </div>
        <div class="col">
          <div class="input-group flex-nowrap"><span class="input-group-text" id="whatsapp"> <i class="fab fa-whatsapp"></i></span>
            <input class="form-control" type="number" name="whatsapp" aria-label="Username" aria-describedby="whatsapp">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="input-64"> {{ __('translate.preparing_time') }} </label>
        <input class="form-control" type="text" id="input-64" name="preparing_time" placeholder="{{ __('translate.ForExampleDays') }}"/>
      </div>
      <div class="add-product-footer">
        <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit"><span> {{ __('translate.save') }} </span>
        </button>

        <a href="{{ route('getSellerStorages') }}">
            <button class="btnn-red btn btnn hvr-shadow" type="button"><span> {{ __('translate.cancel') }} </span>
            </button>
        </a>

      </div>
    </div>

    <input id="lat" name="latitude" type="hidden" value="24.233">
    <input id="lng"name="longitude" type="hidden" value="43.23">

    </form>

  </div>

@endsection


@section('script')
@endsection
