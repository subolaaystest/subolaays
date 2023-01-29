<div class="electronics mt-5">
    <div class="home-sec-head mb-4">
        <div class="text">
            <h4> حديثا فى قسم الالكترونيات</h4><a class="link" href="#">زيارة القسم
                <svg>
                    <use href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-right')}}"></use>
                </svg>
            </a>
        </div>
        <div class="button">
            <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>زيارة القسم</span>
            </button>
        </div>
    </div>
    <div class="row m-0 w-100 row-cols-1 row-cols-md-2 row-cols-lg-4 mt-5">
        @foreach($electrons_products as $product)
        <x-product :product="$product"></x-product>
        @endforeach
    </div>
</div>
