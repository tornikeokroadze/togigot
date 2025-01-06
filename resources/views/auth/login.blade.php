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
                               <form method="POST" action="{{ route('login') }}" autocomplete="off" class="form" id="form">
                               @csrf
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <div class="default-form-box">
                                              <label>@lang('title.email') <span>*</span></label>
                                              <input type="email" name="email">
                                               @if ($errors->has('email'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="default-form-box">
                                              <label>@lang('title.password') <span>*</span></label>
                                              <input type="password" name="password">
                                               @if ($errors->has('password'))
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                  </span>
                                               @endif
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <button class="btn btn-block btn-lg btn-outline-green mt-2" type="submit">@lang('title.enter')</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="forget-pass"><a href="{{ route('password.request') }}"><img src="{{ asset('img/icons/password.svg') }}">@lang('title.forgot your password')?</a></div>
                      </div>
                  </div> 
              </div>
          </div>
@endsection