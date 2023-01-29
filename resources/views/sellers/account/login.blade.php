@extends('layout.sellers.authLayout')

@section('title', __('translate.SignIn'))

@section('content')


    <div class="icon"> <img src="{{ url('frontend/images/icons/waving-hand.svg') }}" alt=""></div>
    <h1> {{ __('translate.HelloSignIn') }}  </h1>

    @include('layout.errors')

    <form id="signUp" method="post" action="{{ route('seller.doLogin') }}" autocomplete="off" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class="input-text-icon-box">
            <svg>
                <use href="{{ url('frontend/images/icons/images/icons/icons.svg#phone') }}"></use>
            </svg>
            <span> {{ __('translate.mobile') }} </span>
            <input class="phone_number" type="number" id="phone" name="mobile" minlength="12" autocomplete="off" required>
            <input type="hidden" id="fullNumber" name="fullNumber">
        </div>

        {{-- <div id="error-msg"></div> --}}
        {{-- <div id="valid-msg"></div> --}}

        <div class="btn-submit">
            <button class="btn hvr-float-shadow"><span> {{ __('translate.SignIn') }} </span></button>
        </div>

        <div class="bottom-form-text">
            <h5> {{ __('translate.dontHaveAccount') }} <a href="{{ route('seller.register') }}"> {{ __('translate.subscribeNow') }} </a></h5>
        </div>
    </form>


@endsection
