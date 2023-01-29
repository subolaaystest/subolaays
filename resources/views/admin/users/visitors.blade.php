@extends('layout.adminLayout')
@section('title') إحصائيات الزوار
@endsection
@section('css')
@endsection
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-body">
            <div class="table-toolbar">
                
                
                <form class="form-horizontal" method="get" action="{{url(getLocal().'/admin/visitors')}}">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-md-3 control-label"> فلترة  </label>
                                <div class="col-md-9">
                                    <select name="filter_by" id="filter_by" class="form-control">
                                        <option value="daily" selected> يومي </option>
                                        <option value="weekly"> إسبوعي </option>
                                        <option value="monthly"> شهري </option>
                                        <option value="total_visitors"> إجمالي الزوار </option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn sbold blue">
                                        {{__('cp.search')}} <i class="fa fa-search"></i>
                                    </button>
                                    <a href="{{url('admin/users/visitors')}}" type="submit" class="btn sbold btn-default ">
                                        {{__('cp.reset')}} <i class="fa fa-refresh"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                                


            </div>
            
            <h3> <b>{{ __('cp.count') }}</b> {{ $items->count() }} </h3>
            
            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="toolsTable">
                <thead>
                <tr>
                 <th> # </th>
                    <th style="width:160px;"> IP Address </th>
                    <th style="width:160px;"> Code </th>
                    <th style="width:140px;"> الدولة </th>
                    <th> المدينة </th>
                    <th style="width:160px;"> الجهاز </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $one)
                    <tr class="odd gradeX" id="tr-{{$one->id}}" style="font-size:11px;">
          

                        <td> {{ $loop->iteration}} </td>
                        <td> {{ $one->ip_address}} </td>
                        <td> {{ @$one->country_code }}</td>
                        <td> {{ @$one->country_name }}</td>
                        <td > {{ @$one->city }}</td>
                        <td> {{ @$one->device }}</td>
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
    <script>


        function delete_adv(id, iss_id, e) {
            //alert(id);
            e.preventDefault();
            console.log(id);
            console.log(iss_id);
            var url = '{{url(getLocal()."/admin/users")}}/' + id;
            var csrf_token = '{{csrf_token()}}';
            $.ajax({
                type: 'delete',
                headers: {'X-CSRF-TOKEN': csrf_token},
                url: url,
                data: {_method: 'delete'},
                success: function (response) {
                    console.log(response);
                    if (response === 'success') {
                        $('#tr-' + id).hide(500);
                        $('#myModal' + id).modal('toggle');
                        //swal("القضية حذفت!", {icon: "success"});
                    } else {
                        // swal('Error', {icon: "error"});
                    }
                },
                error: function (e) {
                    // swal('exception', {icon: "error"});
                }
            });

        }


    </script>
@endsection
