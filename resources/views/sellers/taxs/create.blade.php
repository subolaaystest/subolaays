@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.ActivateTax'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"> </i></div>
        <div class="page-content-inner">
            <div class="add-product-title">
                <h2> {{ __('translate.choose') }} {{ __('translate.countries') }} </h2>
                <p> {{ __('translate.ChooseCountriesActivateTaxIn') }} </p>
            </div>

            <form id="storeSellerProduct" method="post" action="{{ route('storeSellerTaxs') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <select class="niceselect select2" multiple="multiple" type="text" id="select-271" name="countries[]">
                    @isset($countries)
                        @foreach ($countries as $one)
                            <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                        @endforeach
                    @endisset
                </select>
            </div>

            <div class="form-group">
                <label for="input-444"> {{ __('translate.taxRate') }} </label>
                <input class="form-control" type="number" name="tax_percent" min="0" id="input-444"/>
            </div>

            <div class="add-product-footer">
                <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit">
                    <span> {{ __('translate.add') }} </span>
                </button>

                <a href="{{ route('getSellerTaxs') }}">
                <button class="btnn-red btn btnn hvr-shadow" type="button">
                    <span>{{ __('translate.cancel') }} </span>
                </button>
                </a>
            </div>
            </form>
        </div>
    </div>

@endsection
