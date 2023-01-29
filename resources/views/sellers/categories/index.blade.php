@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.ProductCategories'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.ProductCategories') }} <span>( {{ count($categories) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerMainCategory') }}">
                {{ __('translate.AddCategory') }}
            </a>
        </div>
        <div class="table-container inner-padding">


            <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                {{ csrf_field() }}


            <div class="table-inner-head">
                <h3> {{ __('translate.ProductCategories') }} </h3>

                <div class="tabl-head-buttons">
                    {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-orange hvr-shadow" type="button">
                        <span> {{ __('translate.edit') }} </span>
                    </button> --}}
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow active" type="button">
                        <span> {{ __('translate.active') }} </span>
                    </button>
                    <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow notActive" type="button">
                        <span> {{ __('translate.not_active') }} </span>
                    </button>
                    {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow exportData" type="button">
                        <span> {{ __('translate.export') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                        </svg>
                    </button> --}}
                </div>

                <input type="hidden" id="formAction" name="formAction" value="">

            </div>
            <div class="dash-table">
                <table class="table responsive" id="example">
                    <thead>
                        <th style="width:30px">
                            <div class="form-check" style="width:30px">
                              <input class="form-check-input" id="table-parent" type="checkbox" />
                              <label class="form-check-label" for="table-parent"></label>
                            </div>
                        </th>
                        <th> {{ __('translate.name') }} </th>
                        <th> {{ __('translate.Date') }} </th>
                        {{-- <th>القسم الرئيسي</th> --}}
                        <th> {{ __('translate.status') }} </th>
                        <th> {{ __('translate.Actions') }} </th>
                    </thead>
                    <tbody>
                    @isset($categories)
                        @php
                            $sellerMainCategories = auth()->guard('seller')->user()->main_categories->pluck('main_category_id')->toArray();
                        @endphp

                        @foreach ($categories as $one)
                        <tr>
                            <td style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input td-check" name="categories_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-0" />
                                  <label class="form-check-label" for="ceack-0"></label>
                                </div>
                              </td>
                            <td> {{ @$one->name }} </td>
                            <td><div class="table-two-texts"><h5> {{ @$one->created_at->format('Y-m-d') }} </h5><h6> {{ @$one->created_at->format('h:i A') }} </h6></div></td>
                            {{-- <td><h5>بقالة</h5></td> --}}
                            <td> {{ @$one->status }} </td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action-btn-custom">
                                        <div class="form-check form-switch form-switch-md">
                                            <input class="form-check-input changeMainCategoryStatus" type="checkbox" data-id="{{ @$one->id }}" id="switch0" {{ in_array($one->id, $sellerMainCategories)? 'checked' : '' }} role="switch"/>
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

        </form>

        </div>
    </div>

@endsection



@section('script')

    <script>


        // $('.exportData').on('click', function () {
        //     $('#formAction').val("export");
        //     $('#fromID').attr('action', '{{ route('exportSellerProducts') }}');
        //     $( "#fromID" ).submit();
        // });

        $('.notActive').on('click', function () {
            $('#formAction').val("not_active");
            $('#fromID').attr('action', '{{ route('notActiveSellerCategories') }}');
            $( "#fromID" ).submit();
        });

        $('.active').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('activeSellerCategories') }}');
            $( "#fromID" ).submit();
        });



        $('.changeMainCategoryStatus').on('change', function () {
            var categoryID;
            categoryID = $(this).attr("data-id");

            var url = "{{ url(app()->getLocale().'/Seller/changeMainCategoryStatus/') }}";

            if(categoryID){
            $.ajax({
                type: "GET",
                url: url+'/'+categoryID,
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
