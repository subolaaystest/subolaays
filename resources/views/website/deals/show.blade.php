@extends('website.layouts.app')
@section('content')
    <div id="main">
      <div class="main-content pb-5">
        <div class="header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
              <li class="breadcrumb-item">الصفقات</li>
            </ol>
          </nav>
        </div>
        <div class="dash-tabs mt-5">
          <div class="nav-tabs-1"> 
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="invoice-details-tab" data-bs-toggle="tab" data-bs-target="#invoice-details" type="button" role="tab" aria-controls="invoice-details" aria-selected="true">تفاصيل الصفقة</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="product-details-tab" data-bs-toggle="tab" data-bs-target="#product-details" type="button" role="tab" aria-controls="product-details" aria-selected="false">تفاصيل المنتجات</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="advance-details-tab" data-bs-toggle="tab" data-bs-target="#advance-details" type="button" role="tab" aria-controls="advance-details" aria-selected="false">عروض التجار المقدمة </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="invoice-details" role="tabpanel" aria-labelledby="invoice-details-tab"> 
                <div class="order-details"> 
                  <div class="row">
                    <div class="col-lg-2"> 
                      <div class="order-details-box"> <span>رقم الصفقة</span>
                        <h5>6461313#</h5>
                      </div>
                    </div>
                    <div class="col-lg-4"> 
                      <div class="order-details-box"> <span>تاريخ ووقت الصفقة</span>
                        <h5>12 سبتمبر 2021</h5>
                      </div>
                    </div>
                    <div class="col-lg-4"> 
                      <div class="order-details-box"> <span>العروض المقدمة</span>
                        <h5>+50 عرض مقدم</h5>
                      </div>
                    </div>
                    <div class="col-lg-2"> 
                      <div class="order-details-box"> <span>إجمالي الطلب</span>
                        <h5>64 ريال</h5>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="bottom-row d-flex justify-content-between flex-wrap mt-5"> 
                    <div class="order-details-box"> <span>موقع العميل</span>
                      <h5>تبوك السعودية</h5>
                    </div>
                    <div class="buttons d-flex">
                      <button class="btnn-gray btn btnn hvr-shadow" type="button" data-bs-toggle="modal" data-bs-target="#mapModal"><span>عرض الموقع
                          <svg> 
                            <use href="{{asset('website_assets/assets/images/icons/icons.svg#marker')}}"></use>
                          </svg></span></button>
                    </div>
                  </div>
                  <hr>
                  <div class="order-total"> 
                    <ul> 
                      <li> 
                        <h5>السعر الفرعي التقريبي </h5>
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
                        <h6>620 ريال</h6>
                      </li>
                    </ul>
                    <hr>
                    <ul> 
                      <li> 
                        <h5>الملاحظات</h5>
                        <h6>لا يوجد</h6>
                      </li>
                    </ul>
                  </div>
                  <div class="center-action-btn mt-5"> 
                    <button class="btnn-red btn btnn hvr-shadow" data-bs-toggle="modal" data-bs-target="#cancelOfferModal"><span>إلغاء العرض</span></button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="product-details" role="tabpanel" aria-labelledby="product-details-tab"> 
                <div class="row justify-content-center"> 
                  <div class="col-lg-8">
                    <div class="table-container">
                      <div class="dash-table table-responsive">
                        <table class="table responsive" id="">
                          <thead> 
                            <th>المنتج</th>
                            <th>الإسم</th>
                            <th>القسم</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                          </thead>
                          <tbody>
                            <tr> 
                              <td><div class="table-img"><img src="{{asset('website_assets/assets/images/product-thumb.png')}}" /></div></td>
                              <td><div class="table-two-texts"><h5>خضراوات مشكل</h5><h6>#54545454</h6></div></td>
                              <td><div class="table-two-texts"><h5>بقالة</h5><h6> خضراوات </h6></div></td>
                              <td><h5 class="textt-green">45 ريال</h5></td>
                              <td><h5><strong>5</strong></h5></td>
                            </tr>
                            <tr> 
                              <td><div class="table-img"><img src="{{asset('website_assets/assets/images/product-thumb.png')}}" /></div></td>
                              <td><div class="table-two-texts"><h5>خضراوات مشكل</h5><h6>#54545454</h6></div></td>
                              <td><div class="table-two-texts"><h5>بقالة</h5><h6> خضراوات </h6></div></td>
                              <td><h5 class="textt-green">45 ريال</h5></td>
                              <td><h5><strong>5</strong></h5></td>
                            </tr>
                            <tr> 
                              <td><div class="table-img"><img src="{{asset('website_assets/assets/images/product-thumb.png')}}" /></div></td>
                              <td><div class="table-two-texts"><h5>خضراوات مشكل</h5><h6>#54545454</h6></div></td>
                              <td><div class="table-two-texts"><h5>بقالة</h5><h6> خضراوات </h6></div></td>
                              <td><h5 class="textt-green">45 ريال</h5></td>
                              <td><h5><strong>5</strong></h5></td>
                            </tr>
                            <tr> 
                              <td><div class="table-img"><img src="{{asset('website_assets/assets/images/product-thumb.png')}}" /></div></td>
                              <td><div class="table-two-texts"><h5>خضراوات مشكل</h5><h6>#54545454</h6></div></td>
                              <td><div class="table-two-texts"><h5>بقالة</h5><h6> خضراوات </h6></div></td>
                              <td><h5 class="textt-green">45 ريال</h5></td>
                              <td><h5><strong>5</strong></h5></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="center-action-btn mt-5"> 
                  <button class="btnn-red btn btnn hvr-shadow" data-bs-toggle="modal" data-bs-target="#cancelOfferModal"><span>إلغاء العرض</span></button>
                </div>
              </div>
              <div class="tab-pane fade" id="advance-details" role="tabpanel" aria-labelledby="product-details-tab"> 
                <div class="text-center">
                  <svg> 
                    <use href="{{asset('website_assets/assets/images/icons/icons.svg#linkk')}}"></use>
                  </svg>
                  <h3 class="mt-5 fw-bold">فى انتظار العروض</h3>
                  <p>سيتم ارسال العروض لك من التجار فى اقرب وقت</p>
                </div>
                <div class="center-action-btn mt-5"> 
                  <button class="btnn-red btn btnn hvr-shadow" data-bs-toggle="modal" data-bs-target="#cancelOfferModal"><span>إلغاء العرض</span></button>
                </div>
              </div>
              <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="mapModalLabel"></h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7455039.775340255!2d40.580571945242326!3d24.16625624451223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2s!4v1638267085857!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="cancelOfferModal" tabindex="-1" aria-labelledby="cancelOfferModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="cancelOfferModalLabel"> </h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                      <div class="cansel-offer-modal"> 
                        <h2>تم ارسال عرضك بنجاح</h2>
                        <p>سيتم تحويلك تلقائيا الى صفحة عروض الصفقات</p>
                        <div class="text-1">مر الكثير من الوقت ولم تتلقى موافقة</div>
                        <hr>
                        <div class="text-2">لم يعد لديك المنتجات التى يحتاجها العميل</div>
                        <hr>
                        <div class="text-3">سبب آخر</div>
                        <button class="btnn-red btn btnn hvr-shadow" data-bs-toggle="modal" data-bs-target="#cancelOfferModal"><span>إلغاء العرض       </span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection    

