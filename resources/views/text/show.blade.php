@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')

  <div class="banner-section section-inner-bg section-p-100">
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
@endsection