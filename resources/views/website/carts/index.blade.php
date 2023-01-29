@extends('website.layouts.app')
@section('content')
    <div class="main-content pb-5">
        <div class="cart-content">
            <div class="row w-100 m-0">
                <div class="col-md-8">
                    <div class="header d-md-flex justify-content-md-between align-items-md-center">
                        <div class="d-md-flex justify-content-md-between align-items-md-center">
                            <span class="mx-md-3 me-3">{{$carts->count()}} منتجات </span>
                        </div>

                        @if($carts->isNotEmpty())
                            <a class="orange" id="action-delete-all" href="">حذف الكل</a>
                        @endif

                    </div>
                    <div class="products mt-3">
                        @foreach($carts as $cart)

                            <div id="product-{{$cart->id}}" class="product d-flex justify-content-between mb-3">
                                <div class="img"><img src="{{$cart->attributes->image}}" alt=""/></div>
                                <div>
                                    <h4>{{$cart->name}}</h4><span class="number">{{$cart->attributes->quantity_available}} قطعة</span>
                                </div>
                                <div>
                                    <p id="price-product-{{$cart->id}}" class="price m-0">{{$cart->getPriceSum()}}
                                        دينار</p><span class="old-price m-0">50 دينار</span>
                                </div>
                                <div class="input-number">
                                    <div class="form-group">
                                        <div class="input-number-control">
                                            <a class="input-increment"
                                               data-id="{{$cart->id}}"
                                               data-route="{{route('carts.add.or.remove' ,['type' => 'increment' ])}}"
                                               href=""> +</a>
                                            <input type="text" id="input-product-{{$cart->id}}" placeholder="0"
                                                   value="{{$cart->quantity}}"/>
                                            <a class="input-decrement"
                                               data-id="{{$cart->id}}"
                                               data-route="{{route('carts.add.or.remove' ,['type' => 'decrement' ])}}"
                                               href=""> -</a>
                                        </div>
                                    </div>
                                </div>
                                <svg data-id="{{$cart->id}}"
                                     data-route="{{route('carts.delete' ,['model' =>$cart->id ])}}"
                                     class="delete-item"
                                >
                                    <use

                                        href="{{asset('website_assets/assets/images/icons/icons.svg#delete')}}"></use>
                                </svg>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if($carts->isNotEmpty())
                    <div class="col-md-4">
                        <div class="order-details">
                            <h4 class="p-4">تفاصيل الطلب</h4>
                            <div class="coupon-note">
                                <div class="icon"><img
                                        src="{{asset('website_assets/assets/images/landing/coupon-icon.png')}}" alt="">
                                </div>
                                <h3 class="m-0">لديك كوبون خصم ؟</h3>
                                <div class="coupon-finish"><img
                                        src="{{asset('website_assets/assets/images/landing/coupon-finish.png')}}"
                                        alt=""></div>
                            </div>
                            <div class="p-4">
                                <div class="code-input d-md-flex justify-content-md-between align-md-items-center">
                                    <div class="form-group">
                                        <input class="form-control" name="coupon_name" id="coupon_name" type="text"
                                               placeholder="أكتب كوبون الخصم"/>
                                    </div>
                                    <button id="btn-check-coupon" class="btnn-orange btn btnn btn-fill px-5 hvr-shadow"
                                            type="button"><span>تفعيل</span>
                                    </button>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center"><span>المجموع</span><span
                                        class="fw-bold" id="cart-total">{{$allCart->getTotal()}} ريال </span></div>
                                <div class="comp-order mt-4">
                                    <button id="btn-new-order" class="btnn-orange btn btnn btn-fill px-5 hvr-shadow"
                                            type="button"><span>اتمام الطلب</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-center mt-5">
                <h3>لنا مكان فى كل دُ كان</h3>
                <p>جميع عمليات الدفع والطلب لدينا مضمونة 100% </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $('#action-delete-all').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "DELETE",
                url: '{{ route('carts.delete.all') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    toastr.success(response.message)
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                },
                error: function (e) {
                    console.error(e);
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        });

        $('.delete-item').on('click', function (e) {
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
                    if (response.quantity == 0) {
                        window.location.reload();
                    }
                    $('.cart-count').text(response.quantity)
                    $('#cart-total').text(response.total + ' ريال')
                    $('#product-' + product_id).remove()

                },
                error: function (e) {
                    console.error(e);
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        });

        $('#btn-check-coupon').on('click', function (e) {
            e.preventDefault();
            var self = $(this)
            $.ajax({
                type: "POST",
                url: "{{route('coupons.check')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "coupon_name": $('#coupon_name').val(),
                },
                success: function (response) {
                    toastr.success(response.message)
                    $('#cart-total').text(response.total + ' ريال')
                    $('#btn-check-coupon').attr('data-id', response.id)
                    $('#btn-check-coupon').attr('data-name', response.name)
                },
                error: function (e) {
                    if (e.status === 401) {
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                    $('#cart-total').text(e.responseJSON.total + ' ريال')
                    $('#btn-check-coupon').removeAttr('data-id')
                    $('#btn-check-coupon').removeAttr('data-name')
                }
            });
        });

        $('#btn-new-order').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{route('orders.store')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "coupon_id": $('#btn-check-coupon').attr('data-id'),
                    "coupon_name": $('#btn-check-coupon').attr('data-name'),
                },

                success: function (response) {
                    toastr.success(response.message)
                    setTimeout(function () {
                        window.location.href = response.route;
                    }, 2000);
                },
                error: function (e) {
                    console.error(e);
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    toastr.error(e.responseJSON.message)
                }
            });
        });

        $('.input-increment').on('click', function (e) {
            e.preventDefault();
            incrementOrDecrement($(this).attr("data-id"), $(this).attr("data-route"))
        });

        $('.input-decrement').on('click', function (e) {
            e.preventDefault();
            incrementOrDecrement($(this).attr("data-id"), $(this).attr("data-route"))
        });

        function incrementOrDecrement(product_id, route) {
            $.ajax({
                type: "POST",
                url: route,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "product_id": product_id,
                },
                success: function (response) {
                    toastr.success(response.message)
                    $('#coupon_name').val('')
                    $('#btn-check-coupon').removeAttr('data-id')
                    $('#btn-check-coupon').removeAttr('data-name')

                    if (response.deleted) {
                        $('#product-' + product_id).remove()
                    }
                    if (response.deleted && response.quantity == 0) {
                        window.location.reload();
                    }
                    $('.cart-count').text(response.quantity)
                    $('#input-product-' + product_id).val(response.product_quantity)
                    $('#price-product-' + product_id).text(response.product_total)
                    $('#cart-total').text(response.total + ' ريال')
                },
                error: function (e) {
                    console.error(e);
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    if (e.status === 421) {
                        toastr.error(e.responseJSON.message)
                        if (e.responseJSON.product_quantity) {
                            $('#input-product-' + product_id).val(e.responseJSON.product_quantity)
                        }

                    }
                }
            });
        }
    </script>
@endsection
