@yield('before_scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"> </script>
<script src="{{asset('website_assets/assets/js/jquery-pincode-autotab.min.js')}}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"> </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSbSmPAGJ9yjR_hfPXnHBH_5zplpE_5sY&amp;callback=initAutocomplete&amp;libraries=places&amp;v=weekly" defer></script>
<script src="{{asset('website_assets/assets/js/bundle.min.js')}}"> </script>
<script src="{{asset('website_assets/assets/js/moreFields.js')}}"> </script><script src="{{asset('website_assets/assets/js/fotorama.js')}}"> </script>
<script src="{{asset('website_assets/assets/js/main.js')}}"> </script>
<script src="{{asset('website_assets/assets/js/charts.js')}}"> </script>
<script src="{{asset('website_assets/assets/js/zuck.min.js')}}"> </script>
<script src="{{asset('website_assets/assets/js/story.js')}}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"> </script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
      rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
<script>
    function toggleLanguage(){
      $('#lang').text($('#lang').text() == 'ar' ? 'en' : 'ar');
      $('#language').text($('#lang').text() == 'ar' ? 'العربية' : 'English');
    }
</script>
{{-- script for currency type on the pages of website --}}
<script>
    $('#currency').on('change',function(){
        currency = $('#currency').find(":selected").val()
        $.ajax({
            type: "GET",
            url: "{{route('currencySession')}}",
            data : {
                'currency' :  currency
            },
            success:function(response) {
                location.reload()
            }
        });
    });
</script>
@yield('scripts')
@stack('js')
</html>
