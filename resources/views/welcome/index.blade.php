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
                      @foreach($welcome as $item)
                        <div class="col-md-12 product-default-single-item product-color--green product-m">
                            @if($item->image)
                                <div class="image-box">
    								 <img src="{{ asset('img/welcome/'.$item->image) }}" alt="{{$item->$title}}">
    							</div>
                            @endif
							<div class="content">
								 <div class="content-left">
									 <h6 class="title"><a href="{{ asset('welcome/'.$item->id) }}">{{$item->$title}}</a></h6>
                                     <div class="word">{!!$item->$text!!}</div>
								 </div>
							</div>
                        </div>
                       @endforeach
                    </div>

                     <div class="row">
                        <div class="col-md-12 w-100">
                           {{ $welcome->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    var words = ['{{strip_tags($item->$text)}}'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        //offset--;
        
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});
</script>
@endsection