@extends('layouts.app') 
   
@section('title', $blog->$title)
@section('description',$blog->$title.': '.strip_tags(str_limit($blog->$text, $limit = 120, $end = '...')))
@section('keywords',$blog->$title.','.strip_tags(str_limit($blog->$text, $limit = 120, $end = '...')))
@section('image',asset('img/news/'.$blog->image))
@section('linkage',env('APP_URL').App::getLocale().'/blog/'.$blog->id)
@section('url',env('APP_URL').App::getLocale().'/blog/'.$blog->id)



@section('content')

<div class="product-details-section section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <img width="100%" src="{{ asset('img/blog/'.$blog->image) }}" alt="{{$blog->$title}}" />
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" >
                        <div class="product-details-text">
                            <h3 class="text-title">{{$blog->$title}}</h3>
                            {!!$blog->$text!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection