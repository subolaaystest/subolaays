@extends('website.layouts.app')
@section('styles')
    <style>
        .wrap {
            max-width: 980px;
            margin: 10px auto 0;
        }

        #steps {
            margin: 80px 0 0 0
        }

        .commands {
            overflow: hidden;
            margin-top: 30px;
        }

        /*.prev {float:left}*/
        /*.next, .submit {float:right}*/
        .error {
            color: #b33;
        }

        #progress {
            position: relative;
            height: 5px;
            background-color: #eee;
            margin-bottom: 20px;
        }

        #progress-complete {
            border: 0;
            position: absolute;
            height: 5px;
            min-width: 10px;
            background-color: #f8ae0e;
            transition: width .2s ease-in-out;
        }

    </style>
@endsection
@section('content')
    <div id="progress">
        <div id="progress-complete" style="width: 0%;"></div>
    </div>
    <form enctype="multipart/form-data" id="createDeal">
        @csrf
        <div class="landing-layout">
            <div id="main">
                <div class="main-content pb-5">
                    <div class="header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                <li class="breadcrumb-item">اضافة صفقة</li>
                            </ol>
                        </nav>
                    </div>
                    <ul class="nav nav-tabs d-none mt-5">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="step-1-details-tab" data-bs-toggle="tab"
                                    data-bs-target="#step-1-details" type="button" role="tab"
                                    aria-controls="step-1-details" aria-selected="true">Home
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step-2-details-tab" data-bs-toggle="tab"
                                    data-bs-target="#step-2-details" type="button" role="tab"
                                    aria-controls="step-2-details" aria-selected="false">Profile
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="step-3-details-tab" data-bs-toggle="tab"
                                    data-bs-target="#step-3-details" type="button" role="tab"
                                    aria-controls="step-3-details" aria-selected="false">Messages
                            </button>
                        </li>
                    </ul>
                    <div class="add-product cart-content">
                        <div class="tab-content">
                            <fieldset class=" show active" id="step-1-details" role="tabpanel"
                                      aria-labelledby="step-1-details-tab">
                                <div class="add-product-body">
                                    <div class="add-product-title">
                                        <h2>صور المنتج </h2>
                                        <p>يمكنك إضافة صور بحد أقصى 4 صور للمنتج <span class="textt-red mr-2">مقاس 1080*1080</span>
                                        </p>
                                    </div>
                                    <div class="row row-cols-1 mb-5 row-cols-sm-2 row-cols-md-4">
                                        @foreach($product_info['photos'] as $key => $photo)
                                            {{--                                            @dd($key,$photo)--}}
                                            <div class="col">
                                                <div
                                                    class="image-upload @if($photo['image'] ?? false) uploadded @endif">
                                                    <div class="input-image">
                                                        <input type="file" name="image[{{$photo['id'] ?? null}}]"
                                                               @if($key == 0 && !isset($photo['image']) ) required @endif/>
                                                        <img class="preview-image" src="{{$photo['image'] ?? ''}}"
                                                             alt=""/>
                                                        <div class="icon">
                                                            <svg>
                                                                <use
                                                                    href="{{ asset('website_assets/assets/images/icons/icons.svg#gallery')}}"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="add-product-title">
                                        <h2>وصف المنتج</h2>
                                    </div>
                                    <div class="custom-js-tabs">
                                        <ul class="nav nav-tabs form-lang-tabs" role="tablist" id="tabs-613">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" data-tab="arabic-tab" type="button"
                                                        role="tab">العربية
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-tab="english-tab" type="button"
                                                        role="tab">English
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="tabs-613Content">
                                            <div class="tab-pane fade show active arabic-tab" role="tabpanel">
                                                <div class="form-group">
                                                    <label for="input-161">الإسم</label>
                                                    <input class="form-control" type="text" id="name_ar"
                                                           value="{{$product_info['name_ar'] ?? ''}}"
                                                           placeholder="أكتب الإسم" name="name_ar" required/>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade english-tab" role="tabpanel">
                                                <div class="form-group">
                                                    <label for="input-221">الإسم</label>
                                                    <input class="form-control" type="text" id="name_en"
                                                           value="{{$product_info['name_en'] ?? ''}}"
                                                           placeholder="أكتب الإسم" name="name_en" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="input-632">القسم الرئيسي</label>
                                                <select class="nice-select niceselect" type="text" id="select-632"
                                                        name="main_category_id" required>
                                                    @foreach($main_categories as $main_category)
                                                        <option
                                                            @if(isset($product_info['main_category_id']) && $product_info['main_category_id'] == $main_category->id) selected
                                                            @endif
                                                            value="{{$main_category->id}}">{{$main_category->name}}

                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="input-294">القسم الفرعي</label>
                                                <select class="nice-select niceselect" type="text" id="select-294"
                                                        name="sub_category_id" required>
                                                    @foreach($sub_categories as $sub_category)
                                                        <option
                                                            @if(isset($product_info['sub_category_id']) && $product_info['sub_category_id'] == $sub_category->id) selected
                                                            @endif
                                                            value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="input-355">حجم المنتج</label>
                                                <input class="form-control" type="number" id="input-355" name="size"
                                                       value="{{$product_info['size'] ?? 0}}"
                                                       required/>
                                                <div class="value-text">كجم</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="TradeMark"> العلامة التجارية</label>
                                                <select class="nice-select niceselect" type="text" id="select-294"
                                                        name="trademark_id" required>
                                                    @foreach($trademarks as $trademark)
                                                        <option
                                                            @if(isset($product_info['trademark_id']) && $product_info['trademark_id'] == $trademark->id) selected
                                                            @endif
                                                            value="{{$trademark->id}}">{{$trademark->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-number">
                                                <div class="form-group">
                                                    <label for="input-518">الكمية المتاحة</label>
                                                    <div class="input-number-control"><a class="input-increment"
                                                                                         href="#"> +</a>
                                                        <input type="text" id="input-518" placeholder="0"
                                                               value="{{$product_info['quantity_available'] ?? 0}}"
                                                               name="quantity_available"/><a class="input-decrement"
                                                                                             href="#"> -</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="input-962">التكلفة المتوقعة للكمية المطلوبة</label>
                                                <input class="form-control" type="text" id="input-962"
                                                       value="{{$product_info['price'] ?? 0}}"
                                                       name="price"/>
                                                <div class="value-text">ريال</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-product-footer">
                                    <button class="btnn-orange btn btnn next ml-2 go-to-step-2 hvr-shadow"
                                            type="button"><span> {{ __('translate.next') }}  </span>
                                    </button>
                                    <button class="btnn-red btn btnn prev hvr-shadow" type="button">
                                        <span> {{ __('translate.cancel') }}  </span>
                                    </button>
                                </div>
                            </fieldset>

                            <fieldset class="" id="step-2-details" role="tabpanel" aria-labelledby="step-2-details-tab">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="products mt-3">
                                            {{-- for here --}}
                                            @foreach($deal->products ?? [] as $product)
                                                <div id="product-{{$product->id}}"
                                                     class="product add-deal d-flex justify-content-between mb-3">
                                                    <div class="img"><img
                                                            src="{{$product->main_image}}"
                                                            alt=""/></div>
                                                    <div>
                                                        <p class="name m-0">{{$product->main_category->name ?? ''}}</p>
                                                        <h4>{{$product->name}}</h4><span class="number">حجم المنتج {{$product->size}} كم</span>
                                                        <p>نستلة - جهينة</p>
                                                    </div>
                                                    <div>
                                                        <p class="m-0">السعر التقريبى</p>
                                                        <p class="price m-0"> {{$product->price}} دينار</p>
                                                    </div>
                                                    <p class="amount m-0">الكمية {{$product->quantity_available}}</p>
                                                    <div>
                                                        <svg class="me-3 delete-product"
                                                             data-id="{{$product->id}}"
                                                             data-route="{{route('deals.delete.product',['product' =>$product->id ])}}">
                                                            <use
                                                                href="{{asset('website_assets/assets/images/icons/icons.svg#delete')}}"></use>
                                                        </svg>
                                                        <svg class="edit-product"
                                                             data-deal-id="{{$deal->id ?? ''}}"
                                                             data-id="{{$product->id}}"
                                                             data-route="{{route('deals.create',['id'=>( $deal->id ?? '') ,'product' =>$product->id ])}}"
                                                        >
                                                            <use
                                                                href="{{asset('website_assets/assets/images/icons/icons.svg#edit')}}"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="btn-add-another-product" class="col-lg-9"><a class="load-more-sec mb-5">
                                            <p>اضافة منتج آخر</p></a></div>
                                </div>
                                <div class="add-product-footer">
                                    <button class="btnn-orange btn btnn next ml-2 go-to-step-3 hvr-shadow"
                                            type="button"><span>التالي </span>
                                    </button>
                                    <button class="btnn-red btn btnn prev hvr-shadow" type="button"><span>إلغاء </span>
                                    </button>
                                </div>
                            </fieldset>
                            <fieldset class="" id="step-3-details" role="tabpanel" aria-labelledby="step-3-details-tab">

                                <div class="add-product-body">
                                    @if($buyer_addresses->isNotEmpty())
                                    <h4 class="my-4">عنوان التوصيل</h4>
                                    <div class="row w-100 m-0">

                                       @foreach($buyer_addresses as $address)
                                            <div class="col-lg-4">
                                                <div class="cover-point-sec">
                                                    <div class="form-check form-switch form-switch-md">
                                                        <input class="form-check-input" name="buyer_address_id" value="{{$address->id}}" type="checkbox" id="switch8"
                                                               role="switch"/>
                                                        <label class="form-check-label" for="switch8"></label><img
                                                            class="bg-image-checked"
                                                            src="{{asset('website_assets')}}/assets/images/landing/active-cover-points.png"
                                                            alt=""/><img class="bg-image"
                                                                         src="{{asset('website_assets')}}/assets/images/landing/cover-points-box.png"
                                                                         alt=""/>
                                                        <div class="text">
                                                            <h2>{{$address->address}}</h2>
                                                            <div class="d-flex justify-content-start align-items-start">
                                                                <div class="shap">...</div>
                                                                <div>
                                                                    <h3>التوصيل الى عنوانى الحالى</h3>
                                                                    <h4>{{$address->place_description}} </h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                        {{--                                     <div class="col-lg-2">--}}
                                        {{--                                         <a class="load-more-sec h-100 m-0">--}}
                                        {{--                                             <p>اضافة عنوان جديد--}}
                                        {{--                                                <div class="day-time mt-5"> </div>--}}
                                        {{--                                             </p>--}}
                                        {{--                                         </a>--}}
                                        {{--                                     </div>--}}
                                    </div>
                                    @endif
                                    <div class="row w-100 m-0">
                                        <div class="col-md-8">
                                            <div class="day-time mt-5 mb-3">
                                                <h4 class="mb-4">يوم ووقت التوصيل</h4>
                                                <div class="row d-flex justify-content-between align-items-start">
                                                 <div class="row form-group">
                                                     <button id="delivery_date" type="button" class="btn btnn hvr-shadow"
                                                             data-bs-toggle="modal"
                                                             data-bs-target="#dayModal">
                                                         <svg>
                                                             <use
                                                                 href="{{asset('website_assets/assets/images/icons/icons.svg#calender')}}"></use>
                                                         </svg>
                                                         <span>أختر يوم التوصيل</span>
                                                         <div class="arrow">
                                                             <svg>
                                                                 <use
                                                                     href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-3')}}"></use>
                                                             </svg>
                                                         </div>
                                                     </button>
                                                 </div>
                                                    <div class="row form-group">
                                                    <button id="delivery_time" type="button" class="btn btnn hvr-shadow"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#timeModal">
                                                        <svg>
                                                            <use
                                                                href="{{asset('website_assets/assets/images/icons/icons.svg#clock')}}"></use>
                                                        </svg>
                                                        <span>أختر وقت التوصيل</span>
                                                        <div class="arrow">
                                                            <svg>
                                                                <use
                                                                    href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-3')}}"></use>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="input-number">
                                                <div class="form-group">
                                                    <label for="input-899">مدة استقبال العروض لهذه الصفقة</label>
                                                    <div class="input-number-control"><a class="input-increment"
                                                                                         href="#"> +</a>
                                                        <input type="text" name="duration_receiving_offers"
                                                               id="duration_receiving_offers" placeholder="0"
                                                               value="0"/><a
                                                            class="input-decrement" href="#"> -</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-920">ملاحظاتك </label>
                                                <textarea id="notes" name="notes" class="form-control"
                                                          rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="add-product-footer">
                                    <button id="btn-finish-add-deal" class="btnn-orange btn btnn next ml-2 hvr-shadow"
                                            type="button"><span>اضافة الصفقة </span>
                                    </button>
                                    <button class="btn btnn btnn-red prev hvr-shadow" type="button"><span>إلغاء </span>
                                    </button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    @include('website.deals.modals')
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    {{--    jquery.formtowizard.js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="{{asset('website_assets/assets/js/jquery.formtowizard.js')}}"></script>
    <script>

        var step = 0;

        $('#btn-finish-add-deal').on('click', function (e) {
            var formData = new FormData();

            formData.append('id', "{{$deal->id ?? null }}");
            formData.append('step', 2);
            formData.append('delivery_date', $('input[name="delivery_date"]:checked').val());
            formData.append('delivery_time', $('input[name="delivery_time"]:checked').val() ?? null);
            formData.append('buyer_address_id', $('input[name="buyer_address_id"]:checked').val() ?? null);
            formData.append('duration_receiving_offers', $('#duration_receiving_offers').val());
            formData.append('notes', $('#notes').val());
            formData.append('_token', "{{ csrf_token() }}");

            $.ajax({
                url: "{{route('deals.store')}}",
                type: 'POST',
                data: formData,
                processData: false,  // Tell jQuery not to process the data
                contentType: false,  // Tell jQuery not to set the content type
                success: function (res) {
                    toastr.success(res.message)
                    setTimeout(function () {
                        window.location.href = res.route
                    }, 1000);

                },
                error: function (e) {
                    if (e.status === 422) {
                        window.showFormErrors(e , true);
                    }
                    if (e.status === 401) {
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        });

        function stepCreateDeal() {
            step = 0
            $(`#step0`).attr('style', 'display: block;');
            $(`#step1`).attr('style', 'display: none;');
            $('#progress-complete').width('' + (0 / 3 * 100) + '%');
        }

        function stepProducts() {
            step = 1
            $(`#step0`).attr('style', 'display: none;');
            $(`#step1`).attr('style', 'display: block;');
            $('#progress-complete').width('' + (1 / 3 * 100) + '%');
        }

        window.addEventListener('DOMContentLoaded', (event) => {
            if ("{{$deal->id ?? false}}") {
                stepProducts()
            }
            if ("{{$deal->id ?? false}}" && "{{$product_info['id'] ?? false}}") {
                stepCreateDeal()
            }
        });

        $('#btn-add-another-product').on('click', function (e) {
            e.preventDefault();
            stepCreateDeal()
        });

        $('.edit-product').on('click', function (e) {
            e.preventDefault();
            window.location.href = $(this).attr("data-route")
        });

        $('.delete-product').on('click', function (e) {
            e.preventDefault();
            const product_id = $(this).attr("data-id");
            const route = $(this).attr("data-route");
            $.ajax({
                type: "DELETE",
                url: route,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    toastr.success(response.message)
                    $('#product-' + product_id).remove()

                },
                error: function (e) {
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        });

        function newDeal() {

            var formData = new FormData($("#createDeal")[0]);
            formData.append('id', "{{$deal->id ?? null }}");
            formData.append('product_id', "{{$product_info['id'] ?? null }}");
            formData.append('step', 0);

            $.ajax({
                url: "{{route('deals.store')}}",
                type: 'POST',
                data: formData,
                processData: false,  // Tell jQuery not to process the data
                contentType: false,  // Tell jQuery not to set the content type
                success: function (res) {
                    window.location.href = res.route
                },
                error: function (e) {
                    if (e.status === 401) {
                        window.location.href =@json(route('login'));
                    }
                    if (e.status === 422) {
                        window.showFormErrors(e);
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        }


        $(function () {


            const $createDeal = $('#createDeal');

            $createDeal.validate({errorElement: 'em'});

            $createDeal.formToWizard({
                submitButton: 'Create Deal',
                nextBtnClass: 'btnn-orange btn btnn next ml-2 hvr-shadow d-none btn-wizard',
                // nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btnn-red btn btnn prev hvr-shadow d-none btn-wizard',
                // prevBtnClass: 'btnn btnn-red prev',
                nextBtnName: 'التالى',
                prevBtnName: 'السابق',
                buttonTag: 'button',
                validateBeforeNext: function (form, step) {

                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each(function (index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });

                    if (stepIsValid == true && step.selector == '#step0') {
                        newDeal()
                        stepIsValid = false
                    }

                    return stepIsValid;
                },
                progress: function (i, count) {
                    step = i
                    $('#progress-complete').width('' + (i / count * 100) + '%');
                }
            });

            // on click on next button so will click on hidden next
            $('.next:not(.btn-wizard)').on('click', function () {
                // $('.next.d-none').click();

                  $(`#step${step}Next`).click();

            });
            $('.prev').on('click', function () {
                // console.log('click back  ')
                // $('.prev.d-none').click();
            });
        });

        function showFormErrors(err, isId = false) {
            $('.error').remove();
            if (err.responseJSON.hasOwnProperty('errors')) {
                $.each(err.responseJSON.errors, function (i, error) {
                    if (isId) {
                        var el = $(document).find('[id="' + i + '"]');
                    } else {
                        var el = $(document).find('[name="' + i + '"]');
                    }
                    el.parents('.form-group').append($('<span class="error">' + error[0] + '</span>'));
                    toastr.error(error[0])
                });
            }
        }
    </script>
@endsection
