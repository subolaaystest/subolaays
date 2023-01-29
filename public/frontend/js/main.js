$(document).ready(function () {
  $(".myPinCode input").jqueryPincodeAutotab();
  $('.product-type-list .owl-carousel, .stories .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // direction: rtl,
    rtl: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 5
      },
      1000: {
        items: 9
      }
    }
  })
  $('.home-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // direction: rtl,
    rtl: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
});
jQuery(document).ready(function ($) {
  $(".counter").counterUp({
    delay: 10,
    time: 2000,
  });

});
$(".search-results-input").on("keyup", function (e) {
  console.log(e.target.value);
  $(".search-results-list").fadeIn();
});

$(".search-results-list ul li").on("click", function () {
  let product = $(this).data("id");
  console.log(product);
  $(".search-results-list").fadeOut();

  $(".data-addedd ul").append(`
  <li data-id="${product}"> 
              <input type="hidden" value="${product}" name="products[]" />
                        <div class="side">
                          <div class="table-img"><img src="../../assets/images/product-thumb.png" alt=""></div>
                          <div class="table-two-texts">
                            <h5>خضراوات مشكل</h5>
                            <h6>#54545454</h6>
                          </div>
                        </div>
                        <div class="side">
                          <h5 class="textt-green">45 ريال</h5><a class="delete text-red" href="#"><i class="fas fa-times"> </i></a>
                        </div>
                      </li>
  `);
});
$(".data-addedd ul .delete").on("click", function (e) {
  e.preventDefault();
  $(this).parent().parent().remove();
});

$(document).ready(function () {
  $("#example").DataTable({
    bFilter: false,
    responsive: true,
    scrollX: true,
    language: {
      oPaginate: {
        sFirst: `<i class="fa-solid fa-chevron-right"></i>>`,
        sLast: "Último",
        sNext: `<i class="fa-solid fa-chevron-left"></i>`,
        sPrevious: `<i class="fa-solid fa-chevron-right"></i>`,
      },
    },
  });

  $(".sidbar-icon").on("click", function (event) {
    event.stopPropagation();
    $("#main").addClass("sidbar-active");
    $("body").addClass("menu-active");
  });
  $(".close-menu").on("click", function () {
    $("#main").removeClass("sidbar-active");
    $("body").removeClass("menu-active");
  });

  $(window).on("click", function () {
    $("#main").removeClass("sidbar-active");
    $("body").removeClass("menu-active");
  });

  $(".dash-sidebar").on("click", function (event) {
    event.stopPropagation();
  });
  $(".account-sidebar").on("click", function (event) {
    event.stopPropagation();
  });

  $(".sidbar-icon").on("click", function () {
    $("#main").addClass("sidbar-active");
    $("body").addClass("menu-active");
  });
  $(".close-menu").on("click", function () {
    $("#main").removeClass("sidbar-active");
    $("body").removeClass("menu-active");
  });
  $(".niceselect").niceSelect();

  for (let step = 1; step < 6; step++) {
    $(".go-to-step-" + step).on("click", function () {
      $(`[data-bs-target="#step-${step}-details"]`).click();
      console.log("ameer");
      $(".back").attr("data-back", step - 1);
      $(".custom-progress-parent")
        .removeClass(`step-${step - 1}`)
        .addClass("step-" + step);
      $(".sign-progress-parent")
        .removeClass(`step-${step - 1}`)
        .addClass("step-" + step);

      document.body.scrollTop = document.documentElement.scrollTop = 0;
    });
  }

  $(".list-one").on("click", function () {
    $(".list-product .row").addClass("row-cols-lg-3").removeClass("row-cols-lg-1");
    $(".list-product").addClass("vertical").removeClass("horzintal");

  });
  $(".list-two").on("click", function () {
    $(".list-product .row").addClass("row-cols-lg-1").removeClass("row-cols-lg-3");
    $(".list-product").addClass("horzintal").removeClass("vertical");
  });
  if ($(".list-product").hasClass("vertical")) {
    $(".list-one .non-active, .list-two .active").css(
      "display" , "none"
    );
  }
  // if (!$(".list-product").hasClass("vertical")) {
  //   $(".list-one .active, .list-two .non-active").css(
  //     "display" , "none"
  //   );
  // }



});

$(`.back`).on("click", function () {
  let back = parseInt($(this).attr("data-back"));
  if (back > 0) {
    $(`[data-bs-target="#step-${back}-details"]`).click();
    $(".back").attr("data-back", back - 1);
    $(".custom-progress-parent")
      .removeClass(`step-${parseInt(back) + 1}`)
      .addClass(`step-${parseInt(back)}`);
    $(".sign-progress-parent")
      .removeClass(`step-${parseInt(back) + 1}`)
      .addClass(`step-${parseInt(back)}`);

    document.body.scrollTop = document.documentElement.scrollTop = 0;
  }
});
$(document).ready(function () {
  $(".input-increment").on("click", function (e) {
    e.preventDefault();
    const input = $(this).siblings("input");

    input.val(parseInt(input.val()) + 1);
  });

  $(".input-decrement").on("click", function (e) {
    e.preventDefault();

    const input = $(this).siblings("input");

    if (parseInt(input.val()) >= 1) {
      input.val(parseInt(input.val()) - 1);
    }
  });
  $(".dashboard-layout #main .dash-sidebar").niceScroll();
  $(".account-layout #main .account-sidebar").niceScroll();
  $(".input-image input").on("change", function (event) {
    $(this).parent().parent().addClass("uploadded");

    const output = $(this).siblings(".preview-image");
    const result = URL.createObjectURL(event.target.files[0]);
    output.attr("src", result);
    output.onload = function () {
      URL.revokeObjectURL(output.src); // free memory
    };
  });
});

var input = document.querySelector("#phone"),
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");
var errorMap = [
  "Invalid number",
  "Invalid country code",
  "Too short",
  "Too long",
  "Invalid number",
];

if (input) {
  var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function (callback) {
      $.get("https://ipinfo.io", function () { }, "jsonp").always(function (
        resp
      ) {
        var countryCode = resp && resp.country ? resp.country : "us";
        callback(countryCode);
      });
    },
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/utils.min.js", // just for formatting/placeholders etc
  });

  $("#phone").on("keyup", function () {
    const country = iti.getSelectedCountryData();
    const code = "+" + country.dialCode;
    const number = $(this).val();
    const fullNumber = $("#fullNumber");

    fullNumber.val(code + number);
  });

  var reset = function () {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };
  input.addEventListener("blur", function () {
    reset();
    if (input.value.trim()) {
      if (iti.isValidNumber()) {
        validMsg.classList.remove("hide");
      } else {
        input.classList.add("error");
        var errorCode = iti.getValidationError();
        errorMsg.innerHTML = errorMap[errorCode];
        errorMsg.classList.remove("hide");
      }
    }
  });

  // on keyup / change flag: reset
  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
}

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
      icon: "../../assets/images/location-pin.png",
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

const fullPin = $("#fullPin");
$(".auth-form .myPinCode input").on("keyup", function (e) {
  let inputs = $(".auth-form .myPinCode input");
  let typed = "";
  for (let input = 0; input < inputs.length; input++) {
    const element = inputs[input];
    typed += element.value;
  }
  fullPin.val(typed);
});

$(".building-box input").on("change", function () {
  if ($(".other-building input").prop("checked")) {
    $(".other-building-form").fadeIn();
  } else {
    $(".other-building-form").fadeOut();
  }
});
$(".product-type-list input").on("change", function () {
  if ($(".other-product-type input").prop("checked")) {
    $(".other-product-types-form").fadeIn();
  } else {
    $(".other-product-types-form").fadeOut();
  }
});

$(document).ready(function () {
  var max_fields = 10; //maximum input boxes allowed
  var wrapper = $(".input_fields_wrap"); //Fields wrapper
  var add_button = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function (e) {
    //on add input button click
    e.preventDefault();
    if (x < max_fields) {
      //max input box allowed
      x++; //text box increment
      $(wrapper).append(
        `
              <div class="row input_fields_wrap align-items-center"> 
                    <div class="col-lg-6"> 
                      <div class="form-group">
                        <label for=""> الكمية</label>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                          <div class="d-flex align-items-center mb-2">
                            <label style="min-width:70px"> من</label>
                            <input class="form-control" type="text">
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <label style="min-width:70px"> إلى</label>
                            <input class="form-control" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5"> 
                      <div class="form-group"> 
                        <label for="input-701">السعر</label>
                        <input class="form-control" type="text" id="input-701">
                        <div class="value-text">دينار</div>
                      </div>
                    </div>
                    <div class="col-lg-1"> <a href="#" class="remove_field btn btnn btnn-red">x</a></div>
                <div>
                  
                  
                `
      ); //add input box
    }
  });

  $(wrapper).on("click", ".remove_field", function (e) {
    //user click on remove text
    e.preventDefault();
    $(this).parent("div").parent("div").remove();
    x--;
  });
});

$(document).on("click", ".nice-select .option:not(.disabled)", function (t) {
  var s = $(this);
  const vall = s.data("value");
  console.log(s.data("value"));
  $(".Discount-amount").fadeOut();
  $(".discount-percentage").fadeOut();

  if ($(".choose-amount select option:nth-child(1)").val() == vall) {
    $(".Discount-amount").fadeIn();
  }

  if ($(".choose-amount select option:nth-child(2)").val() == vall) {
    $(".discount-percentage").fadeIn();
  }
});
$(".multi-select").on("load", function () {
  console.log("ameer");
  console.log($(this).data("options"));
});
$(".custom-js-tabs .nav-link").on("click", function () {
  const tab = $(this).data("tab");

  $(this).parent().siblings().children(".nav-link").removeClass("active");
  $(this).addClass("active");
  $(this)
    .parent()
    .parent()
    .siblings(".tab-content")
    .children(".tab-pane")
    .removeClass("active")
    .removeClass("show");
  $(this)
    .parent()
    .parent()
    .siblings(".tab-content")
    .children(`.${tab}`)
    .addClass("active")
    .addClass("show");
});
const multiSelectMethod = (id) => {
  const options = $(id).data("options");
  const value = $(id).data("value");
  console.log(options);
  console.log(typeof options);

  console.log(options.map((item) => item.value));
  var multi = new SelectPure(id, {
    options,
    value,
    multiple: true,
    icon: "fa fa-times",
    onChange: (value) => {
      console.log(value);
    },
  });
};
$('#table-parent').on('change', function (e) {

  $('.td-check').prop('checked', e.target.checked)
})
$('.td-check').on('change', function (e) {

  $('#table-parent').prop('checked', false)
})
$('#table-parent , .td-check').on('change', function (e) {
  if ($('.td-check').is(':checked')) {
    $('.btn-active-disactive').fadeIn()


  } else {

    $('.btn-active-disactive').fadeOut()

  }

})
function makeid(length) {
  var result = '';
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() *
      charactersLength));
  }
  return result;
}
$('.code-generator-btn').on('click', function () {
  $('.code-generator-box input').val(makeid(8))
})
const multiSelects = $(".cus-multi-select");
for (
  let newMultiIndex = 0;
  newMultiIndex < multiSelects.length;
  newMultiIndex++
) {
  const multiSelect = multiSelects[newMultiIndex];
  multiSelectMethod("#" + multiSelect.id);
}

// multiSelect("#zoneOptions");
