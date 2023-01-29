@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.teamManagement'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"> </i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.teamManagement') }} <span>( {{ count($items) }} )</span></h2>
            <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerTeam') }}"> {{ __('translate.AddEmployee') }} </a>
        </div>
        <div class="table-container inner-padding">
            <div class="table-inner-head">
                <h3> {{ __('translate.StoreTeam') }} </h3>
                <div class="tabl-head-buttons">
                    <button class="btnn-undefined btn btnn btnn-red hvr-shadow" type="button">
                        <span> {{ __('translate.SignOutAllEmployees') }} </span>
                    </button>
                </div>
            </div>
            <div class="dash-table">


                <form method="post" action="{{ route('exportSellerTeam') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
                    {{ csrf_field() }}

                    <button class="btnn-undefined btn btnn btnn-orange hvr-shadow" onclick="getElementById('exportSellerTeam').click()">
                        <span> {{ __('translate.export') }} </span>
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#download') }}"></use>
                        </svg>
                    </button>


                <table class="table responsive" id="example">
                    <thead>
                        <th>  </th>
                        <th> {{ __('translate.name') }}</th>
                        <th> {{ __('translate.created_at') }} </th>
                        <th> {{ __('translate.mobile') }} </th>
                        <th> {{ __('translate.email') }} </th>
                        <th> {{ __('translate.Actions') }} </th>
                    </thead>
                    <tbody>
                    @isset($items)
                    @foreach ($items as $one)
                        <tr>
                            <td> <input type="checkbox" id="vehicle1" name="teams_ids[]" value="{{ $one->id }}"> </td>

                            <td><h5> {{ @$one->name }}  </h5></td>
                            <td>
                                <div class="table-two-texts">
                                    <h5> {{ @$one->created_at->format('Y/m/y') }} </h5>
                                    <h6> {{ @$one->created_at->format('h:i A') }} </h6>
                                </div>
                            </td>
                            <td><h5> {{ @$one->mobile }} </h5></td>
                            <td> {{ @$one->email }} </td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-action-btn-custom">
                                        <div class="form-check form-switch form-switch-md">
                                            <input class="form-check-input changeTeamStatus" type="checkbox" data-id="{{ @$one->id }}" {{ $one->status == 'active'? 'checked' : '' }} id="switch0" role="switch"/>
                                            <label class="form-check-label" for="switch0"></label>
                                        </div>

                                        <a href="{{ route('deleteSellerTeam', $one->id) }}"> X </a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endisset
                    </tbody>
                </table>


                <button type="submit" class="btn green" style="display: none;" id="exportSellerTeam"> </button>
                </form>



            </div>
        </div>
    </div>

@endsection




@section('script')
    <script>
        $('.changeTeamStatus').on('click', function () {
            var teamId = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeTeamStatus/') }}";

            if(teamId){
            $.ajax({
                type: "GET",
                url: url+'/'+teamId,
                success: function (response) {
                    if(response)
                    {
                    }
                }
            });
            }
        });
</script>
@endsection

