@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.Stocked'))


@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"></i></div>
        <div class="dash-page-head">
            <h2> {{ __('translate.Stocked') }} </h2>
        </div>


        <form id="signUp" method="get" action="{{ route('getSellerStocked') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="page-filters-2">
                <div class="inputs-btn">
                    <div class="form-group">
                        <label for="input-332"></label>
                        <select class="niceselect" type="text" name="orderBy" id="select-332">
                            <option value=""> {{ __('translate.Choose') }} </option>
                            <option value="latest"> {{ __('translate.latest') }} </option>
                            <option value="oldest"> {{ __('translate.oldest') }} </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-587"></label>
                        <select class="niceselect" type="text" name="main_category_id" id="select-587">
                            <option value=""> {{__('translate.category') }} </option>
                            @isset($main_categories)
                            @foreach ($main_categories as $one)
                                <option value="{{ $one->id }}"> {{ @$one->name }} </option>
                            @endforeach
                            @endisset
                        </select>
                    </div>
                    <button class="btnn-orange btn btnn ml-2 go-to-step-3 btn-fill hvr-shadow" type="submit">
                        <span> {{ __('translate.next') }} </span>
                    </button>
                </div>
                <div class="table-search-box">
                    <input class="form-control" type="text" name="txt">
                    <div class="icon">
                        <svg>
                            <use href="{{ url('frontend/images/icons/icons.svg#search') }}"></use>
                        </svg>
                    </div>
                </div>
            </div>
            </form>

        <div class="table-container inner-padding">
            <div class="table-inner-head">
                <h3> {{ __('translate.Stocked') }} </h3>
                <div class="tabl-head-buttons">
                    <a href="{{ route('getSellerStocked') }}">
                        <button class="btnn-undefined btn btnn btnn-orange hvr-shadow" type="button">
                            <span> {{ __('translate.seeAll') }} </span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="dash-table">
                <table class="table responsive" id="">
                    <thead>
                        <th> {{ __('translate.name') }} </th>
                        <th>  {{ __('translate.category') }} </th>
                        <th>SKU</th>
                        <th> {{ __('translate.status') }} </th>
                        <th> {{ __('translate.CurrentQuantity') }} </th>
                        <th> {{ __('translate.IncomingQuantity') }} </th>
                        <th> {{ __('translate.EditQuantity') }} </th>
                    </thead>
                    <tbody>
                    @isset($products)
                    @foreach ($products as $one)
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="table-img"><img src="{{ @$one->main_image }}" /></div>
                                    <h5 class="mx-2"> {{ @$one->name }} </h5>
                                </div>
                            </td>
                            <td>
                                <div class="table-two-texts">
                                    <h5> {{ @$one->main_category->name }} </h5><h6> {{ @$one->sub_category->name }} </h6>
                                </div>
                            </td>
                            <td><h5> {{ @$one->sku }} </h5></td>
                            <td><div class="table-status status-1"> {{ __('translate.' . $one->status) }} </div></td>
                            <td><h5 class="textt-green"> {{ @$one->quantity_available }} </h5></td>
                            <td><h5 class="textt-orange">64</h5></td>
                            <td>
                                <div class="table-actions">
                                    <div class="table-InputNumber">


                                        <form id="storeSellerProduct" method="post" action="{{ route('updateSellerStocked') }}" enctype="multipart/form-data" class="d-flex align-items-center" role="form">
                                            {{ csrf_field() }}

                                        <input type="hidden" name="product_id" value="{{ $one->id }}">

                                        <div class="input-number">
                                            <div class="form-group">
                                              <div class="input-number-control"><a class="input-increment" href="#"> +</a>
                                                <input type="text" id="input-615" min="0" name="new_quantity" value="{{ @$one->quantity_available }}" required  /><a class="input-decrement" href="#"> -</a>
                                              </div>
                                            </div>
                                          </div>

                                        <button class="btnn btn btnn-orange rounded-0 btn-fill">حفظ</button>
                                    </form>
                                    </div>





                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
