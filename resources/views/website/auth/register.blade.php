<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="{{asset('/website_assets/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/website_assets/assets/css/rtl.css')}}">
    <title>Register</title>
  </head>
  <body>
    <div class="sign-up-steps-page">
      <div class="sign-up-steps-head">
        <div class="img-bg"><img src="{{asset('website_assets/assets/images/sign-steps-head.png')}}" alt=""></div>
        <div class="container">
            <div class="sign-up-steps-head-inner">
            <div class="user-box"> <a class="back" data-back="0">
                <svg>
                  <use href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-right-2')}}"></use>
                </svg></a>
              <div class="sign-up-page-info">
                <svg>
                  <use href="{{asset('website_assets/assets/images/icons/icons.svg#user-2')}}"></use>
                </svg><span>تسجيل جديد</span>
              </div>
            </div>
            <div class="logo"> <img src="{{asset('website_assets/assets/images/logo.png')}}" alt=""></div>
          </div>
        </div>
      </div>
      <div class="sign-up-steps-progress">
        <div class="container">
            @if($errors->count() > 0)
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="sign-progress-parent step-1">
            <div class="sign-progress-bar">
              <div class="sign-progress-child"> </div>
            </div>
            <div class="sign-progress-text">
              <h5>المعلومات الشخصية </h5>
              <h5>ﻧﻮع اﻟﻤﻨﺸﺄة</h5>
              <h5>الموقع</h5>
              <h5>ﻋﻦ اﻟﻤﻨﺸﺄة</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <form href="{{route('register')}}" method="POST">
            @csrf
          <div class="sign-up-steps-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="step-1-details" role="tabpanel" aria-labelledby="step-1-details-tab">
                <div class="sign-up-steps-title">
                  <h2> ﻧﻮع اﻟﻤﻨﺸﺄة</h2>
                  <p> ﻣﻦ ﻓﻀﻠﻚ أﺧﺘﺮ ﻧﻮع اﻟﻤﻨﺸﺄة   </p>
                </div>
                <div class="row mt-5">
                 @foreach($buyer_categories as $category)
                  <div class="col">
                    <div class="building-box">
                      <input type="radio"name="buyer_category_id" id="food-delivery" value="{{$category->id}}">
                      <div class="icon"> <img src="{{$category->image}}" alt=""></div>
                      <h3>{{$category->name}}</h3>
                    </div>
                  </div>
                  @endforeach
                    <div class="col">
                        <div class="building-box other-building">
                             <input type="radio" name="other_buyer_category" id="position">
                             <div class="icon"> <img src="{{asset('website_assets/assets/images/building/position.png')}}" alt=""></div>
                             <h3>أخرى</h3>
                        </div>
                    </div>
                </div>
                <div class="form-other other-building-form">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="إضافة منشأة أخرى" name="other_buyer_category_text">
                  </div>
                </div>
                <div class="steps-action-btn mt-5 pt-3">
                  <button class="btn hvr-float-shadow go-to-step-2" type="button">التالي </button>
                </div>
              </div>
              <div class="tab-pane fade" id="step-2-details" role="tabpanel" aria-labelledby="step-2-details-tab">
                <div class="sign-up-steps-title">
                  <h2> اﻟﻤﻨﺘﺠﺎت اﻟﺘﻰ ﺗﺒﻴﻌﻬﺎ</h2>
                  <p> ﻣﺎﻫﻰ اﻟﻤﻨﺘﺠﺎت اﻟﺘﻰ ﺗﻘﻮم ﺑﺒﻴﻌﻬﺎ</p>
                </div>
                <div class="product-type-list mt-5 pt-3">
                  @foreach($main_categories as $main)
                  <div class="product-type">
                    <input type="checkbox" name="main_category[]" value="{{$main->id}}">
                    <div class="image"> <img src="{{$main->image}}" alt=""></div>
                    <h3>{{$main->name}}</h3>
                  </div>
                  @endforeach
                  <div class="building-box other-product-type">
                    <input type="checkbox" name="other_main_category" id="position">
                    <div class="icon"> <img src="{{asset('website_assets/assets/images/building/position.png')}}" alt=""></div>
                    <h3>أخرى</h3>
                  </div>
                </div>
                <div class="form-other other-product-types-form">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="إضافة منتجات جديدة" name="other_main_category_text">
                  </div>
                </div>
                <div class="steps-action-btn mt-5 pt-3">
                  <button class="btn hvr-float-shadow go-to-step-3" type="button">التالي </button>
                </div>
              </div>
              <div class="tab-pane fade" id="step-3-details" role="tabpanel" aria-labelledby="step-3-details-tab">
                <div class="sign-up-steps-title">
                  <h2> اﻟﻌﻨﻮان او اﻟﻔﺮع</h2>
                  <p> ﻣﻦ ﻓﻀﻠﻚ أﺧﺘﺮ ﻋﻨﻮان اﻟﻤﻨﺸﺄة</p>
                </div>
                <div class="map">
                  <div class="map-box">
                    <button class="btn" id="locat_me">
                      <svg>
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg#location')}}"></use>
                      </svg>
                    </button>
                    <div id="map"></div>
                  </div>
                  <div class="steps-action-btn mt-5">
                    <button class="btn hvr-float-shadow go-to-step-4" type="button">التالي </button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="step-4-details" role="tabpanel" aria-labelledby="step-4-details-tab">
                <div class="sign-up-steps-title">
                  <h2> ﺗﺒﻘﻰ ﺧﻄﻮة واﺣﺪة </h2>
                  <p> أﻛﻤﻞ ﻣﻌﻠﻮﻣﺎت ﻣﻨﺸﺄﺗﻚ</p>
                  <div class="form">
                    <div class="input-text-icon-box form-group">
                      <svg>
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg#user-2')}}"></use>
                      </svg><span>أﺳﻢ اﻟﻤﻨﺸﺄة :</span>
                      <input type="text" name="name">
                    </div>
                    <h3>ﺑﻴﺎﻧﺎت ﺗﻮاﺻﻞ اﻟﻤﻨﺸﺄة</h3>
                    <div class="input-text-icon-box form-group">
                      <svg>
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg#envelope')}}"></use>
                      </svg><span>اﻟﺒﺮﻳﺪ اﻟﺎﻟﻜﺘﺮوﻧﻰ :</span>
                      <input type="email" name="email">
                    </div>
                    <div class="input-text-icon-box form-group">
                      <svg>
                        <use href="{{asset('website_assets/assets/images/icons/icons.svg#phone')}}"></use>
                      </svg><span>رقم الهاتف :</span>
                      <input type="tel" name="mobile">
                    </div>
{{--                    <div class="login-with"> <a href="">--}}
{{--                        <svg>--}}
{{--                          <use href="{{asset('website_assets/assets/images/icons/icons.svg#phone')}}"></use>--}}
{{--                        </svg></a><a href="">--}}
{{--                        <svg>--}}
{{--                          <use href="{{asset('website_assets/assets/images/icons/icons.svg#whatsapp')}}">                </use>--}}
{{--                        </svg></a></div>--}}
                    <div class="btn-submit">
                      <button class="btn hvr-float-shadow"><span>تسجيل    </span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>  <input id="lng" type="hidden" name="lng" value="hamza">
                    <input id="lat" type="hidden" name="lat" value="hamza">
          </div>
        </form>
      </div>
      <ul class="nav nav-tabs d-none">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="step-1-details-tab" data-bs-toggle="tab" data-bs-target="#step-1-details" type="button" role="tab" aria-controls="step-1-details" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="step-2-details-tab" data-bs-toggle="tab" data-bs-target="#step-2-details" type="button" role="tab" aria-controls="step-2-details" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="step-3-details-tab" data-bs-toggle="tab" data-bs-target="#step-3-details" type="button" role="tab" aria-controls="step-3-details" aria-selected="false">Messages</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="step-4-details-tab" data-bs-toggle="tab" data-bs-target="#step-4-details" type="button" role="tab" aria-controls="step-4-details" aria-selected="false">Messages</button>
        </li>
      </ul>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>
      <script src="{{asset('website_assets/assets/js/jquery-pincode-autotab.min.js')}}"> </script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"> </script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"> </script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSbSmPAGJ9yjR_hfPXnHBH_5zplpE_5sY&amp;callback=initAutocomplete&amp;libraries=places&amp;v=weekly" defer></script>
      <script src="{{asset('website_assets/assets/js/bundle.min.js')}}"> </script>
      <script src="{{asset('website_assets/assets/js/moreFields.js')}}"> </script>
      <script src="{{asset('website_assets/assets/js/main.js')}}"> </script>
      <script src="{{asset('website_assets/assets/js/charts.js')}}"> </script>
    </div>
  </body>
</html>
