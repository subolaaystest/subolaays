@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.siteSettings'))

@section('content')

<div class="main-content">
    <form id="storeSellerProduct" method="post" action="{{ route('updateSelleSettings') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
        {{ csrf_field() }}

    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="dash-tabs">
      <div class="nav-tabs-1">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="Basic-Settings-tab" data-bs-toggle="tab" data-bs-target="#Basic-Settings" type="button" role="tab" aria-controls="Basic-Settings" aria-selected="true">
                 {{ __('translate.mainSettings') }}
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Establishment-settings-tab" data-bs-toggle="tab" data-bs-target="#Establishment-settings" type="button" role="tab" aria-controls="Establishment-settings" aria-selected="false">
                {{ __('translate.EstablishmentSettings') }}
            </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="Basic-Settings" role="tabpanel" aria-labelledby="Basic-Settings-tab">
            <div class="add-product-title">
              <h2> {{ __('translate.logo') }} </h2>
            </div>
            <div class="row row-cols-md-4">
              <div class="col">

                <div class="image-upload">
                  <div class="input-image">
                    <input type="file" name="logo"/><img class="preview-image1" src="" />
                    <div class="icon">
                      <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#gallery') }}"></use>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="input-text-icon-box form-group rounded-0">
              <svg>
                <use href="{{ url('frontend/images/icons/icons.svg#shop') }}"></use>
              </svg><span> {{ __('translate.email') }} :</span>
              <input type="email" name="email" value="{{ auth()->guard('seller')->user()->email }}">
            </div>
            <div class="input-text-icon-box rounded-0 mb-4">
              <svg>
                <use href="{{ url('frontend/images/icons/icons.svg#phone') }}"></use>
              </svg><span> {{ __('translate.mobile') }} </span>

              <input class="phone_number" type="number" id="phone" value="{{ auth()->guard('seller')->user()->mobile }}">
              <input type="hidden" id="fullNumber">
            </div>
            {{-- <div class="input-text-icon-box form-group rounded-0">
              <svg>
                <use href="{{ url('frontend/images/icons/icons.svg#shop') }}"></use>
              </svg><span> {{ __('translate.password') }} :</span>
              <input type="password" name="password">
            </div> --}}
            <div class="btn-submit-300 mt-5">
              <button class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" type="submit"><span> {{ __('translate.save') }} </span>
              </button>
            </div>
          </div>
          <div class="tab-pane fade" id="Establishment-settings" role="tabpanel" aria-labelledby="Establishment-settings-tab">
            <div class="form-group">
              <label for="input-279"> {{ __('translate.FacilityType') }} </label>
              <select class="niceselect" type="text" name="seller_category_id" id="select-279">

                @isset($sellers_categories)
                    @foreach ($sellers_categories as $one)
                        <option {{ auth()->guard('seller')->user()->seller_category_id == $one->id? 'selected' : ''  }} value="{{ $one->id }}"> {{ $one->name }} </option>
                    @endforeach
                @endisset

            </select>
            </div>
            <div class="form-group">
              <label for="input-508"> {{ __('translate.address') }} </label>
              <select class="niceselect" type="text" id="select-508">
                <option value="ﺣﺪد ﻣﻮﻗﻌﻚ ﻋﻠﻰ اﻟﺨﺮﻳﻄﺔ  ">ﺣﺪد ﻣﻮﻗﻌﻚ ﻋﻠﻰ اﻟﺨﺮﻳﻄﺔ    </option>
                <option value="  ﺣﺪد ﻣﻮﻗﻌﻚ ﻋﻠﻰ اﻟﺨﺮﻳﻄﺔ  ">  ﺣﺪد ﻣﻮﻗﻌﻚ ﻋﻠﻰ اﻟﺨﺮﻳﻄﺔ    </option>
              </select>
            </div>
            <div class="form-group">
              <label for="input-935"> {{ __('translate.CommercialRegisterNo') }} </label>
              <input class="form-control" type="text" value="{{ auth()->guard('seller')->user()->commercial_register_no }}" name="commercial_register_no" id="input-935"/>
            </div>
            <div class="form-group">
              <label for="input-609"> {{ __('translate.CommercialRegisterDate') }} </label>
              <input class="form-control" type="date" value="{{ auth()->guard('seller')->user()->commercial_register_date }}" name="commercial_register_date" id="input-609"/>
            </div>
            <div class="btn-submit-300 mt-5">
              <button class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" type="submit"><span> {{ __('translate.save') }} </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    </form>
  </div>

@endsection
