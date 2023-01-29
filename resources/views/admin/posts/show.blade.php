@extends('layout.adminLayout')

@section('title')
<i class="fa fa-file-text" aria-hidden="true"></i>
{{ucwords(__('cp.posts'))}}
@endsection

@section('css')
    
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"
                              style="color: #e02222 !important;">{{__('cp.posts')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
             



                    
                    <fieldset style="margin-top:10px; margin-bottom:10px;">
                        <div class="form-group">
                            <div class="col-md-2"> <img src="{{url(@$item->image)}}" style="width: 120px;"> </div>
                            <div class="col-md-10">  



                    <fieldset style="padding: 10px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="order"> {{__('cp.doctor')}} </label>
                            <div class="col-md-10 bold"> {{@$item->doctor->full_name}} </div>
                        </div>
                    </fieldset>


                        <fieldset style="padding: 10px; background-color: #f2f2f2;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order"> {{__('cp.name_ar')}} </label>
                                <div class="col-md-10 bold"> {{@$item->translate('ar')->name}} </div>
                            </div>
                        </fieldset>


                        <fieldset style="padding: 10px;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order"> {{__('cp.name_en')}} </label>
                                <div class="col-md-10 bold"> {{@$item->translate('en')->name}} </div>
                            </div>
                        </fieldset>


                        
                </div>
            </div>
        </fieldset>





        

                        <fieldset style="padding: 10px; background-color: #f2f2f2;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order"> {{__('cp.details_ar')}} </label>
                                <div class="col-md-10 bold"> {!! @$item->translate('ar')->details !!} </div>
                            </div>
                        </fieldset>


                        <fieldset style="padding: 10px;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order"> {{__('cp.details_en')}} </label>
                                <div class="col-md-10 bold"> {!! @$item->translate('en')->details !!} </div>
                            </div>
                        </fieldset>


    
                   

                </div>
            </div>
        </div>
    </div>



@endsection
@section('js')
@endsection
@section('script')


@endsection
