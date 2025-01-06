 <div class="breadcrumb-section breadcrumb-bg-color--golden">
     <!-- <img class="breadcrumb-img" src="{{ asset('img/bg/'.$contact->image) }}" alt="cover"> -->
     <div class="breadcrumb-wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h3 class="breadcrumb-title">@if(Request::segment(2)=='text' && isset($about)) {{$about->$title}} @else @lang('title.'.Request::segment(2)) @endif</h3>
                     <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                         <nav aria-label="breadcrumb">
                             <ul>
                                 <li><a href="{{ asset('/') }}">@lang('title.home')</a></li>
                                 <li class="active" aria-current="page">@if(Request::segment(2)=='text' && isset($about)) {{$about->$title}} @else @lang('title.'.Request::segment(2)) @endif</li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>