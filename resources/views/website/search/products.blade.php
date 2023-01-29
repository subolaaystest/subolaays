@extends('website.layouts.app')
@section('content')
    <div id="main">
        <div class="main-content pb-5">
            <div class="sidbar-icon"> <i class="fas fa-bars"></i></div>
            <div class="header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item">البقالة</li>
                    </ol>
                </nav>
            </div>
            <div class="page-content mt-5">
                <div class="dash-sidebar">
                    <div class="top-sidebar">
                        <div class="logo">  <img src="{{asset('website_assets/assets/images/logo.png')}}" alt="alt"></div>
                        <div class="close-menu"> <i class="fas fa-times">    </i></div>
                    </div>
                    <div class="list-links">
                        <div class="filtering d-flex align-items-center justify-content-between mb-4 pb-4">
                            <h5 class="m-0">تصفية
                                <p class="filter-no d-inline-block m-0"> <span id="searchFilter"></span></p>
                            </h5><a style="text-decoration: none;" href="{{route('search.products', ['search'=> request('search')])}}"><span class="reload">إعادة تعيين</span></a>
                        </div>
                        <div class="list-links-group">
                            <h5>حسب القسم الفرعى</h5>
                            <ul>
                                <li><a href="{{route('search.products', ['search'=> request('search')])}}">
                                        <div class="icon"><img src="{{asset('website_assets/assets/images/landing-menu/All_Section.svg')}}" alt=""></div><span>جميع الاقسام الفرعية </span></a></li>
                                @foreach($categories as $category)
                                <li class="main_category">
                                    <a href="{{route('search.products', ['search'=> request('search') ,'category_id'=>$category->id])}}">
                                        <div class="icon"><img src="{{$category->image}}" alt=""></div>
                                        <span> {{$category->name}} </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-links-group">
                            <h5>حسب العلامة التجارية</h5>
                            <ul>
                                @foreach($trademarks as $trademark)
                                <li>
                                    <a href="{{route('search.products', ['search'=> request('search') ,'trademark_id'=> $trademark->id])}}">
                                        <div class="icon">
                                            <img src="{{$trademark->image}}" alt="">
                                        </div><span>{{$trademark->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="header d-md-flex align-items-md-center justify-content-md-between">
                        <div class="result d-flex align-items-center">
                            <p class="result-number mb-0">{{$products->total()}}</p>
                            <h4 class="m-0">نتائج البحث لـ <span>"{{request('search')}}"</span></h4>
                        </div>
                        <div class="filter d-flex aling-items-center">
                            <p class="mb-0">ترتيب حسب </p>
                            <div class="page-filters-2">
                                <div class="inputs-btn">
                                    <div class="form-group">
                                        <select class="niceselect" type="text" id="select-908" onchange="filterPrice()">
                                            <option value="null">--</option>
                                            <option value="low_price"@if(request('order')=='asc') selected @endif> الأدنى سعر للأعلى  </option>
                                            <option value="high_price"@if(request('order')=='desc') selected @endif>الأعلى سعر للأدنى  </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-product vertical">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 match-height mt-5">
                            @foreach($products as $product)
                                <x-product :product="$product"></x-product>
                            @endforeach
                        </div>
                        {{$products->appends(request()->query())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // show category at the right side of the page
        // console.log(new URLSearchParams(window.location.search).get('category_id'));
        //     //get the value for filter (categories)(right) based on url
            search_url  = window.location.search;
            search_array = search_url.split('&');
            $('#searchFilter').html((search_array.length-1));


        //make select (onchange) for high price and low price (select box)
        function filterPrice(){
            $select = $('#select-908').find(":selected").val() === "low_price" ? "asc" : "desc";
            const params = new URLSearchParams(window.location.search) //ttps://subolays.test/search/products?search=test
            params.set('order', $select)
            window.location.search = params.toString(); //ttps://subolays.test/search/products?search=test&order=desc
        }

    </script>
@endsection
