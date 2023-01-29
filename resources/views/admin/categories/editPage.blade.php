@extends('layout.adminLayout')


@section('title') 
<img src="{{ url('uploads/icons/pages.png') }}">
{{__('website.pages_managment')}}
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
                              style="color: #e02222 !important;">{{__('cp.edit')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/updatePage/')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{-- {{ method_field('PATCH')}} --}}
                        <div class="form-body">


                        <input type="hidden" name="id" value="{{ $item->id }}">


                                <fieldset>
                                    @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="name_{{$locale->lang}}">
                                            {{__('cp.name')}} <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name_{{$locale->lang}}"
                                                   id="name_{{$locale->lang}}"
                                                   value="{{ @$item->translate($locale->lang)->name}}" required>
                                        </div>
                                    </div>
                                @endforeach
                                </fieldset>





                                <fieldset>
                                    @foreach($locales as $locale)
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="details">
                                                {{__('cp.details')}} 
                                            </label>
                                            <div class="col-md-6">
                                                    <textarea class="ckeditor form-control" name="details_{{$locale->lang}}" id="details"
                                                             required>{{@$item->translate($locale->lang)->details}}</textarea>
                                            </div>
                                        </div>
                                    @endforeach
                                </fieldset>
                                



                                <fieldset>
                                    <legend>{{__('cp.image')}}</legend>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="fileinput-new thumbnail"
                                                 onclick="document.getElementById('edit_image').click()"
                                                 style="cursor:pointer">
                                                <img src="{{url($item->image)}}" id="editImage">
                                            </div>
                                            <div class="btn red"
                                                 onclick="document.getElementById('edit_image').click()">
                                                <i class="fa fa-pencil"></i>
                                            </div>
                                            <input type="file" class="form-control" name="image"
                                                   id="edit_image"
                                                   style="display:none">
                                        </div>
                                    </div>
                                </fieldset>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.edit')}}</button>
                                        <a href="{{url(getLocal().'/admin/pages')}}" class="btn default">{{__('cp.cancel')}}</a>
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

    </script>

@endsection

