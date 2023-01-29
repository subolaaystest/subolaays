@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.PaymentsMethods'))

@section('content')


    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.AddedBankAccounts') }} <span>( {{ count($payments_methods) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('addBankAccount') }}"> {{ __('translate.AddBankAccount') }} </a>
        </div>


        @isset($banks)
        @foreach($banks as $one)
            <div class="cover-card-sec">
                <div class="form-check form-switch form-switch-md">
                    <input class="form-check-input" type="checkbox" id="switch7" role="switch">
                    <label class="form-check-label" for="switch7"></label>
                </div>
                <img class="bg-image" src="{{ url('frontend/images/card-bg.png') }}" alt="">
                <div class="text-box">
                    <div class="d-flex justify-content-between">
                        <div class="text">
                            <h2> {{ __('translate.BankAccount') }} </h2>
                            <h3> {{ @$one->account_number }} </h3>
                        </div>
                        <div class="text">
                            <h2> {{ __('translate.AccountHolderName') }} </h2>
                            <h3> {{ @$one->account_name }} </h3>
                        </div>
                    </div>
                    <div class="text">
                        <h2> {{ __('translate.IBANNumber') }} </h2>
                        <h3> {{ @$one->iban }} </h3>
                    </div>
                    <div class="text">
                        <h2> {{ __('translate.Bank') }} </h2>
                        <h3> {{ @$one->bank->name }} </h3>
                    </div>
                </div>
            </div>
        @endforeach
        @endisset

        <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4 match-height">
            @isset($payments_methods)
            @foreach ($payments_methods as $one)
            <div class="col">
                <div class="company-box">
                    <div class="company-box-top">
                        <div class="company-box-name">
                            <span> {{ __('translate.PaymentMethod') }} </span>
                            <h2> {{ @$one->name }} </h2>
                        </div>
                    </div>
                    <div class="company-box-logo"> <img src="{{ @$one->image }}" alt=""/></div>
                    <div class="company-box-check">
                        <div class="form-group m-0">
                            <label for="switch473"> {{ __('translate.activated') }} </label>
                        </div>
                        <div class="form-check form-switch form-switch-md m-0">

                            @php
                                $sellerPaymentIDs = auth()->guard('seller')->user()->payments_methods->pluck('payment_method_id')->toArray();
                            @endphp

                            <input class="form-check-input changePaymentMethodStatus" type="checkbox" data-id="{{ @$one->id }}" id="switch0"
                            {{ in_array($one->id, $sellerPaymentIDs)? 'checked' : '' }} role="switch"/>
                            <label class="form-check-label" for="switch473"></label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>


@endsection




@section('script')

    <script>
        $('.changePaymentMethodStatus').on('change', function () {
            var sellerPayMethID = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changePaymentMethodStatus/') }}";

            if(sellerPayMethID){
            $.ajax({
                type: "GET",
                url: url+'/'+sellerPayMethID,
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
