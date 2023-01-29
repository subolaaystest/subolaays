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
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/rtl.css') }}">
    <link rel="shortcut icon" href="{{ $settings->logo }}">

    <title> {{ $settings->title }} - @yield('title') </title>
  </head>


  <body></body>


  <div class="dashboard-layout">

    <div class="dashbord-navbar">
      <div class="logo">
          <a href="{{ route('seller.login') }}">
            <img src="{{ $settings->logo }}" alt="alt"></a></div>
      <div class="dash-breadcrumb">
        <h1> @yield('title')
        </h1>
      </div>
      <div class="dash-actions"><a class="lang-btn">
          <div class="code"> ar </div><span>العربية </span></a>
        <div class="search">
          <form action="#" method="method">
            <div class="form-group">
              <input class="form-control" type="text">
              <button>~<i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
        <div class="noti">
          <button>
            <svg>
              <use href="{{ url('frontend/images/icons/icons.svg#notification') }}"></use>
            </svg>
          </button>
        </div>
        <div class="account-area">
          <div class="dropdown">
            <button class="btn p-0 dropdown-toggle" id="userStatus" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                @auth('seller')
                    <img src="{{ auth()->guard('seller')->user()->image_profile }}" alt="">
                @endauth
            </button>
            <ul class="dropdown-menu" aria-labelledby="userStatus">

              <li>
                  <a class="dropdown-item" href="#">

                  @auth('seller')
                    @isset(auth()->guard('seller')->user()->name)
                        <h5> {{ auth()->guard('seller')->user()->name }} </h5>
                    @endisset

                    @isset(auth()->guard('seller')->user()->email)
                        <span> {{ auth()->guard('seller')->user()->email }} </span>
                    @endisset

                  @endauth


                </a>
            </li>
              <li><a class="dropdown-item" href="{{ route('seller.logout') }}">
                  <h5> {{ __('translate.signOut') }} </h5></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="main">
      <div class="dash-sidebar">
        <div class="top-sidebar">
          <div class="logo">  <img src="{{ url('frontend/images/logo.png') }}" alt="alt"></div>
          <div class="close-menu"> <i class="fas fa-times">    </i></div>
        </div>
        <div class="list-links">
                <div class="list-links-group">
                  <h5></h5>
                  <ul>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'seller.index' ? 'active' : '' }}" href="{{ route('seller.index') }}">
                            <div class="icon">
                                <img src="{{ url('frontend/images/menu/home.svg') }}" alt="">
                            </div>
                            <span> {{ __('translate.home') }} </span>
                        </a>
                    </li>
                  </ul>
                </div>
                <div class="list-links-group">


                  <h5> {{ __('translate.Products') }} </h5>
                  <ul>
                    <li><a href="{{ route('getSellerProducts') }}" class="{{ Route::currentRouteName() == 'getSellerProducts' ? 'active' : '' }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/Product_Package.svg') }}" alt="">
                        </div><span> {{ __('translate.Products') }} </span></a></li>

                    <li>
                        <a href="{{ route('getSellerCategories') }}">
                            <div class="icon"> <img src="{{ url('frontend/images/menu/plus.svg') }}" alt=""></div>
                            <span> {{ __('translate.ProductCategories') }} </span>
                        </a>
                    </li>
                  </ul>
                </div>
                <div class="list-links-group">
                  <h5> {{ __('translate.orders') }} </h5>
                  <ul>
                    <li><a href="{{ route('getSellerOrders') }}" class="{{ Route::currentRouteName() == 'getSellerOrders' ? 'active' : '' }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/Shopping_Bag.svg') }}" alt=""></div>
                        <span> {{ __('translate.orders') }} </span></a></li>


                    <li><a href="{{ route('getSellerDeals') }}" class="{{ Route::currentRouteName() == 'getSellerDeals' ? 'active' : '' }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/Tag.svg') }}" alt=""></div>
                        <span> {{ __('translate.deals') }} </span>
                    </a></li>



                    <li><a href="#">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/offer.svg') }}" alt=""></div>
                        <span> {{ __('translate.dealsOffers') }} </span></a></li>
                    <li><a href="#">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/circular-diagram.svg') }}" alt=""></div>
                        <span> {{ __('translate.reports') }} </span></a></li>
                  </ul>
                </div>
                <div class="list-links-group">
                  <h5> {{ __('translate.Marketing') }}  </h5>
                  <ul>
                    <li><a href="{{ route('getAbandonedCarts') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/cart.svg') }}" alt=""></div>
                        <span> {{ __('translate.AbandonedCarts') }} </span></a></li>
                    <li><a href="{{ route('getSellerCoupons') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/coupon.svg') }}" alt=""></div>
                        <span> {{ __('translate.coupons') }} </span></a></li>
                    <li><a href="#">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/send.svg') }}" alt=""></div>
                        <span> {{ __('translate.MessageCampaigns') }} </span></a></li>
                    <li><a href="{{ route('getSellerStory') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/instagram-live.svg') }}" alt=""></div>
                        <span> {{ __('translate.addStories') }} </span></a></li>
                  </ul>
                </div>
                <div class="list-links-group">
                  <h5> {{ __('translate.clients') }} </h5>
                  <ul>
                    <li><a href="{{ route('getSellerClients') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/users.svg') }}" alt=""></div>
                        <span> {{ __('translate.clients') }}  </span></a></li>
                    <li><a href="{{ route('getSellerChats') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/comm-chat.svg') }}" alt=""></div>
                        <span> {{ __('translate.Messages') }} </span></a></li>
                  </ul>
                </div>
                <div class="list-links-group">
                  <h5> {{ __('translate.Settings') }} </h5>
                  <ul>
                    <li><a href="{{ route('getSellerSettings') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/setting 2.svg') }}" alt=""></div>
                        <span> {{ __('translate.siteSettings') }}  </span></a></li>
                    <li><a href="{{ route('getSellerShippingMethods') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/fast.svg') }}" alt=""></div>
                        <span> {{ __('translate.ShippingAndDelivery') }} </span></a></li>
                    <li><a href="{{ route('getSellerStorages') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/shed.svg') }}" alt=""></div>
                        <span> {{ __('translate.StorageLocations') }} </span></a></li>
                    <li><a href="{{ route('getSellerTaxs') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/Bank-Statement.svg') }}" alt=""></div>
                        <span> {{ __('translate.ActivateTheTax') }} </span></a></li>
                    <li><a href="{{ route('getPaymentsMethods') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/wallet.svg') }}" alt=""></div>
                        <span> {{ __('translate.PaymentsMethods') }} </span></a></li>
                    <li><a href="{{ route('getSellerStocked') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/shipping.svg') }}" alt=""></div>
                        <span> {{ __('translate.Stocked') }} </span></a></li>
                    <li><a href="{{ route('getCoverPoints') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/location.svg') }}" alt=""></div>
                        <span> {{ __('translate.CoveragePointManagement') }} </span></a></li>
                    <li><a href="#">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/favorites.svg') }}" alt=""></div>
                        <span> {{ __('translate.RatingsManagement') }} </span></a></li>
                    <li><a href="{{ route('getSellerTeam') }}">
                        <div class="icon"> <img src="{{ url('frontend/images/menu/users.svg') }}" alt=""></div>
                        <span> {{ __('translate.teamManagement') }} </span></a></li>
                  </ul>
                </div>
        </div>
      </div>



      @yield('content')





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
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('APIGoogleKey')}}&amp;callback=initAutocomplete&amp;libraries=places&amp;v=weekly" defer></script>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSbSmPAGJ9yjR_hfPXnHBH_5zplpE_5sY&amp;callback=initAutocomplete&amp;libraries=places&amp;v=weekly" defer></script> --}}

    <script src="{{ url('frontend/js/bundle.min.js') }}"> </script>
    <script src="{{ url('frontend/js/main.js') }}"> </script>
    <script src="{{ url('frontend/js/charts.js') }}"> </script>


</div>
</html>


@yield('script')

<script>

$(document).ready(function() {
    $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-dismissible").slideUp(500);
    });
});



    $(document).on('change','.SelectMainCategoryId',function(e){
    var main_category_id = $(this).val();
    var url = "{{ url(app()->getLocale().'/Seller/getSubCategories/') }}";

      if(main_category_id){
        $.ajax({
          type: "GET",
          url: url+'/'+main_category_id,
          success: function (response) {
              if(response)
              {
                $(".SelectSubCategoryId").empty();
                $(".SelectSubCategoryId").niceSelect("destroy");


                $.each(response, function(index, value){
                    $(".SelectSubCategoryId").append('<option value="'+value.id+'">'+ value.name +'</option>');
                });
                $(".SelectSubCategoryId").niceSelect();
              }
          }
        });
      }
      else{
        $(".SelectSubCategoryId").empty();
      }
});




// var marker = new google.maps.Marker({
//       position: latleng,
//       map: map,
//       icon: "{{ url('frontend/images/location-pin.png') }}",
//     });





(function (exports) {
  "use strict";

  // This example adds a search box to a map, using the Google Place Autocomplete
  // feature. People can enter geographical searches. The search box will return a
  // pick list containing a mix of places and predicted search terms.
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initAutocomplete() {
    var latleng = {
      lat: -33.8688,
      lng: 151.2195,
    };
    var map = new google.maps.Map(document.getElementById("map"), {
      center: latleng,
      zoom: 13,
      mapTypeId: "roadmap",
      styles: [
        {
          featureType: "all",
          elementType: "geometry.fill",
          stylers: [{ weight: "2.00" }],
        },
        {
          featureType: "all",
          elementType: "geometry.stroke",
          stylers: [{ color: "#9c9c9c" }],
        },
        {
          featureType: "all",
          elementType: "labels.text",
          stylers: [{ visibility: "on" }],
        },
        {
          featureType: "landscape",
          elementType: "all",
          stylers: [{ color: "#f2f2f2" }],
        },
        {
          featureType: "landscape",
          elementType: "geometry.fill",
          stylers: [{ color: "#ffffff" }],
        },
        {
          featureType: "landscape.man_made",
          elementType: "geometry.fill",
          stylers: [{ color: "#ffffff" }],
        },
        {
          featureType: "poi",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "road",
          elementType: "all",
          stylers: [{ saturation: -100 }, { lightness: 45 }],
        },
        {
          featureType: "road",
          elementType: "geometry.fill",
          stylers: [{ color: "#eeeeee" }],
        },
        {
          featureType: "road",
          elementType: "labels.text.fill",
          stylers: [{ color: "#7b7b7b" }],
        },
        {
          featureType: "road",
          elementType: "labels.text.stroke",
          stylers: [{ color: "#ffffff" }],
        },
        {
          featureType: "road.highway",
          elementType: "all",
          stylers: [{ visibility: "simplified" }],
        },
        {
          featureType: "road.arterial",
          elementType: "labels.icon",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "transit",
          elementType: "all",
          stylers: [{ visibility: "off" }],
        },
        {
          featureType: "water",
          elementType: "all",
          stylers: [{ color: "#46bcec" }, { visibility: "on" }],
        },
        {
          featureType: "water",
          elementType: "geometry.fill",
          stylers: [{ color: "#c8d7d4" }],
        },
        {
          featureType: "water",
          elementType: "labels.text.fill",
          stylers: [{ color: "#070707" }],
        },
        {
          featureType: "water",
          elementType: "labels.text.stroke",
          stylers: [{ color: "#ffffff" }],
        },
      ],
    }); // Create the search box and link it to the UI element.
    var marker = new google.maps.Marker({
      position: latleng,
      map: map,
      icon: "{{ url('frontend/images/location-pin.png') }}",
    });

    document.getElementById("locat_me").addEventListener("click", function () {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error);
      } else {
        alert("location not supported");
      }

      //callbacks
      function error(msg) {
        alert("error in geolocation");
      }

      function success(position) {
        var lats = position.coords.latitude;
        var lngs = position.coords.longitude;
        map.setCenter(new google.maps.LatLng(lats, lngs));

        marker.setPosition({ lat: lats, lng: lngs });
      }
    });

    var input = document.getElementById("pac-input");
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); // Bias the SearchBox results towards current map's viewport.

    map.addListener("bounds_changed", function () {
      searchBox.setBounds(map.getBounds());
    });
    // var markers = []; // Listen for the event fired when the user selects a prediction and retrieve
    // // more details for that place.

    searchBox.addListener("places_changed", function () {
      var places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      } // Clear out the old markers.

      markers.forEach(function (marker) {
        marker.setMap(null);
      });
      markers = []; // For each place, get the icon, name and location.

      var bounds = new google.maps.LatLngBounds();
      places.forEach(function (place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }

        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25),
        }; // Create a marker for each place.

        markers.push(
          new google.maps.Marker({
            map: map,
            icon: icon,
            title: place.name,
            position: place.geometry.location,
          })
        );

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
    google.maps.event.addListener(map, "click", function (event) {
      var lang = event.latLng.lng();
      var lat = event.latLng.lat();
      document.getElementById("lng").value = lang;
      document.getElementById("lat").value = lat;
    });

    google.maps.event.addListener(map, "click", function (event) {
      marker.setPosition(event.latLng);
    });
  }

  exports.initAutocomplete = initAutocomplete;
})((this.window = this.window || {}));


</script>




