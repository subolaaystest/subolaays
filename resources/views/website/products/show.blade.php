@extends('website.layouts.app')
@section('content')
    <div class="main-content pb-5">
        <div class="header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$product->main_category->name}}</a></li>
                    <li class="breadcrumb-item">{{$product->sub_category?->name}}</li>
                </ol>
            </nav>
        </div>
        <div class="product-details mt-5">
            <div class="row w-100 m-0">
                <div class="col-md-6 px-5">
                    <div class="images-side">
                        <div class="fotorama" data-loop="true" data-allowfullscreen="true" data-autoplay="true"
                             data-nav="thumbs" data-thumbwidth="200" data-thumbheight="200" data-thumbmargin="20"
                             data-thumbborderwidth="1">
                            @foreach($product->photos as $photo)
                                <img src="{{ $photo->image }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-side">
                        <div class="details-header d-flex justify-content-between mb-3">
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="mb-0">{{$product->main_category?->name}} </p>
                                <p class="mb-0">{{$product->sub_category?->name}}</p>
                            </div>
                            <div class="icon d-flex justify-content-center align-items-center">
                                <svg>
                                    <use
                                        href="{{asset('website_assets/assets/images/icons/icons.svg#heart-fill')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="details-content"><a href="#">{{$product->seller?->name}}</a>
                            <h2 class="my-3">{{$product->name}}</h2>
                            <p class="mb-0">{{$product->sub_title}}</p>
                            <div class="d-flex justify-content-start align-items-center mt-3">
                                <p class="price m-0" dir="rtl">{{$product->price_after_discount}}
                                    <span>{{getSymbolCurrency()}}</span>
                                    <span class="old-price">{{$product->price}}{{getSymbolCurrency()}}</span>
                                </p>
                                <p class="mb-0 discount">
                                    @if(isset($product->discount_percentage))
                                        <svg>
                                            <use
                                                href="{{asset('website_assets/assets/images/icons/icons.svg#heart')}}"></use>
                                        </svg>{{$product->discount_percentage}} % خصم
                                </p>
                                @endif
                            </div>
                            <p class="mb-0 mt-3">{{$product->description}}</p>
                            <p class="mb-0 mt-4 amount">تبقى {{$product->quantity_available}} قطع فقط</p>
                            <div class="input-margin d-flex justify-content-start align-items-center mt-3">
                                <div class="input-number">
                                    <div class="form-group">
                                        <div class="input-number-control">
                                            <a class="input-increment"
                                               data-id="{{$product->id}}"
                                               data-route="{{route('carts.add.or.remove' ,['type' => 'increment' ])}}"
                                               href=""> +</a>
                                            <input type="text" id="input-product-{{$product->id}}"  placeholder="0"
                                                   value="{{$product->getDetailsFromCart()->quantity ?? 0}}"/>
                                            <a class="input-decrement"
                                               data-id="{{$product->id}}"
                                               data-route="{{route('carts.add.or.remove' ,['type' => 'decrement' ])}}"
                                               href=""> -</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 add-cart d-flex justify-content-between align-items-center">
                                    <sapn>اضافة للسلة</sapn>
                                    <span id="cart-total" class="font-bold">{{$product->getDetailsFromCart()?->getPriceSum() ?? 0}} ريال</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($product->attributes)>0)
                <div class="add-product-title mt-5">
                    <h2>مواصفات المنتج</h2>
                </div>
                <div class="order-details">
                    <div class="order-total">
                        <ul class="m-0">
                            @foreach($product->attributes as $attribute)
                                <li>
                                    <p class="mb-0">{{$attribute->key}}</p>
                                    <p class="mb-0">{{$attribute->value}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if(count($product->optionals)>0)
                <div class="add-product-title mt-5">
                    <h2>جدول الكمية<span>كل مازادت الكمية قل السعر</span></h2>
                </div>
                <div class="amount-table">
                    <div class="row w-100 m-0">
                        @foreach($product->optionals as $optional)
                            <div class="col-6 mb-4">
                                <h5 class="fw-bold">{{$optional->price}} ريال</h5><span>{{$optional->from}}-{{$optional->to}} حبة</span>
                            </div>
                        @endforeach
                        <div class="col-12"><span>السعر الاساسى {{$product->price}} ريال</span></div>
                    </div>
                </div>
            @endif
            @if(count($same_products)>0)
                <div class="add-product-title mt-5">
                    <h2>منتجات مشابهة</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    @foreach($same_products as $product)
                        <x-product :product="$product"></x-product>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

