@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.clients'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="page-content-inner">
            <div class="order-details">
                <div class="row">
                    <div class="col-lg-2">
                            <div class="order-details-box">
                            <span> {{ __('translate.FacilityType') }} </span>
                            <h5> {{ $buyer->buyerCategory->name }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box"> <span> {{ __('translate.client') }} </span>
                            <h5> {{ $buyer->name }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box"> <span> {{ __('translate.email') }} </span>
                            <h5> {{ $buyer->email }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="order-details-box"> <span> {{ __('translate.customerSince') }} </span>
                            <h5> {{ $buyer->created_at->format('Y/m/d') }} </h5>
                        </div>
                    </div>
                </div>

                <div class="bottom-row d-flex justify-content-between flex-wrap mt-5">
                    <div class="order-details-box">
                        <span> {{ __('translate.Location') }} </span>
                        <h5> {{ $buyer->address }} </h5>
                    </div>
                    <div class="buttons d-flex">

                        <button class="btnn-gray btn btnn hvr-shadow" type="button" data-bs-toggle="modal" data-bs-target="#mapModal">
                            <span> {{ __('translate.viewLocation') }}
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#marker') }}"></use>
                                </svg>
                            </span>
                        </button>

                        {{-- <button class="btnn-orange btn btnn mr-2 hvr-shadow" type="button">
                            <span> {{ __('translate.customerDetails') }} </span>
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#user') }}"></use>
                            </svg>
                        </button> --}}
                    </div>
                </div>
                <hr>

                <div class="table-container inner-padding">
                    <div class="table-inner-head">
                        <h3>ﺟﻤﻴﻊ اﻟﻄﻠﺒﺎت</h3>
                        <div class="tabl-head-buttons">
                            <button class="btnn-undefined btn btnn btnn-orange hvr-shadow" type="button">
                                <span> {{ __('translate.changeOrderStatus') }} </span>
                            </button>
                            <button class="btnn-undefined btn btnn btnn-red hvr-shadow" type="button">
                                <span> {{ __('translate.BillOfLadingPrinting') }} </span>
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#printer') }}"></use>
                                </svg>
                            </button>
                            <button class="btnn-undefined btn btnn btnn-gray hvr-shadow" type="button">
                                <span> {{ __('translate.ViewInvoice') }} </span>
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#eye') }}"></use>
                                </svg>
                            </button>
                            <button class="btnn-undefined btn btnn btnn-orange hvr-shadow" type="button">
                                <span> {{ __('translate.export') }} </span>
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="dash-table">
                        <table class="table responsive" id="">
                            <thead>
                                <th> {{ __('translate.orderNo') }} </th>
                                <th> {{ __('translate.orderDate') }} </th>
                                <th> {{ __('translate.orderType') }} </th>
                                <th> {{ __('translate.Shipping') }} </th>
                                <th> {{ __('translate.Payment') }} </th>
                                <th> {{ __('translate.status') }} </th>
                                <th> {{ __('translate.Total') }} </th>
                                <th> {{ __('translate.Actions') }} </th>
                            </thead>
                            <tbody>
                            @isset($orders)
                            @foreach ($orders as $one)
                                <tr>
                                    <td> {{ $one->order_number }} </td>
                                    <td><div class="table-two-texts">
                                        <h5> {{ $one->created_at->format('Y-m-d') }} </h5>
                                        <h6> {{ $one->created_at->format('h-i A') }} </h6></div>
                                    </td>
                                    <td><h5>صفقة</h5></td>
                                    <td><div class="table-two-texts"><h5> {{ $one->shipping_method->name }} </h5> </div></td>
                                    <td><h5> {{ $one->payment_method->name }} </h5></td>
                                    <td><div class="table-two-texts"><h5 class="textt-orange"> {{ __('translate.' . $one->status) }} </h5></div></td>
                                    <td><h5> {{ $one->final_total }} {{ __('translate.riyal') }} </h5></td>
                                    <td>
                                        <div class="table-actions">

                                            <a class="table-action-btn" href="{{ route('sellerOrderDetails', $one->id) }}">
                                                <svg>
                                                    <use href="{{ url('frontend/images/icons/icons.svg#eye') }}"></use>
                                                </svg>
                                            </a>
                                            <a class="table-action-btn" href="#">
                                                <svg>
                                                    <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel"></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7455039.775340255!2d40.580571945242326!3d24.16625624451223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2s!4v1638267085857!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
