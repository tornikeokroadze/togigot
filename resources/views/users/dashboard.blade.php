@extends('layouts.app') 

@section('title',$metas->$title)
@section('description',$metas->$desc)
@section('image',asset('img/metas/'.$metas->image) )
@section('keywords',$metas->$keywords)
@section('linkage',env('APP_URL'))
@section('url',env('APP_URL'))


@section('content')
 <div class="account-dashboard section-paddings">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link btn btn-block btn-md btn-black-default-hover active">@lang('title.personal info')</a>
                            </li>
                             <li><a href="#question" data-bs-toggle="tab" class="nav-link btn btn-block btn-md btn-black-default-hover">@lang('title.question')</a>
                            </li>
                            <li><a href="#password" data-bs-toggle="tab" class="nav-link btn btn-block btn-md btn-black-default-hover">@lang('title.change password')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="0">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="checkout_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{!! action('DashboardController@update', 0) !!}" method="post"  autocomplete="off" id="form">
                                       @csrf
                                            <h3>@lang('title.edit personal info')</h3>
                                            <div class="block-border">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.name')</label>
                                                             <input type="text" name="name" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                           <label>@lang('title.surname')</label>
                                                           <input type="text" name="surname" value="{{$user->surname}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.personal_number') </label>
                                                             <input type="text" name="personal_number" value="{{$user->personal_number}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.email')</label>
                                                            <input type="email" name="email" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.phone')</label>
                                                            <input type="text" name="phone" value="{{$user->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label for="country">@lang('title.city')</label>
                                                            <select class="country_option nice-select wide" name="city" id="city">
                                                                @foreach($cities as $city)
                                                                  <option value="{{$city->id}}" @if($city->id==$user->city) selected @endif>{{$city->$title}}</option>
                                                                  @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.address')</label>
                                                            <input type="text" name="address" value="{{$user->address}}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-block btn-lg btn-green mt-2" type="submit">@lang('title.save')</button>
                                                    </div>
                                                </div>
                                            </div>
                                             @method('PUT')
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="question">
                            <div class="checkout_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <form action="{!! action('QuestionController@update') !!}" method="POST" id="form">
                                            @csrf 
                                            <div class="col-lg-12">
                                                <div class="row">
                                                  @foreach($question as $key => $item)
                                                    <div class="col-md-12  product-default-single-item product-color--green product-m">
                                                         <div class="content">
                                                             <div class="content-left text-left">
                                                                 <h6 class="title">{{$item->$title}}</h6>
                                                                 <ul class="text-left">
                                                                     @foreach($item->items as $value)
                                                                        <li>
                                                                            <input @if($Attributes->checkUserQutItem($user->id,$value->id)>0) checked @endif type="radio" id="item{{$item->id}}{{$value->id}}" name="question_item[{{$item->id}}]" value="{{$value->id}}">
                                                                            <label for="item{{$item->id}}{{$value->id}}">{{$value->$title}}</label>
                                                                        </li>
                                                                     @endforeach
                                                                 </ul>
                                                             </div>
                                                         </div>
                                                    </div>
                                                   @endforeach

                                                  
                                                   <div class="col-8">
                                                    <button class="btn btn-block btn-lg btn-outline-green mt-2" type="submit">@lang('title.send')</button>
                                                   </div>

                                                </div>
                                                 <div class="row">
                                                    <div class="col-md-12 w-100">
                                                       {{ $question->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="password">
                            <div class="checkout_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <form action="{!! action('UserController@passwordUpdate') !!}" method="post"  autocomplete="off" id="form_pass">
                                       @csrf
                                            <h3>@lang('title.change password')</h3>
                                            <div class="block-border">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                             <label>@lang('title.current password'):</label>
                                                             <input type="password" name="current" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="default-form-box">
                                                           <label>@lang('title.password'):</label>
                                                           <input type="password" name="password" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="default-form-box">
                                                            <label>@lang('title.repeat password'):</label>
                                                             <input type="password" name="password_confirmation" >
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-block btn-lg btn-green mt-2" type="submit">@lang('title.save')</button>
                                                    </div>
                                                </div>
                                            </div>
                                             @method('POST')
                                        </form>
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
