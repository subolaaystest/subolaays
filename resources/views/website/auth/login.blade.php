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
    <link rel="stylesheet" href="{{asset('website_assets/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website_assets/assets/css/rtl.css')}}">
    <title>login</title>
  </head>
  <body>
    <div class="auth-layout">
      <div class="container-fluid p-0">
        <div class="row row-cols-1 g-0 row-cols-lg-2">
          <div class="col">
            <div class="auth-side-content">
              <div class="auth-nav">
                <div class="auth-nav-logo">
                    <a href="{{ route('home.index') }}"><img src="{{asset('website_assets/assets/images/logo.png')}}" alt=""></a>
                </div>
                  <div class="btn-lang">
                      <a href="{{ LaravelLocalization::getLocalizedUrl($invertLocale) }}">
                          <img src="{{ asset('images/locals/'. $invertLocale. '.svg') }}" width="36" height="36" alt="">
                      </a>
                  </div>
              </div>
              <div class="auth-header">
                <h2>لنا مكان في  <br> كل دكان</h2>
                <h3>قم بإدارة طلباتك , عروضك , عملائك بسهولة</h3>
              </div>
              <div class="auth-bg"> <img src="{{asset('website_assets/assets/images/auth-bg.png')}}" alt=""></div>
            </div>
          </div>
          <div class="col">
            <div class="auth-form">
              <div class="icon"> <img src="{{asset('website_assets/assets/images/icons/waving-hand.svg')}}" alt=""></div>
              @include('layout.errors')

              <h1>مرحباً . قم بتسجيل الدخول </h1>
              <form action="{{route('login')}}" method="POST" autocomplete="off">
                @csrf
                <div class="input-text-icon-box">
                  <svg>
                    <use href="{{asset('website_assets/assets/images/icons/icons.svg#phone')}}"></use>
                  </svg>
                  <span> {{ __('translate.mobile') }} </span>
                  <input class="phone_number" type="number" id="phone" name="mobile" minlength="12" autocomplete="off"  required>
                  <input type="hidden" id="fullNumber" name="fullNumber">
                </div>
                <div id="error-msg"></div>
                <div id="valid-msg"></div>
                <div class="btn-submit">
                  <button class="btn hvr-float-shadow"><span>تسجيل الدخول   </span></button>
                </div>
                <div class="bottom-form-text">
                  <h5>ما اشتركت معنا بعد   <a href="{{route('formRegister')}}">إشترك ألحين    </a></h5>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="{{asset('website_assets/assets/js/main.j')}}s"> </script>
    <script src="{{asset('website_assets/assets/js/charts.js')}}"> </script>
  </body>
</html>
