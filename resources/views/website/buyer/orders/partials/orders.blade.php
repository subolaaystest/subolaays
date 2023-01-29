@foreach($orders as $order)
    <div class="col-md-4 mb-4">
        <a class="bargain hvr-float-shadow" href="{{route('buyer.orders.show',['model' => $order->order_number ])}}">
            <div class="bargain-head">
                <h6 class="m-0">حالة الصفقة</h6><span>{{$order->status}}</span>
            </div>
            <div class="bargain-body">
                <div class="row w-100 m-0">
                    <div class="col-6">
                        <div class="bargain-body-sec"><span>الأقسام</span>
                            <h6>{{$order->getProductsAndCategoriesNameByProduct()['categories']}}</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bargain-body-sec"><span>المنتجات</span>
                            <h6>{{$order->getProductsAndCategoriesNameByProduct()['products']}}</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bargain-body-sec"><span>الكمية</span>
                            <h6>{{$order->sumQuantityProducts()}} </h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bargain-body-sec"><span>السعر</span>
                            <h6 class="textt-red">{{$order->final_total}}  ريال</h6>
                        </div>
                    </div>
                </div>
            </div></a></div>

@endforeach
