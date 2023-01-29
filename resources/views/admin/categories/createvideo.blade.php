@extends('layout.adminLayout')


@section('title') 
<img src="{{ url('uploads/icons/video.png') }}">
{{__('website.video')}}
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
                              style="color: #e02222 !important;">{{__('cp.add')}}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{url(app()->getLocale().'/admin/insertvideo')}}"
                          enctype="multipart/form-data" class="form-horizontal" role="form" id="form">
                        {{ csrf_field() }}

                        <div class="form-body">



                                <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="title_{{$locale->lang}}">
                                            {{__('cp.title')}} <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="title_{{$locale->lang}}"
                                                   id="title_{{$locale->lang}}" value="{{ old('title_'.$locale->lang) }}" required>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>


                            <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="url">
                                            {{__('cp.url')}} <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="url"
                                                   id="url" value="{{ old('url') }}" required>
                                        </div>
                                    </div>
                            </fieldset>

{{-- 
                            <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="summary">
                                            {{ __('website.summary') }}
                                        </label>
                                        <div class="col-md-6">
                                                <textarea class="form-control" style="height: 130px;" name="summary_{{$locale->lang}}" id="summary" required>{{ old('summary_'.$locale->lang) }}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset> --}}



                            {{-- <fieldset>
                                @foreach($locales as $locale)
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="details">
                                            {{ __('cp.details') }}
                                        </label>
                                        <div class="col-md-6">
                                                <textarea class="ckeditor form-control" name="details_{{$locale->lang}}" id="details" required>{{ old('details_'.$locale->lang) }}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>        
                   --}}


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
                                                <img src=" {{url(admin_assets('/images/ChoosePhoto.png'))}}"  id="editImage">
                                            </div>
                                            <div class="btn red" onclick="document.getElementById('edit_image').click()">
                                                <i class="fa fa-pencil"></i>
                                            </div>
                                            <input type="file" class="form-control" name="image" id="edit_image" style="display:none">
                                        </div>
                                    </div>
                                </fieldset>

                           


                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">{{__('cp.add')}}</button>
                                        <a href="{{url(getLocal().'/admin/video')}}" class="btn default">{{__('cp.cancel')}}</a>
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
    $(document).ready(function(){
        $('form').ajaxForm({
            beforeSend:function(){
                $('#success').empty();
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
            },
            uploadProgress:function(event, position, total, percentComplete){
                $('.progress-bar').text(percentComplete + '0%');
                $('.progress-bar').css('width', percentComplete + '0%');
            },
            success:function(data)
            {
                if(data.success)
                {
                    $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
                    $('#success').append(data.image);
                    $('.progress-bar').text('Uploaded');
                    $('.progress-bar').css('width', '100%');
                }
            }
        });
    });
    </script>
    
    <script type="text/javascript">
    
        $(document).ready(function() {
    
          $(".btn-success").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
    
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".control-group").remove();
          });
    
        });
    
    </script>
    

    <script>


        $('#all_images').on('change', function (e) {
            readURLMultiple(this, $('.imageupload'));
        });        

        $('#edit_image').on('change', function (e) {
            readURL(this, $('#editImage'));
        });



    </script>




@endsection

