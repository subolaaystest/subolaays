@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.teamManagement'))

@section('content')

    <div class="main-content">
        <div class="sidbar-icon"><i class="fas fa-bars"> </i></div>
        <div class="page-content-inner">
            <form id="storeSellerProduct" method="post" action="{{ route('storeSellerTeam') }}" enctype="multipart/form-data" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="input-291"> {{ __('translate.EmployeeName') }} </label>
                <input class="form-control" type="text" name="name" required id="input-291"/>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="form-group">
                        <label for="input-370"> {{ __('translate.mobile') }} </label>
                        <input class="form-control" type="number" name="mobile" required id="input-370"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="input-423"> {{ __('translate.email') }} </label>
                        <input class="form-control" type="email" name="email" id="input-423"/>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-5">
                <div class="add-product-title">
                    <h2>ﻣﺪﻳﺮ ﻋﺎم</h2>
                    <p>  ﻣﻨﺢ اﻟﻤﺔﻇﻒ ﺟﻤﻴﻊ اﻟﺼﻠﺎﺣﻴﺎت</p>
                </div>
                <div class="form-check form-switch form-switch-md">
                    <input class="form-check-input" type="checkbox" id="switch6" role="switch">
                    <label class="form-check-label" for="switch6"></label>
                </div>
            </div>
            <div class="add-product-title">
                <h2> ﺻﻠﺎﺣﻴﺔ اﻟﻤﻮﻇﻒ</h2>
                <p>  أﺧﺘﺮ اﻟﻤﻌﻠﻮﻣﺎت واﻟﺼﻔﺤﺎت اﻟﺘﻰ ﻳﺴﺘﻄﻴﻊ اﻟﻤﻮﻇﻒ اﻟﻮﺻﻮل اﻟﻴﻬﺎ </p>
            </div>
            <div class="form-group">
                <select class="niceselect" type="text" id="select-214">
                    <option value="ادارة اﻟﻤﻨﺘﺠﺎت">ادارة اﻟﻤﻨﺘﺠﺎت  </option>
                    <option value="إختر">إختر  </option>
                    <option value="إختر">إختر  </option>
                    <option value="إختر">إختر  </option>
                </select>
            </div>
            <div class="add-product-footer">
                <button class="btnn-orange btn btnn ml-2 go-to-step-2 hvr-shadow" type="submit">
                    <span> {{ __('translate.add') }} </span>
                </button>

                <a href="{{ route('getSellerTeam') }}">
                    <button class="btnn-red btn btnn hvr-shadow" type="button">
                        <span> {{ __('translate.cancel') }} </span>
                    </button>
                </a>
            </div>
            </form>
        </div>
    </div>

@endsection
