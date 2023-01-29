<div>
    <div class="col">
        <div class="product">
            <div>
                <a href="#" class="like" data-id="{{$product->id}}">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <svg id="icon-{{$product->id}}">
                            <use
                                href="{{asset('website_assets/assets/images/icons/icons.svg#heart')}}{{ $product->hasFavorite() ? '-fill' : '' }}">

                            </use>
                        </svg>
                    </div>
                </a>
                @if(!empty($product->discount_percentage))
                    <span class="discount">- {{$product->discount_percentage}}%</span>
                @endif
                <div class="mb-3"><a href="{{route('products.show', ['product'=> $product->id])}}">
                        <div class="img"><img src="{{$product->main_image}}" alt=""/></div></a></div>
                <div>
                    <p class="name">{{isset($product->seller)? $product->seller->name: 'اسم التاجر'}}</p>
                    <h4><a href="{{route('products.show', ['product'=> $product->id])}}">{{$product->name}}</a></h4>
                    <p class="price">{{$product->price_after_discount}} {{getSymbolCurrency()}}
                        @if($product->discount_percentage != 0)<span class="old-price">{{$product->price}} {{getSymbolCurrency()}}</span> @endif
                    </p><span class="number"> {{$product->quantity_available}} قطعة</span>
                </div>
                <button data-id="{{$product->id}}" data-route="{{route('carts.store')}}" class="plus">
                    <svg>
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg#plus')}}"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
@section('scripts')

    <script>
        $('.like').on('click',function(e){
            e.preventDefault();
            const product_id = $(this).attr("data-id");
            $.ajax({
                type: "POST",
                url: '{{ route('products.like') }}',
                data: {"_token": "{{ csrf_token() }}",
                    'product_id': product_id
                },
                success: function(response) {
                    // get icon from product id
                    let icon = $(`#icon-${product_id}`);
                    // set status dependents on is_like response key value
                    let type = response.is_liked ? '-fill': ''
                    icon.html(`
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg')}}#heart${type}"></use>
                    `)
                },
                error : function(e){
                    console.error(e);
                    if(e.status === 401){
                      //  if user not logged in
                      window.location.href=@json(route('login'));
                    }
                }
            });
        });
        $('.plus').on('click',function(e){


            e.preventDefault();
            const product_id = $(this).attr("data-id");
            $.ajax({
                type: "POST",
                url: '{{ route('carts.store') }}',
                data: {"_token": "{{ csrf_token() }}",
                    'product_id': product_id
                },
                success: function(response) {

                    toastr.success(response.message)
                    $('.cart-count').text(response.quantity)

                },
                error : function(e){
                    console.error(e);
                    if(e.status === 401){
                        //  if user not logged in
                        window.location.href=@json(route('login'));
                    }
                    if(e.status === 421){
                        toastr.error(e.responseJSON.message)
                    }
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
                    if (response.deleted && response.product_quantity == 0){
                        $('#cart-total').text(0 + ' ريال')
                        window.location.reload();
                    }
                    $('.cart-count').text(response.quantity)
                    $('#input-product-' + product_id).val(response.product_quantity)
                    $('#cart-total').text(response.product_total + ' ريال')
                },
                error: function (e) {
                    console.error(e);
                    if (e.status === 401) {
                        //  if user not logged in
                        window.location.href =@json(route('login'));
                    }
                    if(e.status === 421){
                        toastr.error(e.responseJSON.message)
                        if(e.responseJSON.product_quantity){
                            $('#input-product-' + product_id).val(e.responseJSON.product_quantity)
                        }
                    }
                }
            });
        }
    </script>
@endsection
