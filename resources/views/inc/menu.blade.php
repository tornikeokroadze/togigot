<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-top header-top-bg--white section-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-top-left">
                            <div class="header-top-contact header-top-contact-color--black header-top-contact-hover-color--aqua">
                                @if($contact->phone!='')<a href="tel:{{$contact->phone}}" class="icon-space-right"><img src="{{ asset('img/icons/phone.svg') }}" alt="phone">{{$contact->phone}}</a>@endif
                                @if($contact->email!='')<a href="mailto:{{$contact->email}}" class="icon-space-right"><img src="{{ asset('img/icons/email.svg') }}" alt="email">{{$contact->email}}</a>@endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-center text-center">
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="{{ asset('/') }}"><img src="{{ asset('img/logo.png') }}" alt="togigot logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-top-right text-right">
                            <ul class="header-action-link action-color--black action-hover-color--aqua">
                                @guest
                                <li><a href="{{ asset('login') }}">@lang('title.login')</a></li>
                                <li><a href="{{ asset('register') }}">@lang('title.register')</a></li>
                                @else
                                <li><a href="{{ asset('home') }}">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      @lang('title.logout')
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                </li>
                                @endguest
                                <li>
                                    <a href="#search">
                                        <img src="{{ asset('img/icons/search.svg') }}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-color--black section-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="main-menu main-menu-style-4 menu-color--white menu-hover-color--aqua">
                            <nav>
                                <ul>
                                    <li class="{{ Request::segment(2) == null ? 'active' : null }}"><a href="{{ asset('/') }}">@lang('title.home')</a></li>
                                    <li class="{{ Request::segment(2) == 'about-us' ? 'active' : null }}"><a href="{{ asset('about-us') }}">@lang('title.about us')</a></li>
                                    
									<li class="{{ Request::segment(2) == 'question' ? 'active' : null }}"><a href="{{ asset('question') }}">@lang('title.question')</a></li>
                                    <li class="{{ Request::segment(2) == 'blog' ? 'active' : null }}"><a href="{{ asset('blog') }}">@lang('title.blog')</a></li>
									<li class="{{ Request::segment(2) == 'news' ? 'active' : null }}"><a href="{{ asset('news') }}">@lang('title.news')</a></li>
                                    <li class="{{ Request::segment(2) == 'contact' ? 'active' : null }}"><a href="{{ asset('contact') }}">@lang('title.contact')</a></li>
                                    <li class="has-dropdown lang-li">
                                        <a href="#"><img class="lang-icon" src="{{ asset('img/icons/lang.svg') }}" alt="lang">{{$choosen_lang}} <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header sticky-color--white section-fluid seperate-sticky-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <div class="header-logo">
                            <div class="logo">
                                <a href="{{ asset('/') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="main-menu menu-color--black menu-hover-color--aqua">
                            <nav>
                                <ul>
                                    <li><a href="{{ asset('/') }}">@lang('title.home')</a></li>
                                    <li><a href="{{ asset('about-us') }}">@lang('title.about us')</a></li>
                                 
									<li class="{{ Request::segment(2) == 'question' ? 'active' : null }}"><a href="{{ asset('question') }}">@lang('title.question')</a></li>
                                    <li class="{{ Request::segment(2) == 'blog' ? 'active' : null }}"><a href="{{ asset('blog') }}">@lang('title.blog')</a></li>
									<li class="{{ Request::segment(2) == 'news' ? 'active' : null }}"><a href="{{ asset('news') }}">@lang('title.news')</a></li>
                                    <li><a href="{{ asset('contact') }}">@lang('title.contact')</a></li>
                                    <li class="has-dropdown lang-li">
                                        <a href="#"><img class="lang-icon" src="{{ asset('img/icons/lang.svg') }}" alt="lang">{{$choosen_lang}} <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <ul class="header-action-link action-color--black action-hover-color--aqua">
                            <li>
                                <a href="#search">
                                    <img src="{{ asset('img/icons/search.svg') }}" alt="cart">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="search" class="search-modal">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="close">×</button>
                <form action="{!! action('NewsController@index') !!}"  method="get" autocomplete="off" >
                    <input type="search" name="q" id="q" placeholder="@lang('title.search word')" required/>
                    <button type="submit" class="btn btn-lg btn-green">@lang('title.search')</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mobile-header mobile-header-bg-color--white section-fluid d-lg-block d-xl-none">
    <div class="header-top header-top-bg--white section-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-left">
                        <div class="header-top-contact header-top-contact-color--black header-top-contact-hover-color--aqua">
                            @if($contact->phone!='')<a href="tel:{{$contact->phone}}" class="icon-space-right"><img src="{{ asset('img/icons/phone.svg') }}" alt="phone">{{$contact->phone}}</a>@endif
                            @if($contact->email!='')<a href="mailto:{{$contact->email}}" class="icon-space-right"><img src="{{ asset('img/icons/email.svg') }}"  alt="email">{{$contact->email}}</a>@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between pt-3 pb-3">
                <div class="mobile-header-left">
                    <ul class="mobile-menu-logo">
                        <li>
                            <a href="{{ asset('/') }}">
                                <div class="logo">
                                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mobile-right-side">
                    <ul class="header-action-link action-color--black action-hover-color--green">
                        
                        <li>
                            <a href="#search">
                                <img src="{{ asset('img/icons/search.svg') }}"  alt="search">
                            </a>
                        </li>
                        <li>
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div>
    <div class="offcanvas-mobile-menu-wrapper">
        <div class="mobile-menu-bottom">
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="{{ asset('/') }}">@lang('title.home')</a></li>
                    <li><a href="{{ asset('about-us') }}">@lang('title.about us')</a></li>
					<li><a href="{{ asset('question') }}">@lang('title.question')</a></li>
                    <li><a href="{{ asset('blog') }}">@lang('title.blog')</a></li>
					<li><a href="{{ asset('news') }}">@lang('title.news')</a></li>
                    <li><a href="{{ asset('contact') }}">@lang('title.contact')</a></li>
                    <li>
                        <a href="#"><span><img class="lang-icon" src="{{ asset('img/icons/lang.svg') }}" alt="lang">{{$choosen_lang}} </span></a>
                        <ul class="mobile-sub-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="{{ asset('/') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
            </div>
            <ul class="social-link mt-5">
                 @guest
                <li><a href="{{ asset('login') }}">@lang('title.login')</a></li>
                <li><a href="{{ asset('register') }}">@lang('title.register')</a></li>
                @else
                <li><a href="{{ asset('home') }}">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      @lang('title.logout')
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</div>


    