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
                <form action="{!! action('QuestionController@save') !!}" method="POST" id="form">
                    @csrf 
                    <div class="col-lg-12">
                        <div class="row">
                          @foreach($question as $key => $item)
                            @if($Attributes->checkUserQut($user->id,$item->id)==0)
                            <div class="col-md-12  product-default-single-item product-color--green product-m">
    							 <div class="content">
    								 <div class="content-left text-left">
    									 <h6 class="title">{{$item->$title}}</h6>
                                         <ul class="text-left">
                                             @foreach($item->items as $value)
                                                <li>
                                                    <input type="radio" id="item{{$item->id}}{{$value->id}}" name="question_item[{{$item->id}}]" value="{{$value->id}}">
                                                    <label for="item{{$item->id}}{{$value->id}}">{{$value->$title}}</label>
                                                </li>
                                             @endforeach
                                         </ul>
    								 </div>
    							 </div>
                            </div>
                            @endif
                           @endforeach

                           <div class="col-8">
                            <p>დაწერეთ სასურველი კომენტარი</p>
                            <textarea class="text-area" name="comment"></textarea>
                           </div>
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

@endsection