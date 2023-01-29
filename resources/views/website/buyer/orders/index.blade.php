@extends('website.buyer.layout')
@push('css')
    <style>
        .building-box input:checked ~ .icon.bg-gray {
            background: var(--bs-gray-500);
        }
    </style>
@endpush
@section('main-content')
    <div class="bargains-content mt-5">
        <div class="dash-tabs">
            <div class="nav-tabs-1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Voucher-data-tab" data-bs-toggle="tab" data-bs-target="#Voucher-data" type="button" role="tab" aria-controls="Voucher-data" aria-selected="true">طلباتى الحالية</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Voucher-Included-tab" data-bs-toggle="tab" data-bs-target="#Voucher-Included" type="button" role="tab" aria-controls="Voucher-Included" aria-selected="false">طلباتى السابقة </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="excluded-coupon-tab" data-bs-toggle="tab" data-bs-target="#excluded-coupon" type="button" role="tab" aria-controls="excluded-coupon" aria-selected="false">المرفوضة</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Voucher-data" role="tabpanel" aria-labelledby="Voucher-data-tab">
                        <div class="all-bargins">
                            <div class="row m-0 w-100 mt-4">
                                @include('website.buyer.orders.partials.orders' ,['orders' => $current_orders])
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Voucher-Included" role="tabpanel" aria-labelledby="Voucher-Included-tab">
                        <div class="all-bargins">
                            <div class="row m-0 w-100 mt-4">
                                @include('website.buyer.orders.partials.orders',['orders' => $completed_orders])
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="excluded-coupon" role="tabpanel" aria-labelledby="excluded-coupon-tab">
                        <div class="all-bargins">
                            <div class="row m-0 w-100 mt-4">
                                @include('website.buyer.orders.partials.orders',['orders' => $canceled_orders])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
