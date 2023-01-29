@include('website.layouts.head')
<body>
<div class="@isset($is_account) account-layout @else landing-layout @endisset">
    @include('website.layouts.header')
    @include('website.layouts.alerts')
    @include('website.home.partials.landing_notice')
    @yield('content')
    @include('website.layouts.footer')
    @include('website.layouts.scripts')
</div>
</body>

