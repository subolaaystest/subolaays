@extends('layout.adminLayout')

@section('title')  
<img src="{{ url('uploads/icons/complaints.png') }}"> {{ucwords(__('website.complaints'))}}
@endsection

@section('css')
@endsection




@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase" style="color: #e02222 !important;">
                            {{__('cp.edit')}}
                        </span>
                    </div>
                </div>


                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/complaints')}}" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        <di class="form-body">


          

                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="url">
                                        {{ __('cp.url') }}
                                    </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" style="height: 130px; text-align: left;" name="url" id="url" required>{{ @$item->url}}</textarea>
                                    </div>
                                </div>
                            </fieldset>    




                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.submit')}}</button>
                                        <a href="{{url(getLocal().'/admin/home')}}" class="btn default">{{__('cp.cancel')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
@endsection


@section('script')
<script>
    $('#edit_image').on('change', function (e) {
        readURL(this, $('#editImage'));
    });


    $('#edit_logo').on('change', function (e) {
        readURL(this, $('#editlogo'));
    });

    function format(){
        var e = document.getElementById("type");
        var type = e.options[e.selectedIndex].value;
        //alert(type);

        if(type == 2){

            $('#park').removeClass('hidden');
            $('#edu').prop('required',true);
        }

        if(type == 1){
            $('#park').addClass('hidden');
            $('#edu').prop('required',false);
        }

    }



    /* script */
    function initialize() {
        var latlng = new google.maps.LatLng('{{$setting->latitude}}', '{{$setting->longitude}}');
        var map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 10
        });
        var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });
        var input = document.getElementById('searchInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var geocoder = new google.maps.Geocoder();
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        var infowindow = new google.maps.InfoWindow();
        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            bindDataToForm(place.formatted_address, place.geometry.location.lat(), place.geometry.location.lng());
            infowindow.setContent(place.formatted_address);
            infowindow.open(map, marker);

        });
        // this function will work on marker move event into map
        google.maps.event.addListener(marker, 'dragend', function () {
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        bindDataToForm(results[0].formatted_address, marker.getPosition().lat(), marker.getPosition().lng());
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        });
    }

    function bindDataToForm(address, lat, lng) {
        document.getElementById('location').value = address;
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;
//                                                console.log('location = ' + address);
//                                                console.log('lat = ' + lat);
//                                                console.log('lng = ' + lng);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
