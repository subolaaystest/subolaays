@extends('website.layouts.app')
@section('content')
    <div id="main">
      <div class="main-content pb-5">
        <div class="header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home.index')}}">الرئيسية</a></li>
              <li class="breadcrumb-item">الصفقات</li>
            </ol>
          </nav>
        </div>
        <div class="row row-cols-md-2 row-cols-lg-4 row-cols-xl-4 match-height mt-5">
        @foreach($deals as $deal)
          <div class="col"> <a class="cus-bargains hvr-float-shadow" href="{{route('products.show',$deal->products[0]?->id)}}">
              <div class="top-box"> <span>ﻋﻨﻮان اﻟﻘﺼﺔ  </span><span>{{\Carbon\Carbon::createFromTimeStamp(strtotime($deal->created_at))->diffForHumans()}}</span></div>
              <div class="total">{{$deal->products[0]->name}}</div>
              <div class="image"> <img src="{{$deal->products[0]->main_image}}" alt=""/></div>
              <div class="price-row">
                <div class="price"> <span>  ﺳﻌﺮ اﻟﻤﻨﺘﺞ</span>
                  <h3>{{$deal->products[0]->price_after_discount}} {{getSymbolCurrency()}}</h3>
                </div>
                <div class="discount">
                  <h4>% {{$deal->products[0]->discount_percentage}} ﺧﺼﻢ</h4><span>({{$deal->products[0]->price}} {{getSymbolCurrency()}})</span>
                </div>
              </div>
              <div class="buttons">
                @if(($deal->mainCategory?->count())>0)
                <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>{{$deal->mainCategory->name}} </span>
                </button>
                @endif
                @if(($deal->products[0]->sub_category->count())> 0)
                <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>{{$deal->products[0]->sub_category?->name}}</span>
                </button>
                @endif
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress-text">   ﻋﺪد اﻟﻤﺸﺎﻫﺪات : 500 ﻣﺸﺎﻫﺪة
              </div></a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection
