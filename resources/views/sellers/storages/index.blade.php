@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.StorageLocations'))

@section('content')

<div class="main-content">
    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="dash-page-head">
      <h2> {{ __('translate.StorageLocations') }} <span>( {{ count($sellerStorage) }} )</span></h2>
      <a class="main-link btn hvr-float-shadow" href="{{ route('createSellerStorage') }}"> {{ __('translate.addNewLocation') }} </a>
    </div>
    <div class="page-content-inner">

    @isset($sellerStorage)
    @foreach ($sellerStorage as $one)
      <div class="d-flex justify-content-between mt-5">
        <div class="add-product-title">
          <h2>  {{ $one->name }}
            {{-- <div class="green-label">مفتوح</div> --}}
          </h2>
          <p> {{ @$one->storage_type }} </p>
        </div>
        <div class="form-check form-switch form-switch-md">
            <input class="form-check-input changeSellerStorageStatus" type="checkbox" data-id="{{ @$one->id }}"
            {{ $one->status == 'active'? 'checked' : '' }} id="switch0" role="switch"/>
          <label class="form-check-label" for="switch7"></label>
          <a href="{{ route('deleteSellerStorage', $one->id) }}"> X </a>
        </div>
      </div>
      <div class="set-default">
        <div class="form-check form-switch form-switch-md">
          <input class="form-check-input changeSellerStorageDefault" type="checkbox" data-id="{{ @$one->id }}" {{ $one->is_default == 1? 'checked' : '' }} id="switch6" role="switch">
          <label class="form-check-label" for="switch6"> {{ __('translate.default') }} </label>
        </div>
      </div>
      <hr class="cus-hr">
    @endforeach
    @endisset


    </div>
  </div>

@endsection


@section('script')
    <script>
        $('.changeSellerStorageStatus').on('click', function () {
            var storageID = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeSellerStorageStatus/') }}";

            if(storageID){
            $.ajax({
                type: "GET",
                url: url+'/'+storageID,
                success: function (response) {
                    if(response)
                    {
                    }
                }
            });
            }
        });


        $('.changeSellerStorageDefault').on('click', function () {
            var storageID = $(this).attr("data-id");
            var url = "{{ url(app()->getLocale().'/Seller/changeSellerStorageDefault/') }}";

            if(storageID){
            $.ajax({
                type: "GET",
                url: url+'/'+storageID,
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
