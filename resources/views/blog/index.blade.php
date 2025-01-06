@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')
<div class="shop-section section-paddings">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="row">
                      @foreach($blog as $item)
                        <div class="col-md-4 product-default-single-item product-color--green product-m">
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
                       @endforeach
                    </div>
                     <div class="row">
                        <div class="col-md-12 w-100">
                           {{ $blog->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection