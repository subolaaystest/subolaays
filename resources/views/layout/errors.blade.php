@if($errors->count() >0)
    <div class="alert alert-warning alert-dismissible" role="alert">
        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
        @foreach($errors->all() as $error)
            - {{$error}}<br>
        @endforeach
    </div>
@endif



<!-- لطباعة رسالة تاكيد اضافة او حذف او تعديل البيانات -->
@if(Session::get("msg")!=NULL)

    @php
        $msgClass="alert-info";
        if(strstr(Session::get("msg"),"s:")){ $msgClass="alert-success"; }
        else if(strstr(Session::get("msg"),"e:")){ $msgClass="alert-danger"; }
        else if(strstr(Session::get("msg"),"i:")){ $msgClass="alert-info"; }
        else if(strstr(Session::get("msg"),"w:")){ $msgClass="alert-warning"; }
    @endphp

<div class="alert {{$msgClass}} alert-dismissible" role="alert">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
    {{substr(Session::get("msg"),2)}}
    </div>
@endif
