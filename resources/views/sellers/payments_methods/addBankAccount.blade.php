@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.AddBankAccount'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="page-content-inner">
            <div class="add-product-title">
                <h2> {{ __('translate.Bank') }} </h2>
                <p> {{ __('translate.SelectYourBank') }} </p>
            </div>

            <form id="storeSellerProduct" method="post" action="{{ route('storeBankAccount') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}

                <div class="form-group">
                    <select class="niceselect" type="text" id="select-194" name="bank_id">
                        @isset($banks)
                        @foreach ($banks as $one)
                            <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                        @endforeach
                        @endisset
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-120"> {{ __('translate.AccountHolderName') }} </label>
                    <input class="form-control" type="text" id="input-120" name="account_name"/>
                </div>
                <div class="form-group">
                    <label for="input-705"> {{ __('translate.BankAccount') }} </label>
                    <input class="form-control" type="text" id="input-705" name="account_number"/>
                </div>
                <div class="form-group">
                    <label for="input-386"> {{ __('translate.IBANNumber') }} </label>
                    <input class="form-control" type="text" id="input-386" name="iban"/>
                </div>
                <div class="add-product-footer">
                    <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit">
                        <span> {{ __('translate.add') }} </span>
                    </button>

                    <a href="{{ route('getPaymentsMethods') }}">
                        <button class="btnn-red btn btnn hvr-shadow" type="button">
                            <span> {{ __('translate.cancel') }} </span>
                        </button>
                    </a>

                </div>
            </form>
        </div>
    </div>

@endsection
