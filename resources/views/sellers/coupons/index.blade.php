@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.DiscountCoupons'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.DiscountCoupons') }} <span>( {{ count($sellerCoupons) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerCoupon') }}"> {{ __('translate.CreateNewCoupon') }} </a>
        </div>
        <div class="row row-cols-lg-4 row-cols-2">
            <div class="col">
                <div class="status-info-box"><span class="orange"> {{ __('translate.ActivatedCoupons') }} </span>
                    <h4> {{ count($sellerCoupons->where('status', 'active')) }} {{ __('translate.Coupon') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box"><span class="green"> {{ __('translate.InactiveCoupons') }} </span>
                    <h4> {{ count($sellerCoupons->where('status', 'not_active')) }} {{ __('translate.Coupon') }} </h4>
                </div>
            </div>
        </div>


        <form id="signUp" method="get" action="{{ route('getSellerCoupons') }}" enctype="multipart/form-data" class="form-horizontal" role="form">

        <div class="table-filters">

            <div class="form-group mx-3">
                <select class="niceselect" type="text" name="orderBy" id="select-332">
                    <option value=""> {{ __('translate.Choose') }} </option>
                    <option value="latest"> {{ __('translate.latest') }} </option>
                    <option value="active"> {{ __('translate.active') }} </option>
                    <option value="not_active"> {{ __('translate.not_active') }} </option>
                </select>
            </div>

            <div class="btn-filter">
                <button class="btn hvr-shadow"> {{ __('translate.filter') }} </button>
            </div>
            <div class="table-search-box">
                <input class="form-control" type="text" name="txt">
                <div class="icon">
                    <svg>
                        <use href="../../assets/images/icons/icons.svg#search"></use>
                    </svg>
                </div>
            </div>
        </div>
    </form>

    <a href="{{ route('getSellerCoupons') }}">
        <button class="btnn-undefined btn btnn btnn-orange hvr-shadow">
            <span> {{ __('translate.refresh') }} </span>
        </button>
    </a>

        <div class="table-container inner-padding">

            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}

            <div class="table-inner-head">
                <h3> {{ __('translate.DiscountCoupons') }}  </h3>

                <div class="tabl-head-buttons">

                {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-orange hvr-shadow" type="button">
                        <span> {{ __('translate.edit') }} </span>
                    </button> --}}

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow delete" type="button">
                        <span> {{ __('translate.delete') }} </span>
                    </button>

                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow active" type="button">
                        <span> {{ __('translate.active') }} </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow notActive" type="button">
                        <span> {{ __('translate.not_active') }} </span>
                    </button>
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
                <table class="table responsive" id="">
                    <thead>
                        <th style="width:30px">
                            <div class="form-check" style="width:30px">
                              <input class="form-check-input" id="table-parent" type="checkbox" value=""/>
                              <label class="form-check-label" for="table-parent"></label>
                            </div>
                        </th>
                        <th> {{ __('translate.Coupon') }}  </th>
                        <th> {{ __('translate.Date') }}  </th>
                        <th> {{ __('translate.ExpiryDate') }}  </th>
                        <th> {{ __('translate.status') }}  </th>
                        <th></th>
                        <th> {{ __('translate.Actions') }}  </th>
                    </thead>
                    <tbody>
                    @isset($sellerCoupons)
                    @foreach ($sellerCoupons as $one)
                        <tr>
                            <td style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input td-check" name="coupons_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                  <label class="form-check-label" for="ceack-0"></label>
                                </div>
                              </td>
                            <td> {{ $one->name }} </td>
                            <td><div class="table-two-texts"><h5> {{ $one->start }} </h5></div></td>
                            <td><div class="table-two-texts"><h5> {{ $one->end }} </h5></div></td>
                            <td><h5> {{ __('translate.' . $one->status) }} </h5></td>
                            <td>

                                <button class="btn btnn btnn-orange hvr-shadow" data-bs-toggle="modal" data-bs-target="#statisticsModal{{$one->id}}"><span>الاحصائيات</span></button>

                                <div class="modal fade" id="statisticsModal{{$one->id}}" tabindex="-1" aria-labelledby="statisticsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="send-offer-modal">
                                                    <h2>الاحصائيات</h2>
                                                    <p>اﺣﺼﺎﺋﻴﺎت ﻗﺴﻴﻤﺔ اﻟﺘﺨﻔﻴﺾ ﻣﻨﺬ اﻧﺸﺎﺋﻬﺎ وﺣﺘﻰ اﻟﺎن</p>
                                                    <hr class="cus-hr">
                                                </div>
                                                <div class="statisticsModal-body">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="statisticsModal-box">
                                                                <h2>ﻣﺮات اﻟﺎﺳﺘﺨﺪام</h2>
                                                                <h5> {{ count($one->orders) }} ﻣﺮة</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="statisticsModal-box">
                                                                <h2> ﻋﺪد اﻟﻌﻤﻠﺎء </h2>
                                                                <h5> {{ @$one->clients_count }} عميل</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="statisticsModal-box">
                                                                <h2> ﻣﺒﻴﻌﺎت اﻟﻜﻮﺑﻮن</h2>
                                                                <h5> {{ $one->orders->sum('final_total') }} </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action-btn-custom">
                                        <div class="form-check form-switch form-switch-md">
                                            <input class="form-check-input changeCouponStatus" type="checkbox" data-id="{{ @$one->id }}" {{ $one->status == 'active'? 'checked' : '' }} id="switch0" role="switch"/>
                                            <label class="form-check-label" for="switch0"></label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>


        <div class="modal fade" id="statisticsModal" tabindex="-1" aria-labelledby="statisticsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="send-offer-modal">
                            <h2>الاحصائيات</h2>
                            <p>اﺣﺼﺎﺋﻴﺎت ﻗﺴﻴﻤﺔ اﻟﺘﺨﻔﻴﺾ ﻣﻨﺬ اﻧﺸﺎﺋﻬﺎ وﺣﺘﻰ اﻟﺎن</p>
                            <hr class="cus-hr">
                        </div>
                        <div class="statisticsModal-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="statisticsModal-box">
                                        <h2>ﻣﺮات اﻟﺎﺳﺘﺨﺪام</h2>
                                        <h5> 350 ﻣﺮة</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="statisticsModal-box">
                                        <h2> ﻋﺪد اﻟﻌﻤﻠﺎء </h2>
                                        <h5> 350 عميل</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="statisticsModal-box">
                                        <h2> ﻣﺒﻴﻌﺎت اﻟﻜﻮﺑﻮن</h2>
                                        <h5> 350 رﻳﺎل </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection


@section('script')
    <script>

        $('.exportData').on('click', function () {
            $('#formAction').val("export");
            $('#fromID').attr('action', '{{ route('exportSellerCoupons') }}');
            $( "#fromID" ).submit();
        });

        $('.notActive').on('click', function () {
            $('#formAction').val("not_active");
            $('#fromID').attr('action', '{{ route('notActiveSellerCoupons') }}');
            $( "#fromID" ).submit();
        });

        $('.active').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('activeSellerCoupons') }}');
            $( "#fromID" ).submit();
        });


        $('.delete').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('deleteSellerCoupons') }}');
            $( "#fromID" ).submit();
        });


        $('.changeCouponStatus').on('click', function () {
            var couponID = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeCouponStatus/') }}";

            if(couponID){
            $.ajax({
                type: "GET",
                url: url+'/'+couponID,
                success: function (response) {
                    if(response)
                    {
                    }
                }
            });
            }
        });
</script>
@endsection
