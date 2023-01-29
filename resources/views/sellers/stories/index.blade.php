@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.stories'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"></i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.stories') }} <span>( {{ count($products) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerStory') }}"> {{ __('translate.addStory') }} </a>
        </div>
        <div class="row row-cols-lg-4 row-cols-2">
            <div class="col">
                <div class="status-info-box">
                    <span class="orange"> {{ __('translate.currentStories') }} </span>
                    <h4> {{ @$currentStories }} {{ __('translate.story') }} </h4>
                </div>
            </div>
            <div class="col">
                <div class="status-info-box">
                    <span class="green"> {{ __('translate.finishedStories') }} </span>
                    <h4> {{ @$finishedStories }} {{ __('translate.story') }} </h4>
                </div>
            </div>
        </div>
        <div class="bargains-page">


            <form id="signUp" method="get" action="{{ route('getSellerStory') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
                <div class="page-filters-2">
                    <div class="inputs-btn">
                        <div class="form-group">
                            <label for="input-332"></label>
                            <select class="niceselect" type="text" name="orderBy" id="select-332">
                                <option value=""> {{ __('translate.Choose') }} </option>
                                <option value="latest"> {{ __('translate.latest') }} </option>
                                <option value="oldest"> {{ __('translate.oldest') }} </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-587"></label>
                            <select class="niceselect" type="text" name="main_category_id" id="select-587">
                                <option value=""> {{__('translate.category') }} </option>
                                @isset($main_categories)
                                @foreach ($main_categories as $one)
                                    <option value="{{ $one->id }}"> {{ @$one->name }} </option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <button class="btnn-orange btn btnn ml-2 go-to-step-3 btn-fill hvr-shadow" type="submit">
                            <span> {{ __('translate.next') }} </span>
                        </button>


                    </div>
                    <div class="table-search-box">
                        <input class="form-control" type="text" name="txt">
                        <div class="icon">
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#search') }}"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                </form>

                <a href="{{ route('getSellerStory') }}">
                    <button class="btnn-undefined btn btnn btnn-orange hvr-shadow">
                        <span> {{ __('translate.refresh') }} </span>
                    </button>
                </a>


            <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-3 match-height">
                @isset($products)
                @foreach ($products as $one)
                    <div class="col">
                        <div class="cus-bargains">
                            <div class="top-box">
                                <span> {{ __('translate.StoryTitle') }} </span>
                                <span> {{ @$one->created_at->diffForHumans() }} </span>
                            </div>
                            <div class="total"> {{ @$one->name }} </div>
                            <div class="image">
                                <a href="{{ route('sellerStoryDetails', $one->id) }}">
                                    <img src="{{ @$one->main_image }}" alt=""/>
                                </a>
                            </div>
                            <div class="price-row">
                                <div class="price">
                                    <span> {{ __('translate.price') }} </span>
                                    <h3>{{ @$one->active_price }} {{ __('translate.riyal') }} </h3>
                                </div>

                                @if($one->discount_percentage > 0)
                                    <div class="discount">
                                        <h4>%{{ @$one->discount_percentage }} {{ __('translate.Discount') }}  </h4>
                                        <span>({{ @$one->price }} {{ __('translate.riyal') }})</span>
                                    </div>
                                @endif
                            </div>
                            <div class="buttons">
                                <button class="btnn-orange btn btnn hvr-shadow" type="button">
                                    <span> {{ @$one->main_category->name }} </span>
                                </button>
                                {{-- <button class="btnn-orange btn btnn hvr-shadow" type="button">
                                    <span> {{ @$one->sub_category->name }} </span>
                                </button> --}}
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text">
                                {{ __('translate.ViewsCount') }} :
                                {{ @$one->views_count }} {{ __('translate.View') }}
                            </div>
                        </div>
                    </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>

@endsection
