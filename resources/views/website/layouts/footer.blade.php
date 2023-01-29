<div class="footer">
    <div class="container">
        <div class="row w-100 m-0">
            <div class="col-md-3 mb-3"><img src="{{$settings->logo}}" alt="alt"></div>
            <div class="col-md-3 mb-3 m-0">
                <ul class="m-0 p-0">
                    <li> <a href="{{route('home.conditions')}}">عن سبلايز</a></li>
                    <li> <a href="#">الوظائف لدينا</a></li>
                    <li> <a href="#">الانضمام كتاجر</a></li>
                    <li> <a href="#">مدونة سبلايز</a></li>
                    <li> <a href="#">اتصل بنا</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3 m-0">
                <ul class="m-0 p-0">
                    <li> <a href="{{route('home.conditions')}}">سياسة الخصوصية</a></li>
                    <li> <a href="{{route('home.conditions')}}">الشروط والاحكام</a></li>
                    <li> <a href="{{route('login')}}">الدخول </a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3 m-0">
                <ul class="m-0 p-0">
                    <li> <a href="#">{{$settings->city}} ،{{$settings->country}}</a></li>
                    <li> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                    <li> <a href="tel:{{$settings->mobile}}">{{$settings->mobile}}</a></li>
                </ul>
            </div>
        </div>
        <div class="row w-100 m-0">
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-footer mb-3 mb-md-0">
                    <p class="mb-0">© 2021 — All Rights Reserved</p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="footer-list-social m-0 p-0">
                    <li><a href="{{$settings->linked_in}}" target="_blank">
                            <svg>
                                <use href="{{asset('website_assets/assets/images/icons/icons.svg#linkedin')}}">  </use>
                            </svg></a></li>
                    <li><a href="{{$settings->instagram}}" target="_blank">
                            <svg>
                                <use href="{{asset('website_assets/assets/images/icons/icons.svg#instagram')}}">  </use>
                            </svg></a></li>
                    <li><a href="{{$settings->twitter}}" target="_blank">
                            <svg>
                                <use href="{{asset('website_assets/assets/images/icons/icons.svg#twitter')}}">  </use>
                            </svg></a></li>
                    <li><a href="{{$settings->youtube}}" target="_blank">
                            <svg>
                                <use href="{{asset('website_assets/assets/images/icons/icons.svg#youtube')}}">  </use>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
