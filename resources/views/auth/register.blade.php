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
                <div class="offset-lg-3 col-lg-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="section-content-gap">
                        <div class="secton-content text-center">
                            <h3 class="section-title">@lang('title.fill in the given fields'):</h3>
                            
                        </div>
                    </div>
                    <div class="checkout_form">
                        <form method="POST" action="{{ route('register') }}"  class="form" id="form">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.name') <span>*</span></label>
                                       <input type="text" name="name" value="{{ old('name') }}" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.surname') <span>*</span></label>
                                            <input type="text" name="surname" value="{{ old('surname') }}" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.email') <span>*</span></label>
                                            <input type="email" name="email" value="{{ old('email') }}" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.phone') <span>*</span></label>
                                            <input type="text" name="phone" value="{{ old('phone') }}" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label for="country">@lang('title.city') <span>*</span></label>
                                        <select class="country_option nice-select wide" name="city" id="city">
                                                  @foreach($cities as $city)
                                                  <option value="{{$city->id}}" @if($city->id==old('city') ) selected @endif>{{$city->$title}}</option>
                                                  @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.password') <span>*</span></label>
                                            <input type="password" name="password" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>@lang('title.repeat password') <span>*</span></label>
                                            <input type="password" name="password_confirmation" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-outline-green mt-2" type="submit">@lang('title.register')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>

@endsection
