@extends('layout.sellers.dashboardLayout')

@section('title', __('.home'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon">
            <i class="fas fa-bars"></i>
        </div>

        <div class="home-progress">
            <h2 class="home-progress-title"> {{ __('.CompleteYourStoreSettings') }} </h2>
            <div class="home-progress-bar-parent">
                <div class="home-progress-bar-inner" style="width:57%"></div>
                <h4>
                    <span> {{ __('.complete') }} </span>
                    <span>
                        <div class="counter">57</div>%
                    </span>
                </h4>
            </div>
        </div>

        <div class="row row-cols-lg-4 row-cols-2">
            <div class="col">
                <div class="status-info-box">
                    <span> {{ __('.profits') }} </span>
                    <h4>
                        <div class="counter">3504</div> {{ __('.riyal') }}
                    </h4>
                    <h5> {{ __('.thisWeek') }} </h5>
                    <div class="status-info-box-icon chart-up">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#chart-up') }}"></use>
                        </svg>
                        <span>+<div class="counter">20</div>%</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span> {{ __('.orders') }} </span>
                    <h4>
                        <div class="counter">{{ @$allOrders }}</div>
                    </h4>
                    <h5> {{ __('.thisWeek') }} </h5>
                    <div class="status-info-box-icon chart-up">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#chart-up') }}"></use>
                        </svg>
                        <span>+<div class="counter">20</div>%</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="status-info-box">
                    <span> {{ __('.dealsOffers') }} </span>
                    <h4>
                        <div class="counter">{{ @$deals_offersCount }}</div>
                    </h4>
                    <h5> {{ __('.thisWeek') }} </h5>
                    <div class="status-info-box-icon chart-down">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#chart-down') }}"></use>
                        </svg>
                        <span>+<div class="counter">20</div>%</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span> {{ __('.storiesViews') }} </span>
                    <h4><div class="counter">3505</div></h4>
                    <h5> {{ __('.thisWeek') }} </h5>
                    <div class="status-info-box-icon chart-up">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#chart-up') }}"></use>
                        </svg>
                        <span>+<div class="counter">20</div>%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-lg-4">
                <div class="custom-cart">
                    <div class="custom-cart-header">
                        <h2> {{ __('.MostPurchasedCustomers') }} </h2>
                    </div>
                    <div class="custom-cart-body">
                        <ul class="clitens-link">

                            @isset($mostPurchasedCustomers)
                                @foreach ($mostPurchasedCustomers as $one)
                                    <li>
                                        <div class="img">
                                            <img src="{{ url('frontend/images/photo-top.png') }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h4> {{ @$one->name }} </h4>
                                            <span>  {{ __('.customerSince') }} {{ $one->created_at->format('Y/m/d') }} </span>
                                        </div>
                                        <div class="paid"> {{ @$one->orders_cost }}{{ __('.riyal') }} </div>
                                    </li>
                                @endforeach
                            @endisset

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="custom-cart">
                    <div class="custom-cart-header">
                        <h2> {{ __('.StoreProfits') }} </h2>
                    </div>
                    <div class="custom-cart-body">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row match-height mt-4">
            <div class="col-lg-12">
                <div class="custom-cart">
                    <div class="custom-cart-header">
                        <h2> {{ __('.newOrders') }} </h2>
                    </div>
                    <div class="custom-cart-body">
                        <div class="table-container">
                            <div class="dash-table">
                                <table class="table responsive" id="example">
                                    <thead>
                                        <th> {{ __('.orderNo') }} </th>
                                        <th> {{ __('.client') }} </th>
                                        <th> {{ __('.orderDate') }} </th>
                                        <th> {{ __('.orderType') }} </th>
                                        <th> {{ __('.Shipping') }}</th>
                                        <th> {{ __('.Payment') }} </th>
                                        <th> {{ __('.Total') }} </th>
                                        <th> {{ __('.Actions') }} </th>
                                    </thead>
                                    <tbody>
                                    @isset($orders)
                                    @foreach ($orders as $one)
                                        <tr>
                                            <td> {{ $one->order_number }} </td>
                                            <td>
                                                <div class="table-two-texts">
                                                    <h5> {{ $one->buyer->name }} </h5>
                                                    <h6> {{ __('.customerSince') }} {{ $one->buyer->created_at->format('Y-m-d') }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-two-texts">
                                                    <h5> {{ $one->created_at->format('Y-m-d') }} </h5>
                                                    <h6> {{ $one->created_at->format('h-i A') }} </h6>
                                                </div>
                                            </td>
                                            <td><h5>صفقة</h5></td>
                                            <td>
                                                <div class="table-two-texts">
                                                    <h5> {{ $one->shipping_method->name }} </h5>
                                                </div>
                                            </td>
                                            <td><h5> {{ $one->payment_method->name }} </h5></td>
                                            <td><h5> {{ $one->final_total }} ريال</h5></td>
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
        </div>

        <div class="row match-height mt-4">
            <div class="col-lg-6">
                <div class="custom-cart">
                    <div class="custom-cart-header">
                        <h2> {{ __('.BestSellingProducts') }} </h2>
                    </div>
                    <div class="custom-cart-body">
                        <div class="table-container">
                            <div class="dash-table">
                                <table class="table responsive" id="example">
                                    <thead>
                                        <th> {{ __('.image') }}</th>
                                        <th> {{ __('.name') }} </th>
                                        <th> {{ __('.category') }} </th>
                                        <th> {{ __('.quantity') }} </th>
                                        <th> {{ __('.price') }} </th>
                                    </thead>
                                    <tbody>
                                    @isset($productsMostSell)
                                    @foreach ($productsMostSell as $one)
                                        <tr>
                                            <td>
                                                <div class="table-img"><img src="{{ @$one->main_image }}" /></div>
                                            </td>
                                            <td>
                                                <div class="table-two-texts">
                                                    <h5> {{ @$one->name }} </h5><h6>{{ @$one->sku }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-two-texts">
                                                    <h5>{{ @$one->main_category->name }}</h5><h6>{{ @$one->sub_category->name }}</h6>
                                                </div>
                                            </td>
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
            </div>
            <div class="col-lg-6">
                <div class="custom-cart">
                    <div class="custom-cart-header">
                        <h2>اوﺷﻚ ﻋﻠﻰ اﻟﻨﻔﺎذ</h2>
                    </div>
                    <div class="custom-cart-body">
                        <div class="table-container">
                            <div class="dash-table">
                                <table class="table responsive" id="example">
                                    <thead>
                                        <th> {{ __('.image') }}</th>
                                        <th> {{ __('.name') }} </th>
                                        <th> {{ __('.category') }} </th>
                                        <th> {{ __('.quantity') }} </th>
                                        <th> {{ __('.price') }} </th>
                                    </thead>
                                <tbody>
                                @isset($productsSolidOut)
                                @foreach($productsSolidOut as $one)
                                    <tr>
                                        <td>
                                            <div class="table-img"><img src="{{ @$one->main_image }}" /></div>
                                        </td>
                                        <td>
                                            <div class="table-two-texts"><h5> {{ @$one->name }} </h5><h6>{{ @$one->sku }}</h6></div>
                                        </td>
                                        <td>
                                            <div class="table-two-texts">
                                                <h5>{{ @$one->main_category->name }}</h5>
                                                <h6>{{ @$one->sub_category->name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>{{ @$one->quantity_available }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ @$one->active_price }} ريال</h5>
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
        </div>
    </div>

@endsection
