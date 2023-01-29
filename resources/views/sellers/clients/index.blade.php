@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.clients'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.clients') }} <span>( {{ count($items) }} )</span></h2>
        </div>
        <div class="table-container inner-padding">

            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}

            <div class="table-inner-head">
                <h3> {{ __('translate.clients') }} </h3>


                <div class="tabl-head-buttons">
                    {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow" type="button"><span>تسجيل خروج كل الموظفين  </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow" type="button"><span>حذف </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow" type="button"><span>تعليق   </span>
                    </button> --}}

                    {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow" type="button">
                        <span> {{ __('translate.SendAlertToEveryone') }} </span>
                    </button> --}}

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow exportData" type="button">
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
                        <th> {{ __('translate.name') }} </th>
                        <th> {{ __('translate.Date') }} </th>
                        <th> {{ __('translate.TotalOrders') }} </th>
                        <th> {{ __('translate.address') }} </th>
                        <th> {{ __('translate.totalPurchase') }} </th>
                        <th> {{ __('translate.Actions') }}  </th>
                    </thead>
                    <tbody>
                    @isset($items)
                    @foreach ($items as $one)
                        <tr>
                            <td style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input td-check" name="clients_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                  <label class="form-check-label" for="ceack-0"></label>
                                </div>
                              </td>

                            <td>
                                <div class="d-flex">
                                    <div class="table-img">
                                        <img src="{{ url('frontend/images/product-thumb.png') }}" />
                                    </div>
                                    <div class="table-two-texts mx-2">
                                        <h5> <a href="{{ route('getClientOrders', $one->id) }}">{{ @$one->name }} </a> </h5>
                                        <h6> {{ __('translate.customerSince') }} {{ @$one->created_at->format('Y/m/d') }} </h6>
                                    </div>
                                </div>
                            </td>
                            <td><div class="table-two-texts"><h5>12 سبمتمر 2021</h5><h6> {{ @$one->created_at->format('h:i A') }} </h6></div></td>
                            <td><h5> {{ count($one->orders) }} {{ __('translate.orders') }} </h5></td>
                            <td><h5> {{ @$one->address }} </h5></td>
                            <td><h5> {{ $one->orders->sum('final_total') }} {{ __('translate.riyal') }} </h5></td>
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
            $('#fromID').attr('action', '{{ route('exportSellerClients') }}');
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



</script>
@endsection
