@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.OrderDetails'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-tabs">
                <div class="nav-tabs-1">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="invoice-details-tab" data-bs-toggle="tab" data-bs-target="#invoice-details" type="button" role="tab" aria-controls="invoice-details" aria-selected="true">
                                {{ __('translate.OrderDetails') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details" type="button" role="tab" aria-controls="product-details" aria-selected="false">
                                {{ __('translate.ProductsDetails') }}
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="order-status-tab" data-bs-toggle="tab" data-bs-target="#order-status" type="button" role="tab" aria-controls="order-status" aria-selected="false">
                                {{ __('translate.status') }}
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="invoice-details" role="tabpanel" aria-labelledby="invoice-details-tab">
                            <div class="order-details">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.orderNo') }} </span>
                                            <h5> {{ @$order->order_number }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.orderDate') }} </span>
                                            <h5> {{ @$order->created_at->format('Y-m-d h-i A') }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.orderType') }} </span>
                                            <h5>عرض وطلب</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.Total') }} </span>
                                            <h5> {{ @$order->final_total }} {{ __('translate.riyal') }} </h5>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.FacilityType') }} </span>
                                            <h5> {{ @$order->buyer->buyerCategory->name }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.client') }}  </span>
                                            <h5> {{ @$order->buyer->name }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.email') }} </span>
                                            <h5> {{ @$order->buyer->email }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.customerSince') }} </span>
                                            <h5> {{ @$order->buyer->created_at->format('Y-m-d') }}</h5>
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
                                        {{-- <button class="btnn-orange btn btnn mr-2 hvr-shadow">
                                            <span> {{ __('translate.customerDetails') }} </span>
                                            <svg>
                                                <use href="{{ url('frontend/images/icons/icons.svg#user') }}"></use>
                                            </svg>
                                        </button> --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="order-total">
                                    <ul>
                                        <li>
                                            <h5> {{ __('translate.subPrice') }} </h5>
                                            <h6>  {{ @$order->sub_total }} {{ __('translate.riyal') }} </h6>
                                        </li>
                                        <li>
                                            <h5> {{ __('translate.Delivery') }} <span class="express"> {{ $order->shipping_method->name ?? '' }} </span></h5>
                                            <h6> {{ @$order->shipping_method_cost }} {{ __('translate.riyal') }} </h6>
                                        </li>
                                        {{-- <li>
                                        <h5>كوبون الخصم </h5>
                                        <h6>20 ريال</h6>
                                        </li> --}}
                                        <li>
                                            <h5> {{ __('translate.Total') }} </h5>
                                            <h6> {{ @$order->final_total }} {{ __('translate.riyal') }}  </h6>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <button class="btnn-orange btn btnn hvr-shadow">
                                    <span> {{ __('translate.InvoicePrinting') }} </span>
                                    <svg>
                                        <use href="{{ url('frontend/images/icons/icons.svg#printer') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-details" role="tabpanel" aria-labelledby="product-details-tab">
                            <div class="table-container inner-padding">
                                <div class="dash-table">
                                    <table class="table responsive" id="example">
                                        <thead>
                                            <th> {{ __('translate.image') }} </th>
                                            <th> {{ __('translate.name') }} </th>
                                            <th> {{ __('translate.category') }} </th>
                                            <th> {{ __('translate.quantity') }}  </th>
                                            <th> {{ __('translate.price') }}  </th>
                                            <th> {{ __('translate.Actions') }}  </th>
                                        </thead>
                                        <tbody>
                                        @isset($order->order_products)
                                        @foreach ($order->order_products as $one)
                                            <tr>
                                                <td><div class="table-img"><img src="{{ $one->product->main_image }}" /></div></td>
                                                <td>
                                                    <div class="table-two-texts">
                                                        <h5> {{ $one->product->name }} </h5><h6> {{ $one->product->sku }} </h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-two-texts">
                                                        <h5> {{ $one->product->main_category->name }} </h5>
                                                        <h6> {{ $one->product->main_category->name }} </h6>
                                                    </div>
                                                </td>
                                                <td><h5> {{ $one->quantity }} </h5></td>
                                                <td><h5> {{ $one->price }} {{ __('translate.riyal') }} </h5></td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a class="table-action-btn" href="#">
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
                        <div class="tab-pane fade" id="order-status" role="tabpanel" aria-labelledby="order-status-tab">
                            <div class="order-details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="order-details-box viewOrderStatusArea">
                                            <span> {{ __('translate.status') }} </span>
                                            <h5> {{  __('translate.' . $order->status) }} </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.EstimatedTimeOfArrival') }} </span>
                                            <h5>12 سبتمبر 2021</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.Shipping') }}  </span>
                                            <h5>  </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="order-details-box">
                                            <span> {{ __('translate.ShippingType') }} </span>
                                            <h5><strong class="express"> {{ $order->shipping_method->name ?? '' }} </strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="progressDivSteps">
                                    @php

                                        $orderStep = 1;

                                        if($order->status == 'ready'){
                                            $orderStep = 1;
                                        }
                                        elseif($order->status == 'under_delivery'){
                                            $orderStep = 2;
                                        }
                                        elseif($order->status == 'completed'){
                                            $orderStep = 3;
                                        }else{
                                            $orderStep = 1;
                                        }

                                    @endphp
                                </div>


                                <div class="custom-progress-parent progressDiv step-{{ @$orderStep }}">
                                    <div class="custom-progress-bar">
                                        <div class="custom-progress-child"> </div>
                                    </div>
                                    <div class="custom-progress-text">

                                        <h5>
                                            @if($order->status == 'ready')
                                                {{ __('translate.status') }}
                                                <strong> {{__('translate.ready') }} </strong>
                                                @else
                                                {{__('translate.ready') }}
                                            @endif
                                        </h5>


                                        <h5>
                                            @if($order->status == 'under_delivery')
                                                {{ __('translate.status') }}
                                                <strong> {{__('translate.under_delivery') }} </strong>
                                                @else
                                                {{__('translate.under_delivery') }}
                                            @endif
                                        </h5>

                                        <h5>
                                            @if($order->status == 'completed')
                                                {{ __('translate.status') }}
                                                <strong> {{__('translate.completed') }} </strong>
                                                @else
                                                {{__('translate.completed') }}
                                            @endif
                                        </h5>


                                    </div>
                                </div>
                                <hr>
                                <div class="bottom-row d-flex justify-content-between flex-wrap mt-5">
                                    <div class="order-details-box">
                                        <span> {{ __('translate.Location') }} </span>
                                        <h5>تبوك السعودية</h5>
                                    </div>
                                    <div class="buttons d-flex">
                                        <button class="btnn-gray btn btnn hvr-shadow">
                                            <span> {{ __('translate.viewLocation') }} </span>
                                            <svg>
                                                <use href="{{ url('images/icons/icons.svg#marker') }}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="dropdown">
                                    <button class="btnn-orange btn btnn hvr-shadow" id="changeAppStatus" control-id="ControlID-9" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span> {{ __('translate.changeOrderStatus') }} </span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="changeAppStatus">
                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('new')" data-id="new" href="javascript:void(0)"> {{__('translate.new') }} </a>
                                        </li>

                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('under_preparing')" data-id="under_preparing" href="javascript:void(0)"> {{__('translate.under_preparing') }} </a>
                                        </li>

                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('ready')" data-id="new" href="javascript:void(0)"> {{__('translate.ready') }} </a>
                                        </li>
                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('under_delivery')" data-id="new" href="javascript:void(0)"> {{__('translate.under_delivery') }} </a>
                                        </li>
                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('completed')" data-id="new" href="javascript:void(0)"> {{__('translate.completed') }} </a>
                                        </li>
                                        <li class="mb-2">
                                            <a class="dropdown-item" onclick="changeOrderStatus('canceled')" data-id="new" href="javascript:void(0)"> {{__('translate.canceled') }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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



@section('script')

    <script>


        function changeOrderStatus(newStatus) {
            var url = "{{ url(app()->getLocale().'/Seller/changeOrderStatus/') }}";
            url = url+'/'+{{ @$order->id }}+'/'+newStatus;

            if(newStatus){
            $.ajax({
                type: "GET",
                url: url,
                success: function (response) {
                    if(response)
                    {

                        $(".viewOrderStatusArea").load(location.href + " .viewOrderStatusArea");
                        $(".progressDivSteps").load(location.href + " .progressDivSteps");
                        $(".progressDiv").load(location.href + " .progressDiv");

                    }
                }
            });
            }

        }




</script>
