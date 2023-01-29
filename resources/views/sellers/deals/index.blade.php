@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.deals'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="bargains-page">
            <div class="dash-page-head">
                <h2> {{ __('translate.filter') }} </h2>
            </div>

            <div class="row row-cols-lg-4 row-cols-2">
                <div class="col">
                  <div class="status-info-box"><span class="orange"> {{ __('translate.CurrentOffers') }} </span>
                    <h4> {{ $CurrentOffers }} {{ __('translate.order') }}</h4>
                  </div>
                </div>
                <div class="col">
                  <div class="status-info-box"><span class="green"> {{ __('translate.OffersTurnedToOrders') }} </span>
                    <h4> {{ $OffersTurnedToOrders }} {{ __('translate.order') }} </h4>
                  </div>
                </div>
            </div>

            <form id="signUp" method="get" action="{{ route('getSellerDeals') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="page-filters-2">
                <div class="inputs-btn">
                    <div class="form-group">
                        <label for="input-332"></label>
                        <select class="niceselect" type="text" name="orderBy" id="select-332">
                            <option value=""> {{ __('translate.Choose') }} </option>
                            <option value="latest"> {{ __('translate.latest') }} </option>
                            <option value="oldest"> {{ __('translate.oldest') }} </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-587"></label>
                        <select class="niceselect" type="text" name="main_category_id" id="select-587">
                            <option value=""> {{__('translate.category') }} </option>
                            @isset($main_categories)
                            @foreach ($main_categories as $one)
                                <option value="{{ $one->id }}"> {{ @$one->name }} </option>
                            @endforeach
                            @endisset
                        </select>
                    </div>
                    <button class="btnn-orange btn btnn ml-2 go-to-step-3 btn-fill hvr-shadow" type="submit">
                        <span> {{ __('translate.next') }} </span>
                    </button>
                </div>
                <div class="table-search-box">
                    <input class="form-control" type="text" name="txt">
                    <div class="icon">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#search') }}"></use>
                        </svg>
                    </div>
                </div>
            </div>
            </form>

            <a href="{{ route('getSellerDeals') }}">
                <button class="btnn-undefined btn btnn btnn-orange hvr-shadow">
                    <span> {{ __('translate.refresh') }} </span>
                </button>
            </a>

            <div class="row row-cols-md-2 row-cols-lg-3 row-cols-lg-4 match-height">

                @isset($deals)
                @foreach($deals as $one)
                <div class="col">
                    <div class="cus-bargains">
                        <div class="top-box">
                            <span> {{ __('translate.productsCount') }} </span>
                            <span> {{ @$one->created_at->diffForHumans() }} </span>
                        </div>
                        <div class="total"> {{ count($one->products) }} {{ __('translate.products') }} </div>
                        <div class="image">
                            <a href="{{ route('getDealDetails', $one->id) }}">
                                <img src="{{ @$one->products[0]['main_image'] }}" alt=""/>
                            </a>
                        </div>
                        <div class="price">
                            <span> {{ __('translate.approximatePrice') }} </span>
                            <h3>{{ $one->products->sum('price') }} {{ __('translate.riyal') }} </h3>
                        </div>

                        {{-- <div class="buttons">
                            <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>بقالة </span>
                            </button>
                            <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>خضراوات </span>
                            </button>
                        </div> --}}

                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress-text"> {{ __('translate.offers') }} {{ count($one->deals_offers) }} </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>

@endsection
