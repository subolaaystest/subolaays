@extends('website.layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endsection
@section('content')
<div id="main">
    <div class="main-content pb-5">
        @include('website.home.partials.home_slider',['main_advertises'=> $main_advertises ])
        @include('website.home.partials.mainCategories',['main_categories'=> $main_categories ])
        @include('website.home.partials.stories',['stories' => $stories])
        @include('website.home.partials.products',['grocery_products' => $grocery_products ])
        {{-- advertisements --}}
        <div class="img-section mt-5"><img src="{{$first_ads?->image}}" alt=""></div>
        @include('website.home.partials.deals',['grocery_products'    => $grocery_products ])
        @include('website.home.partials.electronics',['electrons_products'=> $electrons_products ])
        {{-- advertisements --}}
        <div class="img-section mt-5"> <img src="{{$second_ads?->image}}" alt=""></div>
        @include('website.home.partials.tories_marchants')
        @include('website.home.partials.offers')
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"> </script>
@endsection
