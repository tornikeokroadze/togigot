@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')


    <div class="banner-section arrow-before section-inner-bg section-p-100">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bann-text">
                            <div class="row">
                                <div class="col-md-12 col-12 text-left">
                                    <div class="section-content-gap">
                                        <div class="secton-content text-center">
                                            <h3 class="section-title">{{$about->$title}}</h3>
                                        </div>
                                    </div>
                                    {!! $about->$text !!}
                                    <div class="text-center">
                                         <a href="{{ asset('contact') }}" class="btn btn-lg btn-outline-green mt-5">@lang('title.contact')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


@endsection