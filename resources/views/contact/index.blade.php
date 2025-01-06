@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')

      

    <div class="checkout-section section-paddings">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8" data-aos="fade-up" data-aos-delay="0">
                    <div class="row mb-5">
                         @if($contact->phone!='')
                        <div class="col-md-4">
                            <div class="contact-box-place-office">
                                <img src="{{ asset('img/icons/phone.svg') }}" alt="phone">
                                <h4>@lang('title.phone'):</h4>
                                <p><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></p>
                                <p><a href="tel:{{$contact->phone2}}">{{$contact->phone2}}</a></p>
                            </div>
                        </div>
                        @endif
                        @if($contact->$address!='')
                        <div class="col-md-4">
                            <div class="contact-box-place-office">
                                <img src="{{ asset('img/icons/address.svg') }}" alt="map">
                                <h4>@lang('title.address'):</h4>
                                <p>{{$contact->$address}}</p>
                            </div>
                        </div>
                        @endif
                        <div class="col-md-4">
                            <div class="contact-box-place-office">
                                <img src="{{ asset('img/icons/email.svg') }}" alt="email">
                                <h4>@lang('title.email'):</h4>
                                <p><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
								<p><a href="mailto:{{$contact->email2}}">{{$contact->email2}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content-gap mt-10">
                        <div class="secton-content text-center">
                            <h3 class="section-title">@lang('title.do you have any questions')? @lang('title.contact us')!</h3>
                            
                        </div>
                    </div>
                    <div class="checkout_form">
                        <form action="{!! action('ContactController@message') !!}" method="POST" id="form">
                         @csrf  
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.name') <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.email') <span>*</span></label>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="default-form-box">
                                        <label>@lang('title.message') <span>*</span></label>
                                        <textarea name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-outline-green mt-2" type="submit">@lang('title.send')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    @if($contact->lat!='' && $contact->lng!='')
     <div id="map-canvas-multipointer" data-mapstyle="default" data-zoom="14" data-marker="{{ asset('img/map-marker.png') }}"></div>
     @endif

@endsection