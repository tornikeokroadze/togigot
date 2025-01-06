@extends('layouts.app') 
   
@section('title', $news->$title)
@section('description',$news->$title.': '.strip_tags(str_limit($news->$text, $limit = 120, $end = '...')))
@section('keywords',$news->$title.','.strip_tags(str_limit($news->$text, $limit = 120, $end = '...')))
@section('image',asset('img/news/'.$news->image))
@section('linkage',env('APP_URL').App::getLocale().'/news/'.$news->id)
@section('url',env('APP_URL').App::getLocale().'/news/'.$news->id)



@section('content')

<div class="product-details-section section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <img src="{{ asset('img/news/'.$news->image) }}" alt="{{$news->$title}}" />
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" >
                        <div class="product-details-text">
                            <h3 class="text-title">{{$news->$title}}</h3>
                            {!!$news->$text!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection