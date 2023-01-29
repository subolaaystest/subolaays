<div class="landing-navbar">
    <div class="right-side">
        <div class="logo"> <a href="{{route('home.index')}}"><img src="{{$settings->logo}}" alt="alt"></a></div>
        <div class="search landing-search">
            <form action="{{route('search.products')}}" method="get">
                <div class="form-group mb-0">
                    <input class="form-control" type="text"name="search" value="{{request('search')}}">
                    <button>
                        <svg>
                            <use href="{{asset('website_assets/assets/images/icons/icons.svg#search')}}"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="coin"> <span>العملة:</span>
            <img width="24" height="24" src="{{asset('images/locals/'. (getCurrency() == 'sar' ? 'ar': 'en'). '.svg')}}" alt="alt">
            <select style="border:0px;outline:0px" id="currency">
                @foreach($currencies as $currency)
                    <option value="{{$currency->code}}" @if($currency->code == getCurrency()) selected @endif>{{$currency->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="left-side">
        <div class="dash-actions">
            <ul class="landing-action-list">
                <li><a href="#">
                        <svg>
                            <use href="{{asset('website_assets/assets/images/icons/icons.svg#notifi')}}"></use>
                        </svg>
                        <p> <span>2            </span></p></a></li>
                <li>
                    @auth('buyer')
                        <a href="{{route('products.favorites')}}">
                            <svg>
                                <use href="{{asset('website_assets/assets/images/icons/icons.svg#heart')}}"></use>
                            </svg>
                            <p> <span>{{ auth()->guard('buyer')->user()->favorites?->count()}}</span></p>
                        </a>
                    @endauth
                </li>
                <li class="carts"><a href="#">
                        <svg>
                            <use href="{{asset('website_assets/assets/images/icons/icons.svg#cart')}}"></use>
                        </svg>
                        <p> <span class="cart-count">{{\Cart::session(Session::getId())->getContent()->count() ?? 0}}</span></p></a></li>
            </ul>
            <ul class="carts-list">
                <li class="mx-0 mb-3"><a href="{{route('carts.index')}}">
                        <div>
                            <div class="list-icon me-3">
                                <svg>
                                    <use href="{{asset('website_assets/assets/images/icons/icons.svg#cart')}}"></use>
                                </svg>
                                <p> <span class="cart-count">{{\Cart::session(Session::getId())->getContent()->count() ?? 0}} </span></p>
                            </div>
                            <div class="list-text me-3"> <span>سلة عرض وطلب</span></div>
                            <div class="list-arrow">
                                <svg>
                                    <use href="{{asset('website_assets/assets/images/icons/icons.svg#arrow-4')}}"></use>
                                </svg>
                            </div>
                        </div></a></li>
                <li class="mx-0 mb-3"> <a href="#">
                        <div>
                            <div class="list-icon me-3">
                                <svg>
                                    <use href="{{asset('/website_assets/assets/images/icons/icons.svg#cart')}}"></use>
                                </svg>
                                <p> <span>2 </span></p>
                            </div>
                            <div class="list-text me-3"> <span>سلة عروض قصص التجار</span></div>
                            <div class="list-arrow">
                                <svg>
                                    <use href="{{asset('/website_assets/assets/images/icons/icons.svg#arrow-4')}}"></use>
                                </svg>
                            </div>
                        </div></a></li>
                <li class="mx-0"><a href="#">
                        <div>
                            <div class="list-icon me-3">
                                <svg>
                                    <use href="{{asset('/website_assets/assets/images/icons/icons.svg#cart')}}"></use>
                                </svg>
                                <p> <span>2 </span></p>
                            </div>
                            <div class="list-text me-3"> <span>سلة عرووض الصفقات</span></div>
                            <div class="list-arrow">
                                <svg>
                                    <use href="{{asset('/website_assets/assets/images/icons/icons.svg#arrow-4')}}"></use>
                                </svg>
                            </div>
                        </div></a></li>
            </ul>

            <ul class="landing-action-list">

            @auth('buyer')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg>
                            <use href="{{asset('/website_assets/assets/images/icons/icons.svg#person')}}"></use>
                        </svg>
                       <span>
                        {{\Auth::guard('buyer')->user()->name}}
                       </span>
                    </a>
                    <ul class="dropdown-menu  flex-column" aria-labelledby="navbarDropdown">
                        <li class="d-block"><a class="dropdown-item" href="{{route('buyer.profileForm',\Auth::guard('buyer')->user()->id)}}">Profile</a></li>
                        <li class="d-block"><hr class="dropdown-divider"></li>
                        <li class="d-block"><a class="dropdown-item" href="{{ route('buyer.logout') }}">{{ trans('website.logout') }}</a></li>
                    </ul>
                </li>

{{--                <div class="login">--}}
{{--                    <ul class="landing-action-list">--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <svg>--}}
{{--                                    <use href="{{asset('/website_assets/assets/images/icons/icons.svg#person')}}"></use>--}}
{{--                                </svg>--}}
{{--                                <span>{{\Auth::guard('buyer')->user()->name}}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            @else
                <div class="login">
                    <a href="{{route('formLogin')}}">
                        <svg>
                            <use href="{{asset('/website_assets/assets/images/icons/icons.svg#person')}}"></use>
                        </svg>
                        <span>تسجيل الدخول</span>
                    </a>
                </div>
            @endauth
            </ul>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if(app()->getLocale()  !== $localeCode)
                    <a class="lang-btn" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <div class="code" id="lang"> {{ $localeCode }} </div>
                        <span id = "language">{{ $properties['native'] }}</span>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</div>

