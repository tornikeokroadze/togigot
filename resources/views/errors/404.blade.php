@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')
 
 <div class="product-details-section section-paddings">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="product-details-content-area text-about" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="product-details-text text-center">
                        <img class="ec-img" src="{{ asset('img/icons/404.svg') }}" alt="404">
                            <div class="secton-content text-center">
                                <h3 class="section-title">@lang('title.page not found')</h3>
                                
                            </div>
                            <a href="{{ asset('/') }}" class="btn btn-lg btn-green">@lang('title.home page')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection