@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')
    <div class="product-default-slider-section_a ">
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
                <div class="row aling-item-center text-center three_picture">
                    <div class="col-md-12 col-12">
                        <img src="{{asset('img/T.png')}}" width="100%" alt="togigot logo">
                    </div>
                    @foreach($essey as $item)
                        <div class=" {{$id==$item->id ? 'col-md-8' : 'col-md-2'}} col-4  three_block" >
                           <div class="image-box {{$id==$item->id ? 'active-eassy' : ''}} three_img">
                                <a href="{{ asset('essey/'.$item->id) }}" class="image-link">
                                     <img class="img_one"  src="{{ asset('img/text/'.$item->image) }}" width="100%" alt="{{$item->$title}}">
                                </a>
                            </div>
                            @if(false)
                                <div class="content">
                                    <div class="content-left">
                                        <h6 class="title"><a href="{{ asset('essey/'.$item->id) }}">{{$item->$title}}</a></h6>
                                    </div>
                                </div>
                            @endif
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="product-default-slider-section_a section-paddings">
        <div class="container">
            <div class="row flex-column-reverse  flex-lg-row ten_div">
                @if($text->page == 'იდეოლოგიური')
                    <div class="col-lg-8 bg-ease-white  offset-md-2  col-12 ">
                @elseif($text->page == 'მემარჯვენე')
                    <div class="col-lg-8 bg-ease-white  offset-md-4  col-12 ">
                @else
                    <div class="col-lg-8  bg-ease-white col-12 ">
                @endif
                    
                    <div class="row">
                      @foreach($esseyItem as $item)
                        <div class="col-md-6 product-default-single-item product-color--green product-m">
                            <div class="image-box">
                                 <a href="{{ asset('essey/'.$id.'/'.$item->id) }}" class="image-link">
                                     <img src="{{ asset('img/essey/'.$item->image) }}" alt="{{$item->$title}}">
                                 </a>
                             </div>
                             <div class="content">
                                 <div class="content-left">
                                     <h6 class="title"><a href="{{ asset('essey/'.$id.'/'.$item->id) }}">{{$item->$title}}</a></h6>
                                 </div>
                             </div>
                        </div>
                       @endforeach

                       <div class="col-md-12 w-100">
                           {{ $esseyItem->links() }}
                        </div>

                    </div>
                     
                </div>
            </div>
        </div>
    </div>
@endsection