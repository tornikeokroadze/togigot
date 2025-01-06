@extends('layouts.app') 
   
@section('title', $essey->$title)
@section('description',$essey->$title.': '.strip_tags(str_limit($essey->$text, $limit = 120, $end = '...')))
@section('keywords',$essey->$title.','.strip_tags(str_limit($essey->$text, $limit = 120, $end = '...')))
@section('image',asset('img/news/'.$essey->image))
@section('linkage',env('APP_URL').App::getLocale().'/essey/'.$essey->id)
@section('url',env('APP_URL').App::getLocale().'/essey/'.$essey->id)



@section('content')
    <div class="product-details-section section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                        <img  width="100%"  src="{{ asset('img/essey/'.$essey->image) }}" alt="{{$essey->$title}}" />
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-content-area product-details--golden" >
                        <div class="product-details-text">
                            <h3 class="text-title">{{$essey->$title}}</h3>
                            {!!$essey->$text!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection