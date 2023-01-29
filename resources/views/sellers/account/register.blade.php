@extends('layout.sellers.authLayout')

@section('title', __('translate.createAccount'))

@section('content')


    <div class="icon"> <img src="{{ url('frontend/images/icons/waving-hand.svg') }}" alt=""></div>
    <h1> {{ __('translate.HelloCreateNewAccount') }} </h1>

    @include('layout.errors')

    <form id="signUp" method="post" action="{{ route('seller.doRegister') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
    {{ csrf_field() }}

        <div class="input-text-icon-box">
            <svg>
                <use href="{{ url('frontend/images/icons/images/icons/icons.svg#phone') }}"></use>
            </svg>
            <span> {{ __('translate.mobile') }} </span>
            <input class="phone_number" type="number" id="phone" name="mobile" minlength="12" required>
            <input type="hidden" id="fullNumber" name="fullNumber">
        </div>

        {{-- <div id="error-msg"></div>
        <div id="valid-msg"></div> --}}

        <div class="btn-submit">
            <button class="btn hvr-float-shadow"><span> {{ __('translate.createAccount') }} </span></button>
        </div>

    </form>


@endsection
