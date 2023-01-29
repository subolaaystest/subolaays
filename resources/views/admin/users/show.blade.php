@extends('layout.adminLayout')

@section('title')  
    <img src="{{ url('uploads/icons/people.png') }}">
    {{ucwords(__('cp.users'))}}
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
                        <span class="caption-subject font-dark sbold uppercase" style="color: #e02222 !important;">{{__('cp.users')}}</span>

                        <a href="{{url(getLocal().'/admin/users/'.$item->id.'/edit')}}" class="btn btn-xs tooltips" data-container="body" data-placement="top" data-original-title="{{__('cp.edit')}}">
                            <img src="{{ url('uploads/icons/writing.png') }}">
                         </a>

                    </div>
                </div>

                <div class="portlet-body form">

                



                    <fieldset style="padding: 10px; background-color: #f2f2f2;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="order"> {{__('cp.name')}} </label>
                            <div class="col-md-10 bold"> {{@$item->full_name}} </div>
                        </div>
                    </fieldset>


                    <fieldset style="padding: 10px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="order"> 
                                <i class="fa fa-phone-square" aria-hidden="true"></i> {{__('cp.mobile')}} </label>
                            <div class="col-md-10 bold"> {{@$item->mobile}} </div>
                        </div>
                    </fieldset>


                    <fieldset style="padding: 10px; background-color: #f2f2f2;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="code"> 
                                <i class="fa fa-globe" aria-hidden="true"></i> {{__('cp.country')}} </label>
                            <div class="col-md-10 bold"> {{ @$item->country->name}} </div>
                        </div>
                    </fieldset> 


                    <fieldset style="padding: 10px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="code"> 
                                <i class="fa fa-map-marker" aria-hidden="true"></i> {{__('cp.city')}} </label>
                            <div class="col-md-10 bold"> {{ @$item->city->name}} </div>
                        </div>
                    </fieldset> 


                    <fieldset style="padding: 10px; background-color: #f2f2f2;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="order"> 
                                <i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('cp.email')}} </label>
                            <div class="col-md-10 bold"> {{@$item->email}} </div>
                        </div>
                    </fieldset>



                    <fieldset style="padding: 10px;">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="code"> 
                                <i class="fa fa-tasks" aria-hidden="true"></i> {{__('cp.tasks')}} </label>
                            <div class="col-md-10 bold"> {{ @$item->task->name}} </div>
                        </div>
                    </fieldset> 



                    <fieldset style="padding: 10px;">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{url(@$item->image_profile)}}" id="editImage">
                                </div>
                            </div>
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
