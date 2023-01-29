@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.AbandonedCarts'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.AbandonedCarts') }} <span>( {{ count($abandoned_carts) }} )</span></h2>
        </div>
        <div class="table-container inner-padding">


            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}

            <div class="table-inner-head">

                <h3> {{ __('translate.AbandonedCarts') }} </h3>
                <div class="tabl-head-buttons">
                    {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-orange hvr-shadow" type="button">
                        <span> {{ __('translate.edit') }} </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow active" type="button">
                        <span> {{ __('translate.active') }} </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow notActive" type="button">
                        <span> {{ __('translate.not_active') }} </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow exportData" type="button">
                        <span> {{ __('translate.export') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                        </svg>
                    </button> --}}
                </div>

                <input type="hidden" id="formAction" name="formAction" value="">

            </div>




            <div class="dash-table">
                <table class="table responsive" id="example">
                    <thead>
                        <th style="width:30px">
                            <div class="form-check" style="width:30px">
                              <input class="form-check-input" id="table-parent" type="checkbox" value=""/>
                              <label class="form-check-label" for="table-parent"></label>
                            </div>
                        </th>

                        <th> {{ __('translate.client') }} </th>
                        <th> {{ __('translate.Date') }} </th>
                        <th> {{ __('translate.productsCount') }} </th>
                        <th> {{ __('translate.status') }} </th>
                        <th> {{ __('translate.Total') }} </th>
                        <th> {{ __('translate.Actions') }} </th>
                    </thead>
                    <tbodys>
                    @isset($abandoned_carts)
                    @foreach ($abandoned_carts as $one)
                        <tr>
                            <td style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input td-check" name="products_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                  <label class="form-check-label" for="ceack-0"></label>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex">
                                    <div class="table-img">
                                        <img src="{{ $one->buyer->image_profile }}" />
                                    </div>
                                    <div class="table-two-texts mx-2">
                                        <h5>
                                            <a href="{{ route('getabandonedCartDetails', $one->id) }}">{{ $one->buyer->name }}</a>
                                        </h5>
                                        <h6> {{ __('translate.customerSince') }} {{ $one->buyer->created_at->format('Y-m-d') }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td><div class="table-two-texts"><h5> {{ $one->created_at->format('Y-m-d') }} </h5><h6> {{ $one->created_at->format('h:s A') }} </h6></div></td>
                            <td><h5> {{ count($one->cart_products) }} {{ __('translate.products') }} </h5></td>
                            <td>قيد المراجعة</td>
                            <td> {{ $one->total_price }} {{ __('translate.riyal') }} </td>
                            <td>
                                <div class="table-actions">
                                    <button class="btnn-orange btn btnn hvr-shadow" type="button">
                                        <span> {{ __('translate.SendAlert') }} </span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endisset
                    </tbodys>
                </table>
            </div>

        </form>

        </div>
    </div>

@endsection
