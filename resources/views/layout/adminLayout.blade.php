<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>
        {{ $setting->title }}
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports"
          name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <link href="{{admin_assets('/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>

    @yield('css_file_upload')

    <link href="{{admin_assets('global/plugins/datatables/datatables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable-rtl.css')}}"
          rel="stylesheet"
          type="text/css"/>

    <link href="{{admin_assets('/global/css/components-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('/layouts/layout4/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('/layouts/layout4/css/themes/default-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('/layouts/layout4/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets('global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{admin_assets('layouts/layout4/css/customize-style.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{admin_assets('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <style type="text/css">
        .page-breadcrumb {
            direction: rtl;
        }

        .widget-row {
            margin-top: 45px;
        }

        .btn-group {
            float: right;
        }

        body {
            direction: rtl;
        }


        .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group {
            margin-right: 4px;
        }

        .mt-checkbox > span:after {

            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }


        .fa {
            transform: rotate(180 edg);
        }

        .select2-results__option[aria-selected] {
            cursor: pointer;
            text-align: right;
        }

        .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
            background: transparent;
            padding: 0 12px;
            height: 32px;
            line-height: 1.42857;
            margin-top: 0;
            min-width: 5em;
            text-align: right;
        }

        .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
            color: #555;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: default;
            float: right;
            margin: 5px 0 0 6px;
            padding: 0 6px
        }

        .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
            color: #555;
            padding: 0;
            text-align: right;
        }


    </style>

    @yield('css')


    <link rel="icon" href="{{$setting->logo}}">
    <style type="text/css">

        input[type=file] {

            display: inline;

        }

        #image_preview {
            display: inline;
            padding: 10px;

        }

        #image_preview img {
            display: inline;
            width: 200px;

            padding: 5px;

        }

    </style>

    <style>
        .checked {
            color: orange;
        }

        .unchecked {
            color: silver;
        }
    </style>
</head>


<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

<div class="page-header navbar navbar-fixed-top" style="background-color: green;">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/admin/home')}}">
                <img src="{{$setting->logo}}"
                     style="margin: 3px 10px 0 !important; height: 70px;" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->


        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{auth()->guard('admin')->user()->name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('admin.admins.edit',auth()->guard('admin')->user()->id) }}">
                                    {{__('cp.edit_my_profile')}}
                                </a>


                            </li>
                            <li>
                                <a href="{{route('admin.admins.edit_password',auth()->guard('admin')->user()->id)}}">
                                    {{__('cp.Change Password')}}

                                </a>
                            </li>


                            <li>

                                <a href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{__('cp.logout')}}
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>


<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">

    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">


                <li class="nav-item {{(explode("/", request()->url())[4] == "home") ? "active open" : ''}} start">
                    <a href="{{url('/admin/home')}}" class="nav-link">
                        <img src="{{ url('uploads/icons/house.png') }}">
                        <span class="title">{{__('cp.home')}}</span>
                    </a>
                </li>


                @if(can('posts'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "posts") ? "active open" : ''}}">
                        <a href="{{url('/admin/posts')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/posts.png') }}">
                            <span class="title">{{__('website.posts_managment')}}</span>
                        </a>
                    </li>
                @endif

                @if(can('pages'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "pages") ? "active open" : ''}}">
                        <a href="{{url('/admin/pages')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/pages.png') }}">
                            <span class="title">{{__('website.pages_managment')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('prisoners_data'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "prisoners_data") ? "active open" : ''}}">
                        <a href="{{url('/admin/prisoners_data')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/prisoners_data.png') }}">
                            <span class="title">{{__('website.prisoners_data')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('salaries'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "salaries") ? "active open" : ''}}">
                        <a href="{{url('/admin/salaries')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/salaries.png') }}">
                            <span class="title">{{__('website.salaries')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('procedures'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "procedures") ? "active open" : ''}}">
                        <a href="{{url('/admin/procedures')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/procedures.png') }}">
                            <span class="title">{{__('website.procedures')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('ads'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "ads") ? "active open" : ''}} ">
                        <a href="{{url('/admin/ads')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/ads.png') }}">
                            <span class="title">{{__('cp.ads')}}</span>
                        </a>
                    </li>
                @endif

                @if(can('services_bars'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "services_bars") ? "active open" : ''}} ">
                        <a href="{{url('/admin/services_bars')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/services_bars.png') }}">
                            <span class="title">{{__('website.services_bars')}}</span>
                        </a>
                    </li>
                @endif



                @if(can('statistics'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "statistics") ? "active open" : ''}} ">
                        <a href="{{url('/admin/statistics')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/statistics.png') }}">
                            <span class="title">{{__('website.statistics')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('complaints'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "complaints") ? "active open" : ''}} ">
                        <a href="{{url('/admin/complaints')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/complaints.png') }}">
                            <span class="title">{{__('website.complaints')}}</span>
                        </a>
                    </li>
                @endif


                @if(can('visitors'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "visitors") ? "active open" : ''}} ">
                        <a href="{{url('/admin/visitors')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/visitors.png') }}">
                            <span class="title"> إحصائيات الزوار </span>
                        </a>
                    </li>
                @endif

                @if(can('settings'))
                    <li class="nav-item {{(explode("/", request()->url())[4] == "settings") ? "active open" : ''}} ">
                        <a href="{{url('/admin/settings')}}" class="nav-link nav-toggle">
                            <img src="{{ url('uploads/icons/settings.png') }}">
                            <span class="title">{{__('cp.setting')}}</span>
                        </a>

                    </li>
                @endif

            </ul>
        </div>

    </div>


    {{--Begin Content--}}
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-head">
                <div class="page-title">
                    <h1>@yield('title')
                    </h1>
                </div>
            </div>


            @if (count($errors) > 0)
                <ul class="alert-dismissible" style="border: 1px solid #e02222; background-color: white">
                    @foreach ($errors->all() as $error)
                        <li style="color: #e02222; margin: 15px">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if (session('status'))
                <ul class="alert-dismissible" style="border: 1px solid #01b070; background-color: white">
                    <li style="color: #01b070; margin: 15px">{{  session('status')  }}</li>
                </ul>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- END CONTENT -->


</div>

<div id="deleteAll" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{__('cp.delete')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{__('cp.confirmDeleteAll')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                <a href="#" class="confirmAll" data-action="delete">
                    <button class="btn btn-danger">{{__('cp.delete')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{__('cp.activation')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{__('cp.confirmActiveAll')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                <a href="#" class="confirmAll" data-action="active">
                    <button class="btn btn-success">{{__('cp.Yes')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="cancel_activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{__('cp.cancel_activation')}}</h4>
            </div>
            <div class="modal-body">
                <p>{{__('cp.confirmNotActiveAll')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('cp.cancel')}}</button>
                <a href="#" class="confirmAll" data-action="not_active">
                    <button class="btn btn-success">{{__('cp.Yes')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="{{admin_assets('/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
@yield('js_file_upload')

<script src="{{admin_assets('/global/plugins/moment.min.js')}}" type="text/javascript"></script>


<script src="{{admin_assets('/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"
        type="text/javascript"></script>
<script src="{{admin_assets('/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('global/scripts/datatable.js')}}" type="text/javascript"></script>
@if(app()->getLocale() == "ar")
    <script src="{{admin_assets('global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
@else

    <script src="{{admin_assets('global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
@endif
<script src="{{admin_assets('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<script src="{{admin_assets('pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

<script src="{{admin_assets('/global/plugins/jquery-validation/js/jquery.validate.js')}}"
        type="text/javascript"></script>
<script src="{{admin_assets('/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script src="{{admin_assets('/global/scripts/app.min.js')}}" type="text/javascript"></script>


<script src="{{admin_assets('sweet_alert/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{admin_assets('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>


@yield('js')

<script type="text/javascript">

    $(document).ready(function () {
        $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function () {
            $(".alert-dismissible").slideUp(500);
        });
    });


    $('.chkBox').on('change', function () {
        var IDArray = [];
        $("input:checkbox[name=chkBox]:checked").each(function () {
            IDArray.push($(this).val());
        });
        if (IDArray.length == 0) {
            $('.event').attr('disabled', 'disabled');
        } else {
            $('.event').removeAttr('disabled');
        }
    });

    $('.confirmAll').on('click', function (e) {
        e.preventDefault();
        var action = $(this).data('action');

        var url = "{{ url(getLocal().'/admin/changeStatus/'.Request::segment(3)) }}";
        var csrf_token = '{{csrf_token()}}';
        var IDsArray = [];
        $("input:checkbox[name=chkBox]:checked").each(function () {
            IDsArray.push($(this).val());
        });

        if (IDsArray.length > 0) {
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-TOKEN': csrf_token},
                url: url,
                data: {action: action, IDsArray: IDsArray, _token: csrf_token},
                success: function (response) {
                    if (response === 'active') {
                        //alert('fsvf');
                        $.each(IDsArray, function (index, value) {
                            $('#label-' + value).removeClass('label-danger');
                            $('#label-' + value).addClass('label-info');
                            $r = '{{app()->getLocale()}}';
                            if ($r == 'ar') {
                                $('#label-' + value).text('فعال ');
                            } else {
                                $('#label-' + value).text('active');

                            }
                        });
                        $('#activation').modal('hide');
                    } else if (response === 'not_active') {
                        //alert('fg');
                        $.each(IDsArray, function (index, value) {
                            $('#label-' + value).removeClass('label-info');
                            $('#label-' + value).addClass('label-danger');
                            $r = '{{app()->getLocale()}}';
                            if ($r == 'ar') {
                                $('#label-' + value).text('غير فعال');
                            } else {
                                $('#label-' + value).text('Not Active');

                            }
                        });
                        $('#cancel_activation').modal('hide');
                    } else if (response === 'delete') {
                        $.each(IDsArray, function (index, value) {
                            $('#tr-' + value).hide(2000);
                        });
                        $('#deleteAll').modal('hide');
                    }

                    IDArray = [];
                    $("input:checkbox[name=chkBox]:checked").each(function () {
                        $(this).prop('checked', false);
                    });
                    $('.event').attr('disabled', 'disabled');

                },
                fail: function (e) {
                    alert(e);
                }
            });
        } else {
            alert('{{__('cp.not_selected')}}');
        }
    });

    function readURL(input, target) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                target.attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    $('#toolsTable').DataTable({
        dom: 'Bfrtip',
        searching: true,
        "oLanguage": {
            "sSearch": "{{__('cp.search')}}"
        },
        bInfo: true, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
        paging: true,//Dont want paging
        bPaginate: true,//Dont want paging
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });


    function readURLMultiple(input, target) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (var i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    target.append('<div class="imageBox text-center" style="width:150px;height:190px;margin:5px"><img src="' + event.target.result + '" style="width:150px;height:150px"><button class="btn btn-danger deleteImage" type="button">{{__("cp.remove")}}</button><input class="attachedValues" type="hidden" name="filename[]" value="' + event.target.result + '"></div>');
                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    }

    $(document).on("click", ".deleteImage", function () {
        $(this).parent().remove();
    });

</script>

@yield('script')
</body>

</html>
