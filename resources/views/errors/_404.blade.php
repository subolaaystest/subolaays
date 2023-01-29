@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.teamManagement'))

@section('content')


<div class="main-content">
    <div class="sidbar-icon"><i class="fas fa-bars"> </i></div>
    <div class="dash-page-head">
        <h2>
            {{ __('translate.pageNotFound') }}
            <span>
                <br><br>
                <a class="btn" href="{{ route('seller.login') }}"> {{ __('translate.ReturnHome') }} </a>
            </span>
        </h2>

    </div>

</div>

@endsection
