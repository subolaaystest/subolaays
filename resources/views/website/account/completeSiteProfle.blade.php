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
    <title> {{ __('translate.createAccount') }} </title>
  </head>
  <body>
    <div class="sign-up-steps-page">
      <div class="sign-up-steps-head">
        <div class="img-bg"><img src="{{ url('frontend/images/sign-steps-head.png') }}" alt=""></div>
        <div class="container">
          <div class="sign-up-steps-head-inner">
            <div class="user-box"> <a class="back" data-back="0">
                <svg>
                  <use href="{{ url('frontend/images/icons/icons.svg#arrow-right-2') }}"></use>
                </svg></a>
              <div class="sign-up-page-info">
                <svg>
                  <use href="{{ url('frontend/images/icons/icons.svg#user-2') }}"></use>
                </svg><span> {{ __('translate.createAccount') }} </span>
              </div>
            </div>
            <div class="logo"> <img src="{{ url('frontend/images/logo.png') }}" alt=""></div>
          </div>
        </div>
      </div>
      <div class="sign-up-steps-progress">
        <div class="container">
          <div class="sign-progress-parent step-1">
            <div class="sign-progress-bar">
              <div class="sign-progress-child"> </div>
            </div>
            <div class="sign-progress-text">
              <h5> {{ __('translate.personalInformation') }} </h5>
              <h5> {{ __('translate.FacilityType') }} </h5>
              <h5> {{ __('translate.Location') }} </h5>
              <h5> {{ __('translate.AboutFacility') }} </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="container">

        <form id="storeSellerProfle" method="post" action="{{ route('storeSiteProfle') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}


          <div class="sign-up-steps-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="step-1-details" role="tabpanel" aria-labelledby="step-1-details-tab">
                <div class="sign-up-steps-title">
                  <h2> {{ __('translate.FacilityType') }} </h2>
                  <p> {{ __('translate.PleaseChooseTypeFacility') }} </p>
                </div>
                <div class="row mt-5">


                  @isset($buyers_categories)
                  @foreach($buyers_categories as $one)
                  <div class="col">
                    <div class="building-box">
                      <input type="radio" name="buyer_category_id" id="buyer_category_id" value="{{ $one->id }}">
                      <div class="icon"> <img src="{{ $one->image }}" alt=""></div>
                      <h3>{{ $one->name }}</h3>
                    </div>
                  </div>
                  @endforeach
                  @endisset


                  <div class="col">
                    <div class="building-box other-building">
                      <input type="radio" name="building" id="position">
                      <div class="icon"> <img src="{{ url('frontend/images/building/position.png') }}" alt=""></div>
                      <h3> {{ __('translate.other') }} </h3>
                    </div>
                  </div>
                </div>
                <div class="form-other other-building-form">
                  <div class="form-group">

                    <input class="form-control addSellerCategory" type="text" onkeydown="addSellerCategory(this)" placeholder="إضافة منشأة أخرى">
                    <input type="radio" name="seller_category_id" id="newSellerCategoryId" value="" style="display: none;">


                  </div>
                </div>
                <div class="steps-action-btn mt-5 pt-3">
                  <button class="btn hvr-float-shadow go-to-step-2" type="button"> {{ __('translate.next') }} </button>
                </div>
              </div>
              <div class="tab-pane fade" id="step-2-details" role="tabpanel" aria-labelledby="step-2-details-tab">
                <div class="sign-up-steps-title">
                  <h2> {{ __('translate.productsYouSell') }} </h2>
                  <p> {{ __('translate.WhatProductsAreYouSelling') }} </p>
                </div>
                <div class="product-type-list mt-5 pt-3">





                  @isset($main_categories)
                  @foreach($main_categories as $one)
                  <div class="product-type">
                      <input type="checkbox" name="main_categories[]" value="{{ @$one->id }}">
                      <div class="image"> <img src="{{ @$one->image }}" alt="{{ @$one->name }}"></div>
                      <h3> {{ @$one->name }} </h3>
                  </div>
                  @endforeach
                  @endisset

                  <div class="building-box other-product-type">
                    <input type="checkbox" name="building" id="position">
                    <div class="icon"> <img src="{{ url('frontend/images/building/position.png') }}" alt=""></div>
                    <h3> {{ __('translate.other') }} </h3>
                  </div>

                </div>
                <div class="form-other other-product-types-form">
                  <div class="form-group">
                    <input class="form-control addMainCategory" type="text" onkeydown="addMainCategory(this)" placeholder="إضافة منتجات جديدة">
                    <input type="hidden" name="main_categories[]" class="newMainCategory" value="">


                  </div>
                </div>
                <div class="steps-action-btn mt-5 pt-3">
                  <button class="btn hvr-float-shadow go-to-step-3" type="button"> {{ __('translate.next') }} </button>
                </div>
              </div>
              <div class="tab-pane fade" id="step-3-details" role="tabpanel" aria-labelledby="step-3-details-tab">
                <div class="sign-up-steps-title">
                  <h2> {{ __('translate.AddressOrBranch') }} </h2>
                  <p> {{ __('translate.PleaseChooseAddressFacility') }} </p>
                </div>


                {{-- <div class="map">
                  <div class="map-box">
                    <button class="btn" id="locat_me">
                      <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#location') }}"></use>
                      </svg>
                    </button>
                    <div id="map"></div>
                  </div>
                  <div class="steps-action-btn mt-5">
                    <button class="btn hvr-float-shadow go-to-step-4" type="button"> {{ __('translate.next') }} </button>
                  </div>
                </div> --}}


                <div class="map">
                    <div class="map-box">
                        <button class="btn" id="locat_me">
                            <svg>
                                <use href="{{ url('frontend/images/icons/icons.svg#location') }}"></use>
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
                  <h2> {{ __('translate.OneStepLeft') }} </h2>
                  <p> {{ __('translate.CompleteYourFacilityInformation') }} </p>
                  <div class="form">
                    <div class="input-text-icon-box form-group">
                      <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#user-2') }}"></use>
                      </svg><span> {{ __('translate.EstablishmentName') }} :</span>
                      <input type="text" name="name" value="" required>
                    </div>
                    <h3> {{ __('translate.EstablishmentCommunicationInformation') }} </h3>
                    <div class="input-text-icon-box form-group">
                      <svg>
                        <use href="{{ url('frontend/images/icons/icons.svg#envelope') }}"></use>
                      </svg><span> {{ __('translate.email') }} :</span>
                      <input type="email" name="email" value="" required>
                    </div>
                    <div class="login-with"> <a href="">
                        <svg>
                          <use href="{{ url('frontend/images/icons/icons.svg#phone') }}"></use>
                        </svg></a><a href="">
                        <svg>
                          <use href="{{ url('frontend/images/icons/icons.svg#whatsapp') }}">                </use>
                        </svg></a></div>
                    <div class="btn-submit">
                      <button class="btn hvr-float-shadow"><span> {{ __('translate.register') }} </span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <input id="lat" name="latitude" type="hidden" value="24.233">
          <input id="lng"name="longitude" type="hidden" value="43.23">


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
      <script src="{{ url('frontend/js/main.js') }}"> </script>
      <script src="{{ url('frontend/js/charts.js') }}"> </script>
      <script src="{{ url('frontend/js/bundle.min.js') }}"> </script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSbSmPAGJ9yjR_hfPXnHBH_5zplpE_5sY&amp;callback=initAutocomplete&amp;libraries=places&amp;v=weekly" defer></script>






    </div>





    <script>

        function addSellerCategory(categoryName) {
            if (event.key === 'Enter') {
                if(categoryName.value != null){
                    var url = "{{ url(app()->getLocale().'/addSellerCategory') }}";
                    url = url + '/' + categoryName.value;

                    $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        $('.addSellerCategory').val("");
                        $('.newSellerCategoryId').val(response);

                        swal("{{ __('شكراً لك') }}", " {{ __('لقد تم إضافة البيانات بنجاح') }} ", "success");
                    }
                    });

                }
            }
        }


        function addMainCategory(categoryName) {
            if (event.key === 'Enter') {
                if(categoryName.value != null){
                    var url = "{{ url(app()->getLocale().'/addMainCategory') }}";
                    url = url + '/' + categoryName.value;

                    $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        $('.addMainCategory').val("");
                        $('.newMainCategory').val(response);

                        swal("{{ __('شكراً لك') }}", " {{ __('لقد تم إضافة البيانات بنجاح') }} ", "success");
                    }
                    });

                }
            }
        }



    </script>





<script>
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



  </body>
</html>
