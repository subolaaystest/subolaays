@extends('website.layouts.app', ['is_account' => true])
@section('content')
    <div id="main">
        @include('website.buyer.partials.sidebar')

        <div class="main-content pb-5">
           @yield('main-content')

        </div>
    </div>
@endsection
