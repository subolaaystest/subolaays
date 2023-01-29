@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.AbandonedCarts'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="page-content-inner">
            <div class="order-details">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span> {{ __('translate.Date') }} </span>
                            <h5> {{ @$abandoned_cart->created_at->format('Y-m-d') }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span> {{ __('translate.productsCount') }} </span>
                            <h5> {{ count($abandoned_cart->cart_products) }} {{ __('translate.products') }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span> {{ __('translate.Total') }} </span>
                            <h5> {{ $abandoned_cart->total_price }}  {{ __('translate.riyal') }} </h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="order-details-box">
                            <span> {{ __('translate.client') }} </span>
                            <h5> {{ $abandoned_cart->buyer->buyerCategory->name }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span> {{ __('translate.FacilityType') }} </span>
                            <h5> {{ $abandoned_cart->buyer->name }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span> {{ __('translate.email') }} </span>
                            <h5> {{ $abandoned_cart->buyer->email }} </h5>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="order-details-box">
                            <span> {{ __('translate.customerSince') }} </span>
                            <h5> {{ $abandoned_cart->buyer->created_at->format('Y-m-d') }} </h5>
                        </div>
                    </div>
                </div>
                <div class="bottom-row d-flex justify-content-between flex-wrap mt-5">
                    <div class="order-details-box">
                        <span> {{ __('translate.Location') }} </span>
                        <h5>تبوك السعودية</h5>
                    </div>
                    <div class="buttons d-flex">
                        <button class="btnn-gray btn btnn hvr-shadow" type="button" data-bs-toggle="modal" data-bs-target="#mapModal">
                            <span> {{ __('translate.viewLocation') }}
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#marker') }}"></use>
                                </svg>
                            </span>
                        </button>
                        {{-- <button class="btnn-orange btn btnn ml-2 hvr-shadow" type="button">
                            <span> {{ __('translate.customerDetails') }} </span>
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#user') }}"></use>
                            </svg>
                        </button> --}}
                    </div>
                </div>
                <div class="mt-5">
                    <div class="table-container">
                        <div class="dash-table">
                            <table class="table responsive" id="">
                                <thead>
                                    <th> {{ __('translate.image') }} </th>
                                    <th> {{ __('translate.name') }} </th>
                                    <th> {{ __('translate.category') }} </th>
                                    <th> {{ __('translate.price') }} </th>
                                    <th> {{ __('translate.quantity') }} </th>
                                    <th> {{ __('translate.Actions') }} </th>
                                </thead>
                                <tbody>
                                @if(count($abandoned_cart->cart_products) > 0)
                                @foreach ($abandoned_cart->cart_products as $one)
                                    <tr>
                                        <td><div class="table-img"><img src="{{ $one->product->main_image }}" /></div></td>
                                        <td>
                                            <div class="table-two-texts">
                                                <h5> {{ $one->product->name }} </h5>
                                                <h6> {{ $one->product->sku }} </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-two-texts">
                                                <h5> {{ $one->product->main_category->name }} </h5>
                                                <h6> {{ $one->product->sub_category->name }} </h6>
                                            </div>
                                        </td>
                                        <td><h5 class="textt-green">{{ $one->product->active_price}} {{ __('translate.riyal') }} </h5></td>
                                        <td><h5><strong>5</strong></h5></td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="table-action-btn" href="#">
                                                    <svg>
                                                        <use href="{{ url('frontend/assets/images/icons/icons.svg#eye') }}"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr class="cus-hr">
                <div class="mt-5">
                    <a class="btn btnn btnn-orange" href="temporary-discount.html"> {{ __('translate.SendAlert') }} </a>
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
