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
                              style="color: #e02222 !important;"> {{__('cp.add')}} {{__('cp.posts')}} </span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/posts')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}

                        <div class="form-body">


                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="category_id">
                                        {{__('cp.select')}} {{__('cp.category')}}
                                    </label>
                                    <div class="col-md-6">
                                        <select name="category_id" id="category_id" class="form-control">
                                            @foreach($categories as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="title_{{$locale->lang}}">
                                            {{__('cp.title_'.$locale->lang)}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="title_{{$locale->lang}}"
                                                   id="title_{{$locale->lang}}"
                                                   value="{{ old('title_'.$locale->lang) }}">
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>


                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="order">
                                            {{__('cp.description_'.$locale->lang)}} <span class="symbol">*</span>
                                        </label>

                                        <div class="col-md-6">
                                            <textarea class="ckeditor form-control" name="details_{{$locale->lang}}"
                                                      id="order">{{ old('description_'.$locale->lang) }}</textarea>
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
                                               id="url" value="{{ old('url') }}">
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="form-group" style="margin-right: 8%;">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_marquee" id="is_marquee">
                                    <label class="form-check-label" for="is_marquee">
                                        اظهار في الشريط المتحرك
                                    </label>
                                </div>
                            </fieldset>


                            <fieldset>
                                <legend>{{__('cp.image')}}</legend>
                                <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-3">
                                        @if ($errors->has('logo'))
                                            <span class="help-block">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                                        @endif
                                        <div class="fileinput-new thumbnail"
                                             onclick="document.getElementById('edit_image').click()"
                                             style="cursor:pointer">
                                            <img src=" {{url(admin_assets('/images/ChoosePhoto.png'))}}" id="editImage">
                                        </div>
                                        <div class="btn red" onclick="document.getElementById('edit_image').click()">
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
                                        <div class="imageupload" style="display:flex;flex-wrap:wrap"></div>
                                        <div class="input-group control-group increment">
                                            <div class="input-group-btn"
                                                 onclick="document.getElementById('all_images').click()">
                                                <button class="btn btn-success" type="button"><i
                                                            class="glyphicon glyphicon-plus"></i>{{__("cp.addImages")}}
                                                </button>
                                            </div>
                                            <input type="file" class="form-control hidden" accept="image/*"
                                                   id="all_images" multiple/>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.add')}}</button>
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

@section('js')

@endsection

@section('script')

    <script>

        $('#all_images').on('change', function (e) {
            readURLMultiple(this, $('.imageupload'));
        });

        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });

    </script>

@endsection

