<div class="product-type-list mt-5">
    <div class="owl-carousel owl-theme">
        @foreach($main_categories as $main_category)
            <div class="item product-type">
                <a href="{{route('search.products',['category_id'=> $main_category->id])}}">
                    <div class="image"><img src="{{ $main_category->image }}" alt=""></div>
                </a>
                <h3>{{ $main_category->name }} </h3>
            </div>
        @endforeach
    </div>
</div>
