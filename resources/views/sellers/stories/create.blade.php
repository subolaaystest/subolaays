@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.AddNewStory'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"> </i></div>
        <ul class="nav nav-tabs d-none">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="step-1-details-tab" data-bs-toggle="tab" data-bs-target="#step-1-details" type="button" role="tab" aria-controls="step-1-details" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="step-2-details-tab" data-bs-toggle="tab" data-bs-target="#step-2-details" type="button" role="tab" aria-controls="step-2-details" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="step-3-details-tab" data-bs-toggle="tab" data-bs-target="#step-3-details" type="button" role="tab" aria-controls="step-3-details" aria-selected="false">Messages</button>
            </li>
        </ul>
        <div class="add-product">
            <div class="add-product-head">
                <h1> {{ __('translate.AddNewStory') }} </h1>
                <div class="custom-progress-parent step-1">
                    <div class="custom-progress-bar">
                        <div class="custom-progress-child"> </div>
                    </div>
                    <div class="custom-progress-text">
                        <h5> {{ __('translate.ProductDescription') }} </h5>
                        <h5> {{ __('translate.productSpecification') }} </h5>
                        <h5> {{ __('translate.ProductPrice') }} </h5>
                    </div>
                </div>
            </div>


            <form id="storeSellerProduct" method="post" action="{{ route('storeSellerStory') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="step-1-details" role="tabpanel" aria-labelledby="step-1-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2> {{ __('translate.storyTheme') }} </h2>
                                <p> {{ __('translate.ChooseThemeYourStory') }} </p>
                            </div>
                            <div class="row row-cols-1 mb-5 row-cols-sm-2 row-cols-md-4">
                                <div class="col">
                                    <div class="product-type story">
                                        <input type="radio" name="story-theme">
                                        <div class="image"> <img src="{{ url('frontend/images/story.png') }}" alt=""></div>
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-type story">
                                        <input type="radio" name="story-theme">
                                        <div class="image"><img src="{{ url('frontend/images/story.png') }}" alt=""></div>
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-type story">
                                        <input type="radio" name="story-theme">
                                        <div class="image"> <img src="{{ url('frontend/images/story.png') }}" alt=""></div>
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product-type story">
                                        <input type="radio" name="story-theme">
                                        <div class="image"> <img src="{{ url('frontend/images/story.png') }}" alt=""></div>
                                        <h3></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="add-product-title">
                                <h2> {{ __('translate.ProductPictures') }} </h2>
                                <p> {{ __('translate.YouCanAddPicture') }} <span class="textt-red mr-2">1080*1080</span></p>
                            </div>
                            <div class="row row-cols-1 mb-5 row-cols-sm-2 row-cols-md-4">
                                <div class="col">
                                    <div class="image-upload">
                                        <div class="input-image">
                                            <input name="images[]" accept="image/*" type="file"/><img class="preview-image" src="" alt=""/>
                                            <div class="icon">
                                                <svg>
                                                    <use href="{{ url('frontend/images/icons/icons.svg#gallery') }}"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-product-title">
                                <h2> {{ __('translate.ProductDescription') }} </h2>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-80"> {{ __('translate.MainCategory') }} </label>
                                        {{-- <label for="input-763">القسم الرئيسي</label> --}}
                                        <select class="niceselect SelectMainCategoryId" type="text" name="main_category_id" id="select-385">
                                            <option value="إختر"> إختر </option>
                                            @isset($main_categories)
                                                @foreach ($main_categories as $one)
                                                    <option value="{{ @$one->id }}"> {{ @$one->name }} </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-304"> {{ __('translate.SubCategory') }} </label>
                                        <select class="niceselect SelectSubCategoryId" type="text" name="sub_category_id" id="select-14">
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-number">
                                        <div class="form-group">
                                            <label for="input-309"> {{ __('translate.AvailableQuantity') }} </label>
                                            <div class="input-number-control">
                                                <a class="input-increment" href="#"> +</a>
                                                <input type="number" id="input-309" placeholder="0" name="quantity_available" min="0" value="0"/>
                                                <a class="input-decrement" href="#"> -</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-734">SKU</label>
                                        <input class="form-control" type="text" id="input-734" name="sku" placeholder="إكتب الإسم"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-868"> {{ __('translate.minimumQuantityForNotice') }} </label>
                                <input class="form-control" type="number" name="count_alert" min="0" id="input-868"/>
                            </div>
                            <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-28">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="arabic-tab-289" data-bs-toggle="tab" data-bs-target="#arabic-details-289" type="button" role="tab" aria-controls="arabic-details-289" aria-selected="true">العربية</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="english-tab-289" data-bs-toggle="tab" data-bs-target="#english-details-289" type="button" role="tab" aria-controls="english-details-289" aria-selected="false">English</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-28Content">
                                <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-289" aria-labelledby="arabic-tab-289">
                                    <div class="form-group">
                                        <label for="input-111">الإسم</label>
                                        <input class="form-control" type="text" id="input-111" name="name_ar" placeholder="أكتب الإسم"/>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="english-details-289" aria-labelledby="english-tab-289">
                                    <div class="form-group">
                                        <label for="input-595">الإسم</label>
                                        <input class="form-control" type="text" id="input-595" name="name_en" placeholder="أكتب الإسم"/>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-9">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="arabic-tab-740" data-bs-toggle="tab" data-bs-target="#arabic-details-740" type="button" role="tab" aria-controls="arabic-details-740" aria-selected="true">العربية</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="english-tab-740" data-bs-toggle="tab" data-bs-target="#english-details-740" type="button" role="tab" aria-controls="english-details-740" aria-selected="false">English</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-9Content">
                                <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-740" aria-labelledby="arabic-tab-740">
                                    <div class="form-group">
                                        <label for="input-826"> {{ __('translate.ProductDescription') }} </label>
                                        <textarea class="form-control" name="description_ar" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="english-details-740" aria-labelledby="english-tab-740">
                                    <div class="form-group">
                                        <label for="input-327"> {{ __('translate.ProductDescription') }} </label>
                                        <textarea class="form-control" name="description_en" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-product-footer">
                            <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="button">
                                <span>التالي </span>
                            </button>
                            <a href="{{ route('getSellerStory') }}">
                                <button class="btnn-red btn btnn hvr-shadow" type="button">
                                    <span> {{ __('translate.cancel') }} </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step-2-details" role="tabpanel" aria-labelledby="step-2-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2> {{ __('translate.productSpecification') }} </h2>
                                <p> {{ __('translate.productSpecificationNote') }} </p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 align-items-end">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-285">إختر الصفة</label>
                                        <select class="niceselect" type="text" id="select-285">
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-980">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="arabic-tab-645" data-bs-toggle="tab" data-bs-target="#arabic-details-645" type="button" role="tab" aria-controls="arabic-details-645" aria-selected="true">العربية</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="english-tab-645" data-bs-toggle="tab" data-bs-target="#english-details-645" type="button" role="tab" aria-controls="english-details-645" aria-selected="false">English</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="tabs-980Content">
                                        <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-645" aria-labelledby="arabic-tab-645">
                                            <div class="form-group">
                                                <label for="input-32">أكتب الوزن</label>
                                                <input class="form-control" type="text" id="input-32" placeholder="أكتب الإسم"/>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="english-details-645" aria-labelledby="english-tab-645">
                                            <div class="form-group">
                                                <label for="input-121">أكتب الوزن</label>
                                                <input class="form-control" type="text" id="input-121" placeholder="أكتب الإسم"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="load-more-sec">
                            <p>أضف المزيد من المواصفات</p></a>
                        </div>
                        <div class="add-product-footer">
                            <button class="btnn-orange btn btnn ml-2 go-to-step-3 hvr-shadow" type="button">
                                <span> {{ __('translate.next') }} </span>
                            </button>
                            <a href="{{ route('getSellerStory') }}">
                                <button class="btnn-red btn btnn hvr-shadow" type="button">
                                    <span> {{ __('translate.cancel') }} </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step-3-details" role="tabpanel" aria-labelledby="step-3-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2>ﺳﻌﺮ اﻟﺒﻴﻊ </h2>
                                <p>ضع سعراً مناسباً لسلعتك</p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 align-items-start">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-585"> {{ __('translate.price') }} </label>
                                        <input class="form-control productCostPrice" type="number" name="price" min="0" id="input-585"/>
                                        <div class="value-text"> {{ __('translate.riyal') }} </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-180"> {{ __('translate.discountPercentage') }} </label>
                                        <input class="form-control discountPercentage" type="number" name="discount_percentage" min="0" id="input-180"/>
                                        <div class="value-text">%</div>
                                    </div>
                                </div>
                                <div class="col"> </div>
                            </div>
                            <div class="form-group">
                                <label for="input-54"> {{ __('translate.priceAfterDiscount') }} </label>
                                <input class="form-control priceAfterDiscount" type="number" id="input-54" disabled />
                                <div class="value-text"> {{ __('translate.riyal') }} </div>
                            </div>
                        </div>
                        <div class="add-product-footer"></div>
                        <button class="btnn-orange btn btnn hvr-shadow btn-fill" data-bs-toggle="modal" type="submit" data-bs-target="#successModal">
                            <span> إضافة</span>
                        </button>
                        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="successModalLabel"> </h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="send-offer-modal">
                                            <div class="icon">
                                                <img src="{{ url('frontend/images/success-icon-big.png') }}" alt="">
                                            </div>
                                            <h2> {{ __('translate.StorySentSuccessfully') }} </h2>
                                            <p> {{ __('translate.ItWillBeReviewedForApproval') }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btnn-red btn btnn hvr-shadow" type="button">
                            <span> {{ __('translate.cancel') }}  </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


@section('script')

<script>
    $(document).on('change','.productCostPrice',function(e){
        var price = $(this).val();
        var discount = $('.discountPercentage').val();
        var discountAmount = (price * discount) / 100;
        if(discount > 0 && price > 0){
            $('.priceAfterDiscount').val(price - discountAmount);
        }else{
            $('.priceAfterDiscount').val(price);
        }
    });


    $(document).on('change','.discountPercentage',function(e){
        var discount = $(this).val();
        var price = $('.productCostPrice').val();
        var discountAmount = (price * discount) / 100;
        if(discount > 0 && price > 0){
            $('.priceAfterDiscount').val(price - discountAmount);
        }else{
            $('.priceAfterDiscount').val(price);
        }
    });
</script>

@endsection
