@extends('layout.adminLayout')


@section('title') 
<img src="{{ url('uploads/icons/pages.png') }}">
{{__('website.pages_managment')}}
@endsection


@section('css')
@endsection

@section('content')

    <div class="portlet light bordered">
        <div class="portlet-body">
  
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="toolsTable">
                <thead>
                <tr>
                    <th> # </th>
                    <th> {{ ucwords(__('cp.image')) }}</th>
                    <th> {{ucwords(__('website.page'))}}</th>
                    <th> {{__('cp.edit')}} </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $one)
                    <tr class="odd gradeX">
                        <td> {{ $loop->iteration }} </td>
                        <td> <img src="{{ $one->image }}" style="width:120px;"> </td>
                        <td>{{$one->name}}</td>
                        <td>
                            <div class="btn-group btn-action">
                                <a href="{{url(getLocal().'/admin/editPage/'.$one->id)}}"
                                   class="btn btn-xs  tooltips" data-container="body" data-placement="top"
                                   data-original-title="{{__('cp.edit')}}">
                                   <img src="{{ url('uploads/icons/writing.png') }}">
                                </a>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
@endsection
@section('script')

@endsection
