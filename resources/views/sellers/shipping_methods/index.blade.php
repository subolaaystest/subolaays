@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.ShippingAndDelivery'))


@section('content')

<div class="main-content">
    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="dash-page-head">
      <h2>ﺷﺮﻛﺎﺗﻰ اﻟﺤﺎﻟﻴﺔ  <span>( 35 ﺷﺮﻛﺔ ﺗﻢ رﺑﻂ اﻟﺨﺪﻣﺔ ﺑﻬﺎ )</span></h2><a class="main-link btn hvr-float-shadow" href="#">اﺿﺎﻓﺔ ﺷﺮﻛﺔ ﺷﺤﻦ </a>
    </div>
    <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4 match-height">


        @isset($shipping_methods)

        @php
            $sellerShippingMethods = auth()->guard('seller')->user()->shipping_methods->pluck('shipping_method_id')->toArray();
        @endphp

            @foreach ($shipping_methods as $one)
            <div class="col">
                <div class="company-box">
                  <div class="company-box-top">
                    <div class="company-box-name">
                        {{-- <span>اﺳﻢ اﻟﺸﺮﻛﺔ</span> --}}
                        <h2> {{ @$one->name }} </h2>
                    </div>
                  </div>
                  <div class="company-box-logo"> <img src="{{ @$one->image }}" alt=""/></div>
                  <div class="company-box-check">
                    <div class="form-group m-0">
                      <label for="switch879"> {{ __('translate.activated') }} </label>
                    </div>
                    <div class="form-check form-switch form-switch-md m-0">

                        <input class="form-check-input changeShippingMethodStatus" type="checkbox" data-id="{{ @$one->id }}" id="switch0" {{ in_array($one->id, $sellerShippingMethods)? 'checked' : '' }} role="switch"/>

                      <label class="form-check-label" for="switch879"></label>
                    </div>
                  </div>
                </div>
                </div>
            @endforeach
        @endisset


    </div>
  </div>

@endsection



@section('script')

    <script>
        $('.changeShippingMethodStatus').on('change', function () {
            var categoryID;
            categoryID = $(this).attr("data-id");

            var url = "{{ url(app()->getLocale().'/Seller/changeShippingMethodStatus/') }}";

            if(categoryID){
            $.ajax({
                type: "GET",
                url: url+'/'+categoryID,
                success: function (response) {
                    if(response)
                    {
                    }
                }
            });
            }
        });
</script>
@endsection
