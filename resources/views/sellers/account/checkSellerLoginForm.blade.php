@extends('layout.sellers.authLayout')

@section('title', __('translate.SignIn'))

@section('content')

    <div class="icon">
        <svg>
            <a href="{{ route('seller.login') }}">
                <use href="{{ url('frontend/images/icons/icons.svg#arrow-right') }}"></use>
            </a>
        </svg>
    </div>

    <h1> {{ __('translate.HelloSignIn') }} </h1>

    @include('layout.errors')

    <form id="checkSellerCode" method="post" action="{{ route('checkSellerLoginCode') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
    {{ csrf_field() }}

        <input type="hidden" name="mobile" value="{{ $_REQUEST['mobile'] }}">

        <input type="hidden" id="fullPin" name="fullPin">

        <div class="myPinCode">
            <input class="form-control" type="tel" maxlength="3" name="code1" required>
            <input class="form-control" type="tel" maxlength="3" name="code2" required>
            <input class="form-control" type="tel" maxlength="3" name="code3" required>
            <input class="form-control" type="tel" maxlength="3" name="code4" required>
        </div>

        <div class="btn-submit">
            <button class="btn hvr-float-shadow"> <span> {{ __('translate.SignIn') }} </span></button>
        </div>

        <div class="bottom-form-text">
            <h5><a href="{{ route('reSendSellerLoginCode', ['mobile' => $_REQUEST['mobile']]) }}">
                {{ __('translate.SendVerificationCodeAgain') }} </a></h5>
        </div>
    </form>

@endsection
