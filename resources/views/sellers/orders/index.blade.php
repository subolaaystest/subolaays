@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.orders'))

@section('content')


    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.TotalOrders') }} <span>( {{ @$allOrders }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="#"> {{ __('translate.createNewOrder') }} </a>
        </div>
        <div class="row row-cols-lg-4 row-cols-2">
            <div class="col">
                <div class="status-info-box">
                    <span class="orange">
                        {{ __('translate.WaitingConfirmation') }}
                    </span>
                    <h4> {{ @$newOrders }} {{ __('translate.order') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box"><span class="green"> {{ __('translate.InDelivery') }} </span>
                    <h4>{{ @$under_deliveryOrders }} {{ __('translate.order') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box"><span class="blue"> {{ __('translate.deliveredDone') }} </span>
                    <h4>{{ @$completedOrders }} {{ __('translate.order') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box"><span class="red"> {{ __('translate.canceled') }} </span>
                    <h4>{{ @$canceledOrders }} {{ __('translate.order') }} </h4>
                </div>
            </div>
        </div>




    <a href="{{ route('getSellerOrders') }}">
        <button class="btnn-undefined btn btnn btnn-orange hvr-shadow">
            <span> {{ __('translate.refresh') }} </span>
        </button>
    </a>



        <div class="table-container inner-padding">

            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}


            <div class="table-inner-head">
                <h3> {{ __('translate.orders') }} </h3>

                <div class="tabl-head-buttons">

                      <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow">
                        <span> {{ __('translate.changeOrderStatus') }}</span>
                    </button>

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow">
                        <span> {{ __('translate.BillOfLadingPrinting') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#printer') }}"></use>
                        </svg>
                    </button>

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow">
                        <span> {{ __('translate.ViewInvoice') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#eye') }}"></use>
                        </svg>
                    </button>

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow exportData" onclick="getElementById('exportSellerOrders').click()">
                        <span> {{ __('translate.export') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                        </svg>
                    </button>

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
                        <th> {{ __('translate.orderNo') }} </th>
                        <th> {{ __('translate.client') }} </th>
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
                            <td style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input td-check" name="orders_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                  <label class="form-check-label" for="ceack-0"></label>
                                </div>
                            </td>

                            <td> {{ $one->order_number }} </td>
                            <td>
                                <div class="table-two-texts">
                                    <h5> {{ $one->buyer->name }} </h5>
                                    <h6> {{ __('translate.customerSince') }} {{ $one->buyer->created_at->format('Y-m-d') }}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="table-two-texts">
                                    <h5> {{ $one->created_at->format('Y-m-d') }} </h5>
                                    <h6> {{ $one->created_at->format('h-i A') }} </h6>
                                </div>
                            </td>
                            <td><h5>صفقة</h5></td>
                            <td><div class="table-two-texts"><h5> {{ $one->shipping_method->name ?? '' }} </h5> </div></td>
                            <td><h5> {{ $one->payment_method->name ?? '' }} </h5></td>
                            <td><div class="table-two-texts"><h5 class="textt-orange"> {{ __('translate.' . $one->status) }} </h5></div></td>
                            <td><h5> {{ $one->final_total }} {{ __('translate.riyal') }} </h5></td>
                            <td>
                                <div class="table-actions">
                                    <a class="table-action-btn" href="{{ route('sellerOrderDetails', $one->id) }}">
                                        <svg>
                                            <use href="{{ url('frontend/images/icons/icons.svg#eye') }}"></use>
                                        </svg>
                                    </a>
                                    <a class="table-action-btn" href="{{ route('sellerOrderDetails', $one->id) }}">
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
        </form>
        </div>
    </div>

@endsection


@section('script')
    <script>

        $('.exportData').on('click', function () {
            $('#formAction').val("export");
            $('#fromID').attr('action', '{{ route('exportSellerOrders') }}');
            $( "#fromID" ).submit();
        });

        // $('.notActive').on('click', function () {
        //     $('#formAction').val("not_active");
        //     $('#fromID').attr('action', '{{ route('changeSellerProductsStatus') }}');
        //     $( "#fromID" ).submit();
        // });

        // $('.active').on('click', function () {
        //     $('#formAction').val("active");
        //     $('#fromID').attr('action', '{{ route('changeSellerProductsStatus') }}');
        //     $( "#fromID" ).submit();
        // });


        // $('.changeProductStatus').on('click', function () {
        //     var productID = $(this).attr("data-id");
        //     var url = "{{ url(app()->getLocale().'/Seller/changeProductStatus/') }}";

        //     if(productID){
        //     $.ajax({
        //         type: "GET",
        //         url: url+'/'+productID,
        //         success: function (response) {
        //             if(response)
        //             {
        //             }
        //         }
        //     });
        //     }
        // });
</script>
@endsection
