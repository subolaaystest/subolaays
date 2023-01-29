<div class="bargains mt-5">
    <div class="home-sec-head mb-4">
        <div class="text">
            <h4> الصفقات الحديثة</h4>
            <p> أحدث الصفقات الي طلبها المستخدمين</p>
        </div>
        <a href = "{{ route('deals.index') }}">
            <div class="button">
                <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>زيارة القسم</span>
                </button>
            </div>
        </a>
    </div>
    <div class="row m-0 w-100 mt-5">
        <div class="col-md-4">
            <div class="bargains-img">
                <p>أحدث صفقات البقالة</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="all-bargins">
                <p class="mt-3"><a href="{{route('deals.index',['category_id'=> \App\Models\Deal::GROCERY_CATEGORY_ID])}}">عرض جميع الصفقات لهذا القسم
                        <svg>
                            <use href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-right')}}"></use>
                        </svg>
                    </a></p>
                <div class="row m-0 w-100 mt-4">
                    @foreach($grocery_products as $product)
                    <div class="col-md-6 mb-4"><a class="bargain hvr-float-shadow" href="{{route('deals.show',['product'=>$product->id])}}">
                            <div class="bargain-head">
                                <h6 class="m-0">حالة الصفقة</h6><span>لم يتم الترسية بعد</span>
                            </div>
                            <div class="bargain-body">
                                <div class="row w-100 m-0">
                                    <div class="col-6">
                                        <div class="bargain-body-sec"><span>القسم</span>
                                            <h6>{{$product->main_category->name}} - {{$product->sub_category->name}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bargain-body-sec"><span>اسم المنتج</span>
                                            <h6>{{$product->name}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bargain-body-sec"><span>الكمية</span>
                                            <h6>{{$product->quantity_available}} صندوق</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bargain-body-sec"><span>العروض</span>
                                            <h6 class="textt-red">50 عرض</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
