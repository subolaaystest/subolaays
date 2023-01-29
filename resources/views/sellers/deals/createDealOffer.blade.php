@extends('layout.sellers.dashboardLayout')

@section('title', 'الصفقات')

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="page-content-inner bargains-request">
            <div class="bargains-request-head">
                <h2>تفاصيل العميل</h2>
                <a href="{{ route('getDealDetails', $deal->id) }}">
                    <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>تفاصيل الصفقة</span></button>
                </a>
            </div>
            <div class="order-details">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="order-details-box">
                            <span>نوع المنشأة</span>
                            <h5>بقالة</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span>إسم العميل</span>
                            <h5>{{ @$deal->buyer->name }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details-box">
                            <span>البريد الإلكتروني</span>
                            <h5>{{ @$deal->buyer->email }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="order-details-box">
                            <span>عضو من</span>
                            <h5>{{ @$deal->buyer->created_at->format('Y-M-d') }}</h5>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="add-product-title">
                <h2>اﻟﻤﻨﺘﺠﺎت اﻟﻤﻄﻠﻮﺑﺔ</h2>
                <p>ﻣﻦ ﻓﻀﻠﻚ ﻗﻢ ﺑﻮﺿﻊ ﻋﻠﺎﻣﺔ ﺻﺢ ﻟﻠﻤﻨﺘﺞ اذا ﻛﺎن ﻣﺘﻮﻓﺮ ﻟﺪﻳﻚ وﺑﺎﻟﻜﻤﻴﺔ اﻟﻤﻄﻠﻮﺑﺔ</p>
            </div>
            <div class="table-container">
                <div class="dash-table">
                    <table class="table responsive" id="">
                        <thead>
                            <th>المنتج</th>
                            <th>الإسم</th>
                            <th>القسم</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                            <th>الإجراءات</th>
                        </thead>
                        <tbody>
                        @isset($deal->products)
                        @foreach ($deal->products as $one)
                            <tr>
                                <td><div class="table-img"><img src="{{ @$one->main_image }}" /></div></td>
                                <td><div class="table-two-texts"><h5> {{ @$one->name }} </h5><h6>{{ @$one->sku }}</h6></div></td>
                                <td><div class="table-two-texts"><h5>{{ @$one->main_category->name }}</h5><h6>{{ @$one->sub_category->name }}</h6></div></td>
                                <td><h5>{{ @$one->active_price }} ريال</h5></td>
                                <td><h5>{{ @$one->quantity_available }}</h5></td>
                                <td>
                                    <div class="table-actions">
                                        <div class="available-check">
                                            <input type="checkbox" id="available-check814"/>
                                            <label class="btn hvr-shadow" for="available-check814">متوفر لدي</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-5 cus-hr">
            <div class="add-product-title">
                <h2>تفاصيل الشحن</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 align-items-end">
                <div class="col">
                    <div class="form-group">
                        <label for="input-968">خيارات الشحن</label>
                        <select class="niceselect" type="text" id="select-968">
                            <option value="أﺧﺘﺮ ﻃﺮﻳﻘﺔ اﻟﺸﺤﻦ">أﺧﺘﺮ ﻃﺮﻳﻘﺔ اﻟﺸﺤﻦ  </option>
                            <option value="إختر">إختر  </option>
                            <option value="إختر">إختر  </option>
                            <option value="إختر">إختر  </option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="input-941">موعد الشحن</label>
                        <input class="form-control" type="text" id="input-941" placeholder="12 ﻧﻮﻗﻤﺒﺮ 2021"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="input-714">اﻟﺴﻌﺮ ﻟﻠﻤﻨﺘﺠﺎت اﻟﻤﻄﻠﻮﺑﺔ</label>
                        <input class="form-control" type="text" id="input-714"/>
                        <div class="value-text">دينار</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="input-418">ملاحظاتك  </label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="add-product-title pt-5">
                <h2>الفاتورة</h2>
            </div>
            <div class="order-details">
                <div class="order-total">
                    <ul>
                        <li>
                            <h5>السعر الفرعي </h5>
                            <h6>350 ريال</h6>
                        </li>
                        <li>
                            <h5>التوصيل<span class="express">Express </span></h5>
                            <h6>350 ريال</h6>
                        </li>
                        <li>
                            <h5>كوبون الخصم </h5>
                            <h6>20 ريال</h6>
                        </li>
                        <li>
                            <h5>إجمالي الطلبات</h5>
                            <h6 class="fw-bold">620 ريال</h6>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="add-product-title pt-5">
                <h2>وﺳﺎﺋﻞ اﻟﺪﻓﻊ اﻟﻤﻨﺎﺳﺒﺔ ﻟﻚ</h2>
            </div>
            <ul class="payments-list-check">
                <li>
                    <input type="radio" name="payment" id="visa">
                    <label for="visa">
                    <div class="title">فيزا / ماستر كارد</div><img class="img" src="{{ url('frontend/images/payments/visa.png') }}" alt=""><img class="img-active" src="../../assets/images/payments/visa-active.png" alt="">
                    </label>
                </li>
                <li>
                    <input type="radio" name="payment" id="apple">
                    <label for="apple">
                        <div class="title">أبل باي</div><img class="img" src="{{ url('frontend/images/payments/apple-p.png') }}" alt=""><img class="img-active" src="../../assets/images/payments/apple-p-active.png" alt="">
                    </label>
                </li>
                <li>
                    <input type="radio" name="payment" id="mada">
                    <label for="mada">
                        <div class="title">كي نت / مدى</div><img class="img" src="{{ url('frontend/images/payments/mada.png') }}" alt=""><img class="img-active" src="../../assets/images/payments/mada-active.png" alt="">
                    </label>
                </li>
                <li>
                    <input type="radio" name="payment" id="cash">
                    <label for="cash">
                        <div class="title">كاش</div><img class="img" src="{{ url('frontend/images/payments/cash.png') }}" alt=""><img class="img-active" src="../../assets/images/payments/cash-active.png" alt="">
                    </label>
                </li>
                <div class="btn-submit">
                    <button class="btnn-orange btn btnn hvr-shadow btn-fill" data-bs-toggle="modal" data-bs-target="#sendOfferModal"><span>إرسال العرض</span></button>
                    <div class="modal fade" id="sendOfferModal" tabindex="-1" aria-labelledby="sendOfferModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendOfferModalLabel"> </h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="send-offer-modal">
                                        <div class="icon"> <img src="{{ url('frontend/images/success-icon-big.png') }}" alt=""></div>
                                        <h2>تم ارسال عرضك بنجاح</h2>
                                        <p>سيتم تحويلك تلقائيا الى صفحة عروض الصفقات</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>

@endsection
