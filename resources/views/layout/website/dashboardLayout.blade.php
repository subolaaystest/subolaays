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
        <link rel="stylesheet" href="{{ url('frontend/css/fotorama.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/css/rtl.css') }}">
        <link rel="shortcut icon" href="{{ $settings->logo }}">
        <title> {{ $settings->title }} - @yield('title') </title>
    </head>


    <body>
        <div class="landing-layout">
            <div class="landing-navbar">
                <div class="right-side">
                    <div class="logo">
                        <a href="{{ route('homeWebSite') }}">
                            <img src="{{ $settings->logo }}" alt="alt">
                        </a>
                    </div>
                    <div class="search landing-search">
                        <form action="#" method="method">
                            <div class="form-group mb-0">
                                <input class="form-control" type="text">
                                <button>
                                    <svg>
                                        <use href="{{ url('frontend/images/icons/icons.svg#search') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="coin">
                        <span>العملة:</span>
                        <img src="{{ url('frontend/images/coin.png') }}" alt="alt">
                        <span>ر.س </span>
                    </div>
                </div>
                <div class="left-side">
                    <div class="dash-actions">
                        <ul class="landing-action-list">
                            <li>
                                <a href="#">
                                    <svg>
                                        <use href="{{ url('frontend/images/icons/icons.svg#notifi') }}"></use>
                                    </svg>
                                    <p>
                                        <span>2</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg>
                                        <use href="{{ url('frontend/images/icons/icons.svg#heart') }}"></use>
                                    </svg>
                                    <p>
                                        <span>0</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg>
                                        <use href="{{ url('frontend/images/icons/icons.svg#cart') }}"></use>
                                    </svg>
                                    <p>
                                        <span>2</span>
                                    </p>
                                </a>
                            </li>
                        </ul>



                        <div class="login">
                            @if(!auth()->guard('buyer')->user())
                            <a href="{{ route('LoginForm') }}">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#person') }}"></use>
                                </svg>
                                <span>تسجيل الدخول</span>
                            </a>

                            @else
                            <a href="{{ route('logOutSite') }}">
                                <svg>
                                    <use href="{{ url('frontend/images/icons/icons.svg#person') }}"></use>
                                </svg>
                                <span> {{ __('translate.signOut') }} </span>
                            </a>

                            @endif
                        </div>



                        <a class="lang-btn" href="#">
                            <div class="code"> ar </div><span>العربية </span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="main">



                <div class="landing-notis-head d-flex justify-content-center align-items-center">
                    <p class="m-0">هل تريد ان تبدء صفقة جديدة الان ؟ </p>
                    <button class="btnn-orange btn btnn btn-fill hvr-shadow" type="button">
                        <span>اضافة صفقة </span>
                    </button>
                </div>


                {{-- Here Is Content Area --}}
                @yield('content')





            </div>








<div class="footer">
    <div class="container">
        <div class="row w-100 m-0">
            <div class="col-md-3 mb-3">
                <a href="{{ route('homeWebSite') }}">
                    <img src="{{ url('frontend/images/landing/logo.png') }}" alt="alt">
                </a>
            </div>
          <div class="col-md-3 mb-3 m-0">
            <ul class="m-0 p-0">
              <li> <a href="#">عن سبلايز</a></li>
              <li> <a href="#">الوظائف لدينا</a></li>
              <li> <a href="#">الانضمام كتاجر</a></li>
              <li> <a href="#">مدونة سبلايز</a></li>
              <li> <a href="#">اتصل بنا</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-3 m-0">
            <ul class="m-0 p-0">
              <li> <a href="#">سياسة الخصوصية</a></li>
              <li> <a href="#">الشروط والاحكام</a></li>
              <li> <a href="#">الدخول </a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-3 m-0">
            <ul class="m-0 p-0">
              <li> <a href="#">الرياض ، الممكلة العربية السعودية</a></li>
              <li> <a href="#">customer@subolaays.net</a></li>
              <li> <a href="#">966500045778+</a></li>
            </ul>
          </div>
        </div>
        <div class="row w-100 m-0">
          <div class="col-md-6 d-flex align-items-center">
            <div class="text-footer mb-3 mb-md-0">
              <p class="mb-0">© 2021 — All Rights Reserved</p>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="footer-list-social m-0 p-0">
                <li>
                    <a href="{{ $settings->linked_in }}" target="_blank">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#linkedin') }}">  </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $settings->instagram }}" target="_blank">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#instagram') }}">  </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $settings->twitter }}" target="_blank">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#twitter') }}">  </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $settings->youtube }}" target="_blank">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#youtube') }}">  </use>
                        </svg>
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>
    <script src="{{ url('frontend/js/jquery-pincode-autotab.min.js') }}"> </script>
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
    <script src="{{ url('frontend/js/bundle.min.js') }}"> </script>
    <script src="{{ url('frontend/js/moreFields.js') }}"> </script>
    <script src="{{ url('frontend/js/fotorama.js') }}"> </script>
    <script src="{{ url('frontend/js/main.js') }}"> </script>
    <script src="{{ url('frontend/js/charts.js') }}"> </script>
  </div>
</body>
</html>
