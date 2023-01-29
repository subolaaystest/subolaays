@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.deals'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-tabs">
            <div class="nav-tabs-1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="invoice-details-tab" data-bs-toggle="tab" data-bs-target="#invoice-details" type="button" role="tab" aria-controls="invoice-details" aria-selected="true">
                            {{ __('translate.customerDetails') }}
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details" type="button" role="tab" aria-controls="product-details" aria-selected="false">
                            {{ __('translate.Products') }}
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="invoice-details" role="tabpanel" aria-labelledby="invoice-details-tab">
                        <div class="order-details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.DealNo') }} </span>
                                        <h5>{{ @$deal->id }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.DealDate') }} </span>
                                        <h5>{{ @$deal->created_at->format('Y-M-d') }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.offers') }} </span>
                                        <h5>{{ count($deal->deals_offers) }} {{ __('translate.offer') }} </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.Total') }} </span>
                                        <h5>{{ @$deal->products->sum('price') }} {{ __('translate.riyal') }} </h5>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.FacilityType') }} </span>
                                        <h5></h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.client') }} </span>
                                        <h5>{{ @$deal->buyer->name }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.email') }} </span>
                                        <h5>{{ @$deal->buyer->email }}</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.customerSince') }} </span>
                                        <h5>{{ @$deal->buyer->created_at->format('Y-M-d') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-row d-flex justify-content-between flex-wrap mt-5">
                                <div class="order-details-box">
                                    <span> {{ __('translate.Location') }} </span>
                                    <h5>{{ @$deal->buyer->address }}</h5>
                                </div>
                                <div class="buttons d-flex">
                                    <button class="btnn-gray btn btnn hvr-shadow" type="button" data-bs-toggle="modal" data-bs-target="#mapModal">
                                        <span> {{ __('translate.viewLocation') }}
                                            <svg>
                                                <use href="{{ url('seller_frontend/images/icons/icons.svg#marker') }}"></use>
                                            </svg>
                                        </span>
                                    </button>
                                    {{-- <button class="btnn-orange btn btnn ml-2 hvr-shadow" type="button">
                                        <span> {{ __('translate.customerDetails') }} </span>
                                        <svg>
                                            <use href="{{ url('seller_frontend/images/icons/icons.svg#user') }}"></use>
                                        </svg>
                                    </button> --}}
                                </div>
                            </div>
                            <hr>

                            <div class="order-total">
                                <ul>
                                    <li>
                                        <h5> {{ __('translate.subPrice') }} </h5>
                                        <h6>{{ @$deal->products->sum('price') }} {{ __('translate.riyal') }} </h6>
                                    </li>
                                    <li>
                                        <h5> {{ __('translate.Delivery') }} <span class="express">Express </span></h5>
                                        <h6>350 {{ __('translate.riyal') }}</h6>
                                    </li>
                                    <li>
                                        <h5> {{ __('translate.coupon') }} </h5>
                                        <h6>20 {{ __('translate.riyal') }}</h6>
                                    </li>
                                    <li>
                                        <h5> {{ __('translate.Total') }} </h5>
                                        <h6>620 {{ __('translate.riyal') }}</h6>
                                    </li>
                                </ul>
                                <hr>
                                <ul>
                                    <li>
                                        <h5> {{ __('translate.notes') }} </h5>
                                        <h6>لا يوجد</h6>
                                    </li>
                                </ul>
                                <hr>
                            </div>
                            <div class="center-action-btn">
                                <button class="btnn-orange btn btnn hvr-shadow" type="button">
                                    <span> {{ __('translate.MakeOffer') }} </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-details" role="tabpanel" aria-labelledby="product-details-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="table-container">
                                    <div class="dash-table">
                                        <table class="table responsive" id="">
                                            <thead>
                                                <th> {{ __('translate.image') }} </th>
                                                <th> {{ __('translate.name') }} </th>
                                                <th> {{ __('translate.category') }} </th>
                                                <th> {{ __('translate.price') }} </th>
                                                <th> {{ __('translate.quantity') }} </th>
                                            </thead>
                                            <tbody>
                                            @isset($deal->products)
                                            @foreach ($deal->products as $one)
                                                <tr>
                                                    <td><div class="table-img"><img src="{{ @$one->main_image }}" /></div></td>
                                                    <td><div class="table-two-texts"><h5> {{ @$one->name }} </h5><h6>{{ @$one->sku }}</h6></div></td>
                                                    <td><div class="table-two-texts"><h5>{{ @$one->main_category->name }}</h5><h6>{{ @$one->sub_category->name }}</h6></div></td>
                                                    <td><h5>{{ @$one->quantity_available }}</h5></td>
                                                    <td><h5>{{ @$one->active_price }} ريال</h5></td>
                                                </tr>
                                            @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10"><a class="load-more-sec mb-5">
                                <p> {{ __('translate.AreTheseProductsAvailable') }} </p></a>
                            </div>
                        </div>
                        <div class="center-action-btn">
                            <a href="{{ route('createDealOffer', $deal->id) }}">
                                <button class="btnn-orange btn btnn hvr-shadow" type="button">
                                    <span> {{ __('translate.MakeOffer') }} </span>
                                </button>
                            </a>
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
                </div>
            </div>
        </div>
    </div>

@endsection
