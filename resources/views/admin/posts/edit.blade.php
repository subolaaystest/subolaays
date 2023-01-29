@extends('layout.adminLayout')

@section('title')
    <i class="fa fa-file-text" aria-hidden="true"></i>
    {{__('cp.posts')}}
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
                              style="color: #e02222 !important;">{{__('cp.edit')}} {{__('cp.posts')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/posts/'.$item->id)}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}


                        <div class="form-body">

                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="code">
                                        {{__('cp.select')}} {{__('cp.category')}}
                                    </label>
                                    <div class="col-md-6">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value=""></option>
                                            @foreach($categories as $one)
                                                <option {{ $one->id == $item->category_id? "selected" : "" }} value="{{$one->id}}">{{$one->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="title_{{$locale->lang}}">
                                            {{__('cp.title_'.$locale->lang)}} <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="title_{{$locale->lang}}"
                                                   id="title_{{$locale->lang}}"
                                                   value="{{ @$item->translate($locale->lang)->title}}" >
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>


                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="details">
                                            {{ __('cp.details') }}
                                        </label>
                                        <div class="col-md-6">
                                            <textarea class="ckeditor form-control" name="details_{{$locale->lang}}"
                                                      id="details">{{ @$item->translate($locale->lang)->details}}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>


                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="url">
                                        {{__('cp.youtubeURL')}} <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="url"
                                               id="url" value="{{ old('url',$item->url) }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group" style="margin-right: 8%;">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_marquee" id="is_marquee" {{ $item->is_marquee == 1? 'checked': '' }}>
                                    <label class="form-check-label" for="is_marquee">
                                        اظهار في الشريط المتحرك
                                    </label>
                                </div>
                            </fieldset>



                            <fieldset>
                                <legend>{{__('cp.image')}}</legend>
                                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-3">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                     </span>
                                        @endif
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image').click()"
                                             style="cursor:pointer">
                                            <img src="@if($item->image){{$item->image}} @else  {{ url(admin_assets('/images/ChoosePhoto.png'))}} @endif"
                                                 id="editImage">
                                        </div>
                                        <div class="btn red"
                                             onclick="document.getElementById('edit_image').click()">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <input type="file" class="form-control" name="image" id="edit_image"
                                               style="display:none">
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <legend>{{__('cp.images')}}</legend>
                                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-3">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                        @endif
                                        <div class="imageupload" style="display:flex;flex-wrap:wrap">
                                            @foreach($item->photos as $one)
                                                <div class="imageBox text-center" style="width:150px;height:190px;margin:5px">
                                                    <img src="{{$one->image}}" style="width:150px;height:150px">
                                                    <button class="btn btn-danger deleteImage" type="button">{{__("cp.remove")}}</button>
                                                    <input class="attachedValues" type="hidden" name="oldImages[]" value="{{$one->id}}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="input-group control-group increment" >
                                            <div class="input-group-btn"  onclick="document.getElementById('all_images').click()">
                                                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i> {{__("cp.addImages")}}</button>
                                            </div>
                                            <input type="file" class="form-control hidden"  accept="image/*" id="all_images"  multiple />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>



                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.edit')}}</button>
                                        <a href="{{url(getLocal().'/admin/posts')}}"
                                           class="btn default">{{__('cp.cancel')}}</a>
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


@section('script')
    <script>

        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });


        $('#all_images').on('change', function (e) {
            readURLMultiple(this, $('.imageupload'));
        });

        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });

    </script>
@endsection

