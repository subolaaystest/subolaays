<!DOCTYPE html>
<html lang="en" dir="rtl">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/rtl.css') }}">
    <link rel="shortcut icon" href="{{ $settings->logo }}">
    <title> {{ $settings->title }} - @yield('title') </title>
    <meta name="keywords" content="{{ $settings->keywords }}">
  </head>

  <body>

    <div class="auth-layout">
      <div class="container-fluid p-0">
        <div class="row row-cols-1 g-0 row-cols-lg-2">
          <div class="col">
            <div class="auth-side-content">
              <div class="auth-nav">
                <div class="auth-nav-logo">
                    <a href="{{ route('seller.login') }}">
                        <img src="{{ $settings->logo }}" alt="{{ $settings->title }}">
                    </a>
                </div>
                <div class="btn-lang">
                  <a href="{{ LaravelLocalization::getLocalizedUrl($invertLocale) }}">
                    <img src="{{ asset('images/locals/'. $invertLocale. '.svg') }}" width="36" height="36" alt="">
                  </a>
                </div>
              </div>
              <div class="auth-header">
                <h2> {{ __('translate.WeHavePlaceIn') }}  <br> {{ __('translate.EveryShop') }} </h2>
                <h3> {{ __('translate.EasilyManageRequestsOffersCustomers') }} </h3>
              </div>
              <div class="auth-bg"> <img src="{{ url('frontend/images/auth-bg.png') }}" alt=""></div>
            </div>
          </div>
          <div class="col">
            <div class="auth-form">
                @yield('content')

            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="{{ url('frontend/js/jquery-pincode-autotab.min.js') }}"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"> </script>
    <script src="{{ url('frontend/js/main.js') }}"> </script>



<script>
    $(document).ready(function() {
        $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-dismissible").slideUp(500);
        });
    });
</script>






  </body>
</html>
