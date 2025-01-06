@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))

@section('content')
    @if(count($slider)>0)
        <div class="hero-slider-section">
            <div class="hero-slider-active swiper-container">
                <div class="swiper-wrapper">
                   @foreach($slider as $item)   
                    <div class="hero-single-slider-item swiper-slide">
                        <div class="hero-slider-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('img/slider/'.$item->image) }}" alt="{{$item->$title}}">
                                        @if($item->$title!='')
                                        <div class="hero-slider-content">
                                            <h3 class="title">{{$item->$title}}</h3>
                                            @if($item->$button1_text!='')<a href="{{$item->url}}" class="btn btn-lg btn-outline-green">{{$item->$button1_text}}</a>@endif
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination active-color-green"></div>
                <div class="swiper-button-prev d-none d-lg-block"></div>
                <div class="swiper-button-next d-none d-lg-block"></div>
            </div>
        </div>
    @endif

    <div id="title" class="product-default-slider-section_a section-p-50">
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- მემარცხენე მემარჯვენეები -->
                <div class="row aling-item-center text-center">
                    <div class="col-md-12 col-12 text_threebuild">
                        <img src="{{asset('img/T.png')}}" width="100%" alt="togigot logo">
                    </div>
                   @foreach($essey as $item)
                        <div class="col-md-4 col-4" >
                           <div class="image-box" width="100%">
                                <a href="{{ asset('essey/'.$item->id) }}" class="image-link">
                                     <img src="{{ asset('img/text/'.$item->image) }}" width="100%" alt="{{$item->$title}}">
                                </a>
                            </div>
                                <!-- <div class="content">
                                    <div class="content-left">
                                        <h6 class="title"><a href="{{ asset('essey/'.$item->id) }}">{{$item->$title}}</a></h6>
                                    </div>
                                </div> -->
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="product-default-slider-section section-p-100">
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3 class="section-title">@lang('title.news')</h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <div class="swiper-wrapper">
                                    @foreach($news as $item)
                                    <div class="product-default-single-item product-color--green swiper-slide">
                                        <div class="product-default-single-item product-color--green product-m">
                                            <div class="image-box">
                                                 <a href="{{ asset('news/'.$item->id) }}" class="image-link">
                                                     <img src="{{ asset('img/news/'.$item->image) }}" alt="{{$item->$title}}">
                                                 </a>
                                             </div>
                                             <div class="content">
                                                 <div class="content-left">
                                                     <h6 class="title"><a href="{{ asset('news/'.$item->id) }}">{{$item->$title}}</a></h6>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






  <!-- div class="product-default-slider-section section-p-100">
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content text-center">
                                <h3 class="section-title">@lang('title.blog')</h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <div class="swiper-wrapper">
                                    @foreach($news as $item)
                                    <div class="product-default-single-item product-color--green swiper-slide">
                                        <div class="product-default-single-item product-color--green product-m">
                                            <div class="image-box">
                                                 <a href="{{ asset('blog/'.$item->id) }}" class="image-link">
                                                     <img src="{{ asset('img/blog/'.$item->image) }}" alt="{{$item->$title}}">
                                                 </a>
                                             </div>
                                             <div class="content">
                                                 <div class="content-left">
                                                     <h6 class="title"><a href="{{ asset('blog/'.$item->id) }}">{{$item->$title}}</a></h6>
                                                 </div>
                                             </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

 -->





    <div class="banner-section arrow-before section-inner-bg section-p-100">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bann-text">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 col-12 text-left">
                                    <div class="section-content-gap">
                                        <div class="secton-content text-center">
                                            <h3 class="section-title">{{$about->$title}}</h3>
                                          
                                        </div>
                                    </div>
                                    {!!$about->$text!!}
                                    <div class="text-center">
                                        <a href="{{ asset('about-us') }}" class="btn btn-lg btn-outline-green mt-5">@lang('title.see more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($services)>0)
        <div class="service-promo-section section-p-100">
            <div class="service-wrapper">
                <div class="container">
                    <div class="row">
                        @foreach($services as $item)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img src="{{ asset('img/services/'.$item->image) }}" alt="{{$item->$title}}">
                                </div>
                                <div class="content">
                                    <h6 class="title">{{$item->$title}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection