@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.ActivateTax'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"></i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.ActivateTax') }} <span>( {{ count($items) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerTaxs') }}"> {{ __('translate.CreateNewTax') }} </a>
        </div>
        <div class="page-content-inner">
            <div class="required-box mb-4">
                <p> {{ __('translate.SetTaxNumber') }} </p>
                <span> {{ __('translate.required') }} </span>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    <label for="switch5"> {{ __('translate.CalculationTaxShippingServices') }} </label>
                </div>
                <div class="form-check form-switch form-switch-md">
                    <input class="form-check-input" type="checkbox" id="switch5" role="switch">
                    <label class="form-check-label" for="switch5"></label>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    <label for="switch6"> {{ __('translate.ViewProductPricesIncludingTax') }} </label>
                </div>
                <div class="form-check form-switch form-switch-md">
                    <input class="form-check-input" type="checkbox" id="switch6" role="switch">
                    <label class="form-check-label" for="switch6"></label>
                </div>
            </div>
        </div>
        <div class="page-content-inner mt-4">
            <div class="table-container">

                <form method="post" id="fromID" action="" enctype="multipart/form-data" class="form-horizontal" role="form">
                    {{ csrf_field() }}

                <div class="table-inner-head">
                    <h3> {{ __('translate.ActivateTax') }} </h3>
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
                        {{-- <button class="btnn-undefined btn btnn btn-active-disactive btnn-red hvr-shadow exportData" type="button">
                            <span> {{ __('translate.export') }} </span>
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                            </svg>
                        </button> --}}
                    </div>
                  </div>

                  <input type="hidden" id="formAction" name="formAction" value="">

                <div class="dash-table">
                    <table class="table responsive" id="">
                        <thead>
                            <th style="width:30px">
                                <div class="form-check" style="width:30px">
                                  <input class="form-check-input" id="table-parent" type="checkbox" value=""/>
                                  <label class="form-check-label" for="table-parent"></label>
                                </div>
                              </th>
                            <th> {{ __('translate.taxRate') }} </th>
                            <th> {{ __('translate.created_at') }} </th>
                            <th> {{ __('translate.status') }} </th>
                            <th> {{ __('translate.Actions') }} </th>
                        </thead>
                        <tbody>
                        @isset($items)
                        @foreach ($items as $one)
                            <tr>
                                <td style="width:30px">
                                    <div class="form-check" style="width:30px">
                                      <input class="form-check-input td-check" name="taxs_ids[]" value="{{ $one->id }}" type="checkbox" id="ceack-1" />
                                      <label class="form-check-label" for="ceack-1"></label>
                                    </div>
                                </td>

                                <td>{{ @$one->tax_percent }}%</td>
                                <td>
                                    <div class="table-two-texts">
                                        <h5>
                                            {{ @$one->created_at->format('Y/m/d') }}
                                        </h5>
                                        <h6>
                                            {{ @$one->created_at->format('h:i A ') }}
                                        </h6>
                                    </div>
                                </td>
                                <td><h5 class="textt-orange">{{ __('translate.' . $one->status) }}</h5></td>
                                <td>
                                    <div class="table-actions">
                                        <div class="table-action-btn-custom">
                                            <div class="form-check form-switch form-switch-md">
                                                <input class="form-check-input changeTaxStatus" type="checkbox" data-id="{{ @$one->id }}" {{ $one->status == 'active'? 'checked' : '' }} id="switch0" role="switch"/>
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
            $('#fromID').attr('action', '{{ route('notActiveSellerTaxs') }}');
            $( "#fromID" ).submit();
        });

        $('.active').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('activeSellerTaxs') }}');
            $( "#fromID" ).submit();
        });

        $('.delete').on('click', function () {
            $('#formAction').val("active");
            $('#fromID').attr('action', '{{ route('deleteSellerTaxs') }}');
            $( "#fromID" ).submit();
        });


        $('.changeTaxStatus').on('click', function () {
            var taxID = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeTaxStatus/') }}";

            if(taxID){
            $.ajax({
                type: "GET",
                url: url+'/'+taxID,
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
