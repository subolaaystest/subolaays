@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.Products'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.totalProducts') }} <span>( {{ $allProducts }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerProduct') }}"> {{ __('translate.createNewProduct') }} </a>
        </div>
        <div class="row row-cols-lg-4 row-cols-2">
            <div class="col">
                <div class="status-info-box">
                    <span class="orange"> {{ __('translate.activeProducts') }} </span>
                    <h4> {{ $activeProducts }} {{ __('translate.Product') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span class="green"> {{ __('translate.AwaitingReview') }} </span>
                    <h4> {{ $waitingProducts }} {{ __('translate.Product') }}</h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span class="red"> {{ __('translate.soldOutProducts') }} </span>
                    <h4>{{ $soldOutProducts }} {{ __('translate.Product') }}</h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span class="red"> {{ __('translate.rejected') }} </span>
                    <h4>{{ $rejectedProducts }} {{ __('translate.Product') }}</h4>
                </div>
            </div>
        </div>
        <div class="table-container inner-padding">

            <div class="dash-page-head">
                <h2> {{ __('translate.filter') }} </h2>
            </div>


            <form id="signUp" method="get" action="{{ route('getSellerProducts') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
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



            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}

                <div class="table-inner-head">


                    <h3> {{ __('translate.allProducts') }} </h3>
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
                    <table class="table responsive" id="example">
                        <thead>
                            <th style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input" id="table-parent" type="checkbox" value=""/>
                                  <label class="form-check-label" for="table-parent"></label>
                                </div>
                            </th>
                            <th> {{ __('translate.image') }} </th>
                            <th> {{ __('translate.name') }} </th>
                            <th> {{ __('translate.category') }} </th>
                            <th> {{ __('translate.status') }} </th>
                            <th> {{ __('translate.quantity') }} </th>
                            <th> {{ __('translate.price') }} </th>
                            <th> {{ __('translate.Actions') }} </th>
                        </thead>
                        <tbody>
                        @isset($products)
                        @foreach ($products as $one)
                            <tr>

                                <td style="width:30px">
                                    <div class="form-check" style="width:30px">
                                      <input class="form-check-input td-check" name="products_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                      <label class="form-check-label" for="ceack-0"></label>
                                    </div>
                                </td>

                                <td><div class="table-img"><img src="{{ @$one->main_image }}" /></div></td>
                                <td><div class="table-two-texts"><h5> {{ @$one->name }} </h5><h6>{{ @$one->sku }}</h6></div></td>
                                <td>
                                    <div class="table-two-texts">
                                        <h5>{{ @$one->main_category->name }}</h5><h6>{{ @$one->sub_category->name }}</h6>
                                    </div>
                                </td>
                                <td><div class="table-status status-1">{{ @$one->approve_status }}</div></td>
                                <td><h5>{{ @$one->quantity_available }}</h5></td>
                                <td><h5>{{ @$one->active_price }} ريال</h5></td>
                                <td>
                                    <div class="table-actions">


                                        <a class="table-action-btn changeProductStatus {{ $one->status == 'not_active'? 'done' : '' }}" data-status="{{ @$one->status }}" data-id="{{ @$one->id }}" href="javascript:void(0)">
                                            <svg>
                                                <use href="{{ url('frontend/images/icons/icons.svg#eye') }}"></use>
                                            </svg>
                                        </a>
                                        <a class="table-action-btn" href="{{ route('sellerProductDetails', ['id' => $one->id]) }}">
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
            $('#fromID').attr('action', '{{ route('exportSellerProducts') }}');
            $( "#fromID" ).submit();
        });

        $('.notActive').on('click', function () {
            $('#formAction').val("not_active");
            $('#fromID').attr('action', '{{ route('changeSellerProductsStatus') }}');
            $( "#fromID" ).submit();
        });

        $('.active').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('changeSellerProductsStatus') }}');
            $( "#fromID" ).submit();
        });

        $('.delete').on('click', function () {
            $('#fromID').attr('action', '{{ route('deleteSellerProducts') }}');
            $( "#fromID" ).submit();
        });

        $('.changeProductStatus').on('click', function () {
            var productID = $(this).attr("data-id");
            var productStatus = $(this).attr("data-status");

            if(productStatus == 'active'){
                $(this).addClass("done");
                $(this).attr('data-status', 'not_active');
            }else{
                $(this).removeClass("done");
                $(this).attr('data-status', 'active');
            }

            var url = "{{ url(app()->getLocale().'/Seller/changeProductStatus/') }}";
            if(productID){
            $.ajax({
                type: "GET",
                url: url+'/'+productID,
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
