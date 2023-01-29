@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.coverPoints'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.coverPoints') }} <span>( {{ count($areas) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createCoverPoints') }}"> {{ __('translate.CreateNewPoint') }} </a>
        </div>


            <div class="page-content-inner">
                <div class="cover-points-sec">
                    <div class="row">


                        @isset($areas)
                        @foreach ($areas as $one)
                        <div class="col-lg-6">
                            <div class="cover-point-sec">
                                <div class="form-check form-switch form-switch-md">

                                    <input class="form-check-input changeCoverPointStatus" type="checkbox" data-id="{{ @$one->id }}" {{ $one->status == 'active'? 'checked' : '' }} id="switch0" role="switch"/>


                                    <label class="form-check-label" for="switch7"></label>
                                    <img class="bg-image-checked" src="{{ url('frontend/images/active-cover-points.png') }}" alt="">
                                    <img class="bg-image" src="{{ url('frontend/images/cover-points-box.png') }}" alt="">
                                    <div class="text">
                                        <h2> {{ @$one->address }} </h2>
                                        <h3>مساحة الزون: {{ @$one->zone_size }} الف كم/ مربع</h3>
                                        <h4>المنطقة:  {{ @$one->city->name }} </h4>
                                        <h5>الحى :  {{ @$one->district }} </h5>
                                        <h6> {{ @$one->postal_code }} </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset


                    </div>
                </div>
            </div>

    </div>

@endsection



@section('script')
    <script>
        $('.changeCoverPointStatus').on('click', function () {
            var coverPoint = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeCoverPointStatus/') }}";

            if(coverPoint){
            $.ajax({
                type: "GET",
                url: url+'/'+coverPoint,
                success: function (response) {
                    if(response)
                    {
                    }
                }
            });
            }
        });
</script>
@endsection

