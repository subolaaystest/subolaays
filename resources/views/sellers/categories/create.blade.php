@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.AddCategory'))

@section('content')


    <div class="main-content">

        <form id="storeSellerProduct" method="post" action="{{ route('storeSellerMainCategory') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
        {{ csrf_field() }}

            <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
            <div class="page-content-inner">
                <div class="add-product">
                    <div class="add-product-title">
                        <h2> {{ __('translate.CategoriesPictures') }} <a href="">
                        <p> {{ __('translate.OrChooseFromOurIcons') }} </p></a></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="image-upload">
                                <div class="check-image">
                                    <label for="radio-541"> {{ __('translate.mainImage') }} </label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radio-541" type="radio" name="image-check"/>
                                        <label class="form-check-label" for="radio-541"></label>
                                    </div>
                                </div>
                                <div class="input-image">
                                    <input name="image" accept="image/*" type="file"/><img class="preview-image" src="" alt=""/>
                                    <div class="icon">
                                        <svg>
                                            <use href="{{ url('frontend/images/icons/icons.svg#gallery') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-424">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="arabic-tab-665" data-bs-toggle="tab" data-bs-target="#arabic-details-665" type="button" role="tab" aria-controls="arabic-details-665" aria-selected="true">العربية</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="english-tab-665" data-bs-toggle="tab" data-bs-target="#english-details-665" type="button" role="tab" aria-controls="english-details-665" aria-selected="false">English</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="tabs-424Content">
                        <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-665" aria-labelledby="arabic-tab-665">
                            <div class="form-group">
                                <label for="input-869"> {{ __('translate.name') }} </label>
                                <input class="form-control" type="text" id="input-869" name="name_ar" placeholder="أكتب الإسم"/>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="english-details-665" aria-labelledby="english-tab-665">
                            <div class="form-group">
                                <label for="input-424">الإسم</label>
                                <input class="form-control" type="text" id="input-424" name="name_en" placeholder="أكتب الإسم"/>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="input-854">القسم الرئيسي</label>
                        <select class="niceselect" type="text" id="select-854">
                            <option value="إختر">إختر  </option>
                            <option value="إختر">إختر  </option>
                            <option value="إختر">إختر  </option>
                            <option value="إختر">إختر  </option>
                        </select>
                    </div> --}}
                </div>
                <div class="add-product-footer">
                    <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit"><span> {{ __('translate.add') }} </span></button>

                    <a href="{{ route('getSellerCategories') }}">
                        <button class="btnn-red btn btnn hvr-shadow" type="button"><span> {{ __('translate.cancel') }} </span></button>
                    </a>
                </div>
            </div>
        </form>
    </div>

@endsection



@section('script')
@endsection
