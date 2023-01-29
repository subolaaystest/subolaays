@extends('layout.adminLayout')

@section('title')  
<img src="{{ url('uploads/icons/settings.png') }}"> {{ucwords(__('cp.setting'))}}
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
                        <span class="caption-subject font-dark sbold uppercase" style="color: #e02222 !important;">{{__('cp.edit')}}{{__('cp.setting')}}</span>
                    </div>
                </div>


                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/settings')}}" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        <div class="form-body">



                        @foreach($locales as $locale)                                
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="title">
                                    {{__('cp.siteTitle_'.$locale->lang)}}
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="title" name="title_{{$locale->lang}}" value="{{old('title_'.$locale->lang,@$item->translate($locale->lang)->title)}}">
                                </div>
                            </div>
                        @endforeach



                        @foreach($locales as $locale)
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="description">
                                    {{__('cp.description_'.$locale->lang)}}
                                </label>
                                <div class="col-md-6">
                                    <textarea rows="4" id="description" class="form-control" name="description_{{$locale->lang}}" placeholder="{{__('cp.description_'.$locale->lang)}}" id="description_{{$locale->lang}}">{{ old('cp.description_'.$locale->lang, @$item->translate($locale->lang)->description) }}</textarea>
                                </div>
                            </div>
                        @endforeach        



                        @foreach($locales as $locale)
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="keywords">
                                {{__('cp.keywords_'.$locale->lang)}}
                            </label>
                            <div class="col-md-6">
                                <textarea rows="4" id="keywords" class="form-control" name="keywords_{{$locale->lang}}" placeholder="{{__('cp.keywords_'.$locale->lang)}}" id="keywords_{{$locale->lang}}">{{ old('cp.keywords_'.$locale->lang, @$item->translate($locale->lang)->keywords) }}</textarea>
                            </div>
                        </div>
                        @endforeach        

                                
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="email">
                                {{__('cp.email')}}
                            </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{old('email',$item->email)}}" id="email">
                            </div>
                        </div>


                         
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="phone">
                                {{__('cp.phone')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{old('phone', $item->phone)}}" id="phone">
                            </div>
                        </div>


                       
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="mobile">
                                {{__('cp.mobile')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="{{old('mobile', $item->mobile)}}" id="mobile">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="whatsapp">
                                {{__('cp.whatsapp')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="whatsapp" value="{{old('whatsapp', $item->whatsapp)}}" id="whatsapp">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="facebook">
                                {{__('cp.facebook')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="facebook" value="{{old('facebook', $item->facebook)}}" id="facebook">
                            </div>
                        </div>

                        
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="twitter">
                                {{__('cp.twitter')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="twitter" value="{{old('twitter', $item->twitter)}}" id="twitter">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="linked_in">
                                {{__('cp.linked_in')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="linked_in" value="{{old('linked_in', $item->linked_in)}}" id="linked_in">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="instagram">
                                {{__('cp.instagram')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="instagram" value="{{old('instagram', $item->instagram)}}" id="instagram">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="snapchat">
                                {{__('cp.snapchat')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="snapchat" value="{{old('snapchat', $item->snapchat)}}" id="snapchat">
                            </div>
                        </div>

                     
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="telegram">
                                {{__('cp.telegram')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telegram" value="{{old('telegram', $item->telegram)}}" id="telegram">
                            </div>
                        </div>
                    
               

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="youtube">
                                {{__('cp.youtube')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="youtube" value="{{old('youtube', $item->youtube)}}" id="youtube">
                            </div>
                        </div>



                            <fieldset>
                                <div class="form-group" style="border-top: 1px dotted #ccc; padding-top: 15px;">
                                    <label class="col-sm-2 control-label bold" for="edit_logo">
                                        {{__('cp.logo')}}
                                    </label>
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="fileinput-new thumbnail" onclick="document.getElementById('edit_logo').click()" style="cursor:pointer">
                                            <img src="{{url($item->logo)}}" id="editlogo">
                                        </div>
                                        {{-- <div class="btn red" onclick="document.getElementById('edit_logo').click()">
                                            <i class="fa fa-pencil"></i> {{__('cp.change_image')}}
                                        </div> --}}
                                        <input type="file" class="form-control" name="logo" id="edit_logo" style="display:none">
                                    </div>
                                </div>
                            </fieldset>



                            <fieldset>
                                <div class="form-group" style="border-top: 1px dotted #ccc; padding-top: 15px;">
                                    <label class="col-sm-2 control-label bold" for="edit_image">
                                        {{__('cp.image')}}
                                    </label>
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="fileinput-new thumbnail" onclick="document.getElementById('edit_image').click()" style="cursor:pointer">
                                            <img src="{{url($item->image)}}" id="editImage">
                                        </div>
                                        {{-- <div class="btn red" onclick="document.getElementById('edit_image').click()">
                                            <i class="fa fa-pencil"></i> {{__('cp.change_image')}}
                                        </div> --}}
                                        <input type="file" class="form-control" name="image" id="edit_image" style="display:none">
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
