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
                    <div class="checkout_form">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                         <form method="POST" action="{{ route('password.update') }}" class="form"  id="form">
                         @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="default-form-box">
                                        <label>@lang('title.email') <span>*</span></label>
                                         <input type="email" name="email" value="{{ old('email') }}">
                                         @if ($errors->has('email'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                   <div class="default-form-box">
                                    <label>@lang('title.password') <span>*</span></label>
                                   <input type="password" name="password" value="{{ old('password') }}">
                                   @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="default-form-box">
                                      <label>@lang('title.repeat password') <span>*</span></label>
                                      <input id="password-confirm" type="password" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-outline-green mt-2" type="submit">@lang('title.password recovery')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>






@endsection
