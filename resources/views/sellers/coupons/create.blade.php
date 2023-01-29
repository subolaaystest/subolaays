@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.DiscountCoupons'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-tabs">
            <div class="nav-tabs-1">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Voucher-data-tab" data-bs-toggle="tab" data-bs-target="#Voucher-data" type="button" role="tab" aria-controls="Voucher-data" aria-selected="true">
                            {{ __('translate.CouponData') }}
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Voucher-Included-tab" data-bs-toggle="tab" data-bs-target="#Voucher-Included" type="button" role="tab" aria-controls="Voucher-Included" aria-selected="false">
                            {{ __('translate.CouponIncluded') }}
                        </button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="excluded-coupon-tab" data-bs-toggle="tab" data-bs-target="#excluded-coupon" type="button" role="tab" aria-controls="excluded-coupon" aria-selected="false">
                            {{ __('translate.ExcludedCoupon') }}
                        </button>
                    </li> --}}
                </ul>



                <form id="storeSellerProduct" method="post" action="{{ route('storeSellerCoupon') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Voucher-data" role="tabpanel" aria-labelledby="Voucher-data-tab">
                            <div class="coupon-note">
                                <div class="icon"> <img src="{{ url('frontend/images/coupon-icon.png') }}" alt=""></div>
                                <h3> {{ __('translate.CouponCodeLettersNumbers') }} </h3>
                                <div class="coupon-finish"> <img src="{{ url('frontend/images/coupon-finish.png') }}" alt=""></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="input-842" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="input-247"> {{ __('translate.discountType') }} </label>
                                <select class="niceselect" type="text" id="select-247" name="coupon_type">
                                    <option value="fixed"> {{ __('translate.FixedAmountTotalPurchases') }} </option>
                                    <option value="percent"> {{ __('translate.PercentageTotalPurchases') }} </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="number" id="input-459" name="discount" min="0" />
                                <div class="value-text"> {{ __('translate.riyal') }} </div>
                            </div>
                            <div class="d-flex justify-content-between" style="margin-top:-10px">
                                <div class="form-group">
                                    <label for="switch5"> {{ __('translate.WithFreeShipping') }} </label>
                                </div>
                                <div class="form-check form-switch form-switch-md">
                                    <input class="form-check-input" type="checkbox" name="free_shipping" value="yes" id="switch5" role="switch">
                                    <label class="form-check-label" for="switch5"></label>
                                </div>
                            </div>
                            <hr class="cus-hr">

                            <div class="form-group">
                                <label for="input-358"> {{ __('translate.MaximumDiscountAmount') }} </label>
                                <input class="form-control" type="number" name="minimum_purchases" id="input-358" min="0" />
                                <div class="value-text"> {{ __('translate.riyal') }} </div>
                            </div>
                            <div class="form-group">
                                <label for="input-19"> {{ __('translate.ExpiryDate') }} </label>
                                <input class="form-control" type="datetime-local" name="end" id="input-19"/>
                            </div>
                            <hr class="cus-hr">
                            <div class="form-group">
                                <label for="input-694"> {{ __('translate.ExcludingDiscountedProducts') }} </label>
                                <select class="niceselect" name="exclude_offer_products" type="text" id="select-694">
                                    <option value="yes"> {{ __('translate.yes') }}  </option>
                                    <option value="no"> {{ __('translate.no') }} </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="input-592"> {{ __('translate.FrequencyUseForAll') }} </label>
                                <input class="form-control" type="number" id="input-592" name="all_frequency_use" min="0" />
                            </div>


                            <div class="form-group">
                                <label for="input-771"> {{ __('translate.NumberOfTimesUsePerCustomer') }} </label>
                                <input class="form-control" type="number" id="input-771" name="buyer_frequency_use" min="0" />
                            </div>


                            <div class="btn-submit-300 mt-5">
                                <button class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" type="submit">
                                    <span> {{ __('translate.next') }} </span>
                                </button>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Voucher-Included" role="tabpanel" aria-labelledby="Voucher-Included-tab">
                            <div class="form-group">
                                <label for="input-104"> {{ __('translate.PaymentMethodsIncludedCoupon') }} </label>
                                <select class="niceselect" type="text" id="select-104" name="paymentMethods[]">
                                    @isset($paymentMethods)
                                        @foreach ($paymentMethods as $one)
                                            <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="input-874"> {{ __('translate.IncludedCategories') }} </label>
                                <select class="niceselect" type="text" id="select-874">
                                    @isset($categories)
                                        @foreach ($categories as $one)
                                            <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>

                            <div class="add-product-title">
                                <h2> {{ __('translate.IncludedProducts') }} </h2>
                                <p> {{ __('translate.productsNotHaveOptions') }} </p>
                            </div>
                            <div class="search-results-box">
                                <div class="form-group">
                                    <input class="search-results-input form-control" type="text"/>
                                </div>
                                <div class="search-results-list">
                                    <ul>
                                        <li data-id="1">
                                            <div class="side">
                                                <div class="table-img">
                                                    <img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/>
                                                </div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#24234234</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }} </h5>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="data-addedd">
                                    <ul>
                                        <li data-id="1">
                                            <div class="side">
                                                <div class="table-img">
                                                    <img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/>
                                                </div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5><a class="delete text-red" href="#"><i class="fas fa-times"> </i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-918"> {{ __('translate.IncludedClients') }} </label>
                                <select class="niceselect" type="text" id="select-918">
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                </select>
                            </div>
                            <div class="btn-submit-300 mt-5">
                                <button class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" type="button">
                                    <span> {{ __('translate.save') }} </span>
                                </button>
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="excluded-coupon" role="tabpanel" aria-labelledby="excluded-coupon-tab">
                            <div class="form-group">
                                <label for="input-814"> {{ __('translate.ExcludingCategories') }} </label>
                                <select class="niceselect" type="text" id="select-814">
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="input-315"> {{ __('translate.ExcludingBrands') }} </label>
                                <select class="niceselect" type="text" name="trademarks[]" id="select-315">
                                    @isset($trademarks)
                                        @foreach ($trademarks as $one)
                                            <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>

                            <div class="add-product-title">
                                <h2> {{ __('translate.ExcludingProducts') }} </h2>
                                <p> {{ __('translate.productsNotHaveOptions') }} </p>
                            </div>
                            <div class="search-results-box">
                                <div class="form-group">
                                    <input class="search-results-input form-control" type="text"/>
                                </div>
                                <div class="search-results-list">
                                    <ul>
                                        <li data-id="1">
                                            <div class="side">
                                                <div class="table-img"><img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/></div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5>
                                            </div>
                                        </li>
                                        <li data-id="3">
                                            <div class="side">
                                                <div class="table-img"><img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/></div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5>
                                            </div>
                                        </li>
                                        <li data-id="4">
                                            <div class="side">
                                                <div class="table-img"><img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/></div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5>
                                            </div>
                                        </li>
                                        <li data-id="5">
                                            <div class="side">
                                                <div class="table-img"><img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/></div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="data-addedd">
                                    <ul>
                                        <li data-id="1">
                                            <div class="side">
                                                <div class="table-img"><img src="{{ url('frontend/images/product-thumb.png') }}" alt=""/></div>
                                                <div class="table-two-texts">
                                                    <h5>خضراوات مشكل</h5>
                                                    <h6>#54545454</h6>
                                                </div>
                                            </div>
                                            <div class="side">
                                                <h5 class="textt-green">45 {{ __('translate.riyal') }}</h5><a class="delete text-red" href="#"><i class="fas fa-times"> </i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-935"> {{ __('translate.ExcludingClients') }} </label>
                                <select class="niceselect" type="text" id="select-935">
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                </select>
                            </div>
                            <div class="btn-submit-300 mt-5">
                                <button class="btnn-orange btn btnn btn-fill px-5 hvr-shadow" type="button">
                                    <span> {{ __('translate.save') }} </span>
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
