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
                        <span class="caption-subject font-dark sbold uppercase" style="color: #e02222 !important;">{{__('cp.user_edit')}}</span>
                    </div>
                </div>

                <div class="portlet-body form">
                    <form method="post" action="{{route('admin.users.update',$item->id)}}" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                    {{ csrf_field() }}
                    {{ method_field('PATCH')}}

                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order">
                                    {{__('cp.name')}} <span class="symbol">*</span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{@$item->full_name}}" required>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order">
                                    {{__('cp.mobile')}} <span class="symbol">*</span>
                                </label>
                                <div class="col-md-6">
                                    <input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" type="text" class="form-control" name="mobile" value="{{@$item->mobile}}" {{ old('mobile') }} required>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="code">
                                    {{__('cp.select')}} {{__('cp.country')}}
                                </label>
                                <div class="col-md-6">  
                                    <select name="country_id" id="country_id" class="form-control country">
                                        @foreach($countries as $one)
                                            <option {{ $item->country_id == $one->id? "selected" : "" }} value="{{$one->id}}">{{$one->name}}</option>
                                        @endforeach   
                                    </select>           
                                </div>
                            </div>
                        </fieldset> 


                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="code">
                                    {{__('cp.city')}} <span class="symbol">*</span>
                                </label>
                                <div class="col-md-6">  
                                    <select name="city_id" id="city_id" class="form-control city">
                                        @foreach($cities as $one)
                                            <option {{$item->city_id == $one->id? "selected" : ""}} value="{{$one->id}}">{{$one->name}}</option>
                                        @endforeach   
                                    </select>           
                                </div>
                            </div>
                        </fieldset> 

                        


             <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="code">
                                    {{__('cp.select')}} {{__('cp.tasks')}}
                                </label>
                                <div class="col-md-6">  
                                    <select name="task_id" id="task_id" class="form-control">
                                        @foreach($tasks as $one)
                                            <option  {{$item->task_id == $one->id? "selected" : ""}} value="{{$one->id}}">{{$one->name}}</option>
                                        @endforeach   
                                    </select>           
                                </div>
                            </div>
                        </fieldset> 


                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="order">
                                    {{__('cp.email')}} <span class="symbol">*</span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" placeholder="{{__('cp.email')}}"  value="{{@$item->email}}" disabled>
                                </div>
                            </div>
                        </fieldset>


                        <fieldset>
                            <legend>{{__('cp.profile_image')}}</legend>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="fileinput-new thumbnail" onclick="document.getElementById('edit_image').click()" style="cursor:pointer">
                                        <img src="{{url(@$item->image_profile)}}" id="editImage">
                                    </div>
                                    <div class="btn red" onclick="document.getElementById('edit_image').click()">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="file" class="form-control" name="image_profile" id="edit_image" style="display:none">
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">{{__('cp.submit')}}</button>
                                    <a href="{{url(getLocal().'/admin/users')}}" class="btn default">{{__('cp.cancel')}}</a>
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
    </script>
@endsection
