@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.createNewProduct'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"></i></div>
        <ul class="nav nav-tabs d-none">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="step-1-details-tab" data-bs-toggle="tab" data-bs-target="#step-1-details" type="button" role="tab" aria-controls="step-1-details" aria-selected="true">
                    Home
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="step-2-details-tab" data-bs-toggle="tab" data-bs-target="#step-2-details" type="button" role="tab" aria-controls="step-2-details" aria-selected="false">
                    Profile
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="step-3-details-tab" data-bs-toggle="tab" data-bs-target="#step-3-details" type="button" role="tab" aria-controls="step-3-details" aria-selected="false">
                    Messages
                </button>
            </li>
        </ul>
        <div class="add-product">
            <div class="add-product-head">
                <h1> {{ __('translate.createNewProduct') }} </h1>
                <div class="custom-progress-parent step-1">
                    <div class="custom-progress-bar">
                        <div class="custom-progress-child"> </div>
                    </div>
                    <div class="custom-progress-text">
                        <h5> {{ __('translate.ProductDescription') }} </h5>
                        <h5> {{ __('translate.productSpecification') }}  </h5>
                        <h5> {{ __('translate.ProductPrice') }}  </h5>
                    </div>
                </div>
            </div>

            <form id="storeSellerProduct" method="post" action="{{ route('storeSellerProduct') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="step-1-details" role="tabpanel" aria-labelledby="step-1-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2> {{ __('translate.ProductPictures') }} </h2>
                                <p> {{ __('translate.MaximumFourHhotosProduct') }} <span class="textt-red mr-2">{{ __('translate.size') }} 1080*1080</span></p>
                            </div>
                            <div class="row row-cols-1 mb-5 row-cols-sm-2 row-cols-md-4">
                                <div class="col">
                                    <div class="image-upload">
                                        <div class="check-image">
                                            <label for="radio-193"> {{ __('translate.mainImage') }} </label>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio-193" type="radio" name="mian_images[]"/>
                                                <label class="form-check-label" for="radio-193"></label>
                                            </div>
                                        </div>
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
                                <div class="col">
                                    <div class="image-upload">
                                        <div class="check-image">
                                            <label for="radio-931"> {{ __('translate.mainImage') }} </label>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio-931" type="radio" name="mian_images[]" />
                                                <label class="form-check-label" for="radio-931"></label>
                                            </div>
                                        </div>
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
                                <div class="col">
                                    <div class="image-upload">
                                        <div class="check-image">
                                            <label for="radio-422"> {{ __('translate.mainImage') }} </label>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio-422" type="radio" name="mian_images[]" />
                                                <label class="form-check-label" for="radio-422"></label>
                                            </div>
                                        </div>
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
                                <div class="col">
                                    <div class="image-upload">
                                        <div class="check-image">
                                            <label for="radio-352"> {{ __('translate.mainImage') }} </label>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radio-352" type="radio" name="mian_images[]" />
                                                <label class="form-check-label" for="radio-352"></label>
                                            </div>
                                        </div>
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
                                        <label for="input-763"> {{ __('translate.MainCategory') }} </label>
                                        <select class="niceselect SelectMainCategoryId" type="text" name="main_category_id" id="select-385">
                                            <option value=""> {{ __('translate.Choose') }} </option>
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
                                        <label for="input-292"> {{ __('translate.SubCategory') }} </label>
                                        <select class="niceselect SelectSubCategoryId" type="text" name="sub_category_id" id="select-14">
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-number">
                                        <div class="form-group">
                                            <label for="input-715"> {{ __('translate.AvailableQuantity') }} </label>
                                            <div class="input-number-control">
                                                <a class="input-increment" href="#"> +</a>
                                                <input type="number" id="input-715" name="quantity_available" min="0" placeholder="2" value="0"/>
                                                <a class="input-decrement" href="#"> -</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-985">SKU</label>
                                        <input class="form-control" type="text" id="input-985" name="sku"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-822"> {{ __('translate.minimumQuantityForNotice') }} </label>
                                <input class="form-control" type="number" name="count_alert" min="0" id="input-822"/>
                            </div>
                            <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-832">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="arabic-tab-21" data-bs-toggle="tab" data-bs-target="#arabic-details-21" type="button" role="tab" aria-controls="arabic-details-21" aria-selected="true">
                                        العربية
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="english-tab-21" data-bs-toggle="tab" data-bs-target="#english-details-21" type="button" role="tab" aria-controls="english-details-21" aria-selected="false">
                                        English
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-832Content">
                                <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-21" aria-labelledby="arabic-tab-21">
                                    <div class="form-group">
                                        <label for="input-644"> {{ __('translate.name') }} </label>
                                        <input class="form-control" type="text" name="name_ar" id="input-644" placeholder="أكتب الإسم"/>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="english-details-21" aria-labelledby="english-tab-21">
                                    <div class="form-group">
                                        <label for="input-320"> {{ __('translate.name') }} </label>
                                        <input class="form-control" type="text" name="name_en" id="input-320" placeholder="أكتب الإسم"/>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-283">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="arabic-tab-112" data-bs-toggle="tab" data-bs-target="#arabic-details-112" type="button" role="tab" aria-controls="arabic-details-112" aria-selected="true">
                                        العربية
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="english-tab-112" data-bs-toggle="tab" data-bs-target="#english-details-112" type="button" role="tab" aria-controls="english-details-112" aria-selected="false">
                                        English
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-283Content">
                                <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-112" aria-labelledby="arabic-tab-112">
                                    <div class="form-group">
                                        <label for="input-335"> {{ __('translate.ProductDescription') }} </label>
                                        <textarea class="form-control" rows="5" name="description_ar"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="english-details-112" aria-labelledby="english-tab-112">
                                    <div class="form-group">
                                        <label for="input-912"> {{ __('translate.ProductDescription') }} </label>
                                        <textarea class="form-control" rows="5" name="description_en"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-product-footer">
                            <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="button">
                                <span> {{ __('translate.next') }} </span>
                            </button>
                            <a href="{{ route('getSellerProducts') }}">
                                <button class="btnn-red btn btnn hvr-shadow" type="button"><span> {{ __('translate.cancel') }} </span></button>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step-2-details" role="tabpanel" aria-labelledby="step-2-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2> {{ __('translate.productSpecification') }}  </h2>
                                <p> {{ __('translate.productSpecificationNote') }} <p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 align-items-end">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-923">إختر الصفة</label>
                                        <select class="niceselect" type="text" id="select-923">
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                            <option value="إختر">إختر  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-502">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="arabic-tab-206" data-bs-toggle="tab" data-bs-target="#arabic-details-206" type="button" role="tab" aria-controls="arabic-details-206" aria-selected="true">العربية</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="english-tab-206" data-bs-toggle="tab" data-bs-target="#english-details-206" type="button" role="tab" aria-controls="english-details-206" aria-selected="false">English</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="tabs-502Content">
                                        <div class="tab-pane fade show active" role="tabpanel" id="arabic-details-206" aria-labelledby="arabic-tab-206">
                                            <div class="form-group">
                                                <label for="input-873">أكتب الوزن</label>
                                                <input class="form-control" type="text" id="input-873" placeholder="أكتب الإسم"/>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="english-details-206" aria-labelledby="english-tab-206">
                                            <div class="form-group">
                                                <label for="input-792">أكتب الوزن</label>
                                                <input class="form-control" type="text" id="input-792" placeholder="أكتب الإسم"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-product-footer">
                            <button class="btnn-orange btn btnn ml-2 go-to-step-3 hvr-shadow" type="button">
                                <span> {{ __('translate.next') }} </span>
                            </button>
                            <a href="{{ route('getSellerProducts') }}">
                                <button class="btnn-red btn btnn hvr-shadow" type="button">
                                    <span> {{ __('translate.cancel') }} </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="step-3-details" role="tabpanel" aria-labelledby="step-3-details-tab">
                        <div class="add-product-body">
                            <div class="add-product-title">
                                <h2>  {{ __('translate.ProductPrice') }} </h2>
                                <p> {{ __('translate.PutAppropriatePriceForGoods') }} </p>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 align-items-start">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-222"> {{ __('translate.CostPrice') }} </label>
                                        <input class="form-control productCostPrice" type="number" name="price" min="0" id="input-222"/>
                                        <div class="value-text"> {{ __('translate.riyal') }} </div>
                                    </div>
                                    <div class="d-flex justify-content-between" style="margin-top:-10px">
                                        <div class="form-group">
                                            <label for="flexCheck"> {{ __('translate.IsThePriceTaxable') }} </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input size-sm" id="flexCheck" type="checkbox" name="taxable" value="yes">
                                            <label class="form-check-label" for="flexCheck"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="input-18"> {{ __('translate.discountPercentage') }} </label>
                                        <input class="form-control discountPercentage" type="number" name="discount_percentage" min="0" id="input-18"/>
                                        <div class="value-text">%</div>
                                    </div>
                                </div>
                                <div class="col"> </div>
                            </div>
                            <div class="form-group">
                                <label for="input-172"> {{ __('translate.priceAfterDiscount') }} </label>
                                <input class="form-control priceAfterDiscount" type="number" id="input-172" disabled />
                                <input class="form-control priceAfterDiscount" type="hidden" id="input-172" name="offer_price" />
                                <div class="value-text"> {{ __('translate.riyal') }} </div>
                            </div>
                            <div class="form-group">
                                <label for="input-813"> {{ __('translate.MinimumOrder') }} </label>
                                <input class="form-control" type="number" name="minimum_order" min="0" id="input-813"/>
                                <div class="value-text"> {{ __('translate.riyal') }} </div>
                            </div>
                            <div class="d-flex justify-content-between" style="margin-top:-10px">
                                <div class="form-group">
                                    <label for="switch5"> {{ __('translate.smartPrice') }} </label>
                                </div>
                                <div class="form-check form-switch form-switch-md">
                                    <input class="form-check-input" type="checkbox" id="switch5" role="switch">
                                    <label class="form-check-label" for="switch5"></label>
                                </div>
                            </div>
                            <div class="add-more-sec">
                                <div class="row input_fields_wrap">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""> {{ __('translate.quantity') }} </label>
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <div class="d-flex align-items-center mb-2">
                                                    <label style="min-width:70px"> {{ __('translate.from') }} </label>
                                                    <input class="form-control" type="number" min="0" name="smartFromQuantity[]">
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <label style="min-width:70px"> {{ __('translate.to') }} </label>
                                                    <input class="form-control" type="number" min="0" name="smartToQuantity[]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="input-983"> {{ __('translate.price') }} </label>
                                            <input class="form-control" type="number" id="input-983" min="0" name="smartPrice[]" />
                                            <div class="value-text"> {{ __('translate.riyal') }} </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btnn-orange btn btnn add_field_button hvr-shadow" type="button">
                                            <span> {{ __('translate.AddAnotherItem') }} </span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="add-product-title">
                                    <h2> {{ __('translate.ProductShow') }} </h2>
                                    <p> {{ __('translate.displayProductZones') }} </p>
                                </div>
                                <div class="form-check form-switch form-switch-md">
                                    <input class="form-check-input" type="checkbox" id="switch6" role="switch">
                                    <label class="form-check-label" for="switch6"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-683"> {{ __('translate.ChooseZoneFromAvailableZones') }} </label>
                                <select class="niceselect" type="text" id="select-683">
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                    <option value="إختر">إختر  </option>
                                </select>
                            </div>
                        </div>
                        <div class="add-product-footer">
                            <button class="btnn-orange btn btnn ml-2 hvr-shadow" type="submit"><span> {{ __('translate.add') }} </span></button>
                            <a href="{{ route('getSellerProducts') }}">
                                <button class="btnn-red btn btnn hvr-shadow" type="button"><span> {{ __('translate.cancel') }} </span></button>
                            </a>
                        </div>
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
