<footer class="footer-section footer-bg">
        <div class="footer-wrapper">
            <div class="footer-top">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-lg-6 col-sm-12 mb-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                        data-aos-delay="0">
                                        <h5 class="title">@lang('title.navigation')</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                        data-aos-delay="0">
                                        <ul class="footer-nav">
                                            <li><a href="{{ asset('/') }}">@lang('title.home')</a></li>
                                            <li><a href="{{ asset('about-us') }}">@lang('title.about us')</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                        data-aos-delay="0">
                                        <ul class="footer-nav">
                                            <li><a href="{{ asset('question') }}">@lang('title.question')</a></li>
                                            <li><a href="{{ asset('blog') }}">@lang('title.blog')</a></li>
                                            <li><a href="{{ asset('news') }}">@lang('title.news')</a></li>
                                            <li><a href="{{ asset('contact') }}">@lang('title.contact')</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                        data-aos-delay="0">
                                        <ul class="footer-nav">
                                            @guest
                                            <li><a href="{{ asset('login') }}">@lang('title.login')</a></li>
                                            <li><a href="{{ asset('register') }}">@lang('title.register')</a></li>
                                            @else
                                            <li><a href="{{ asset('home') }}">@lang('title.profile')</a></li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 mb-6">
                            <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                data-aos-delay="0">
                                <h5 class="title">@lang('title.useful links')</h5>
                                <ul class="footer-nav">
                                    @foreach($footer_pages as $item)
                                     <li><a href="{{ asset('text/'.$item->id) }}">{{$item->$title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-6">
                            <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                                <h4 class="title">@lang('title.contact us')</h4>
                                <ul class="footer-social-link">
                                    @if($contact->facebook!='')<li><a href="{{$contact->facebook}}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>@endif
                                    @if($contact->instagram!='')<li><a href="{{$contact->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                                    @if($contact->twitter!='')<li><a href="{{$contact->twitter}}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>@endif
                                    @if($contact->vk!='')<li><a href="{{$contact->vk}}" target="_blank"><i class="fa fa-vk"></i></a></li>@endif
                                    @if($contact->youtube!='')<li><a href="{{$contact->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-copyright">
                                <p class="copyright-text">Copyright © 2023 | Created By ZT</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-payments">
                                <ul>
                                  <li><a href="#">togigot.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="material-scrolltop" type="button"><i class="ion-ios-arrow-thin-up"></i></button>