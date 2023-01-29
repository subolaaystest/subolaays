@extends('website.layouts.app')
    @section('content')
     <div id="main">
      <div class="main-content pb-5">
        <div class="sidbar-icon"> <i class="fas fa-bars"></i></div>
        <div class="header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
              <li class="breadcrumb-item">المفضلة</li>
            </ol>
          </nav>
        </div>
        <div class="page-content favorite mt-3">
          <div class="main-content">
            <div class="list-product vertical">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 match-height mt-5">
                @foreach($favorites as $favorite)
                    <x-product :product="$favorite"></x-product>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection