<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="copyright" content="{{env('APP_NAME')}}">
    <meta name="author" content="zuka toko">
    <meta name="country" content="Georgia">
    <meta name="robots" content="index, all">
    <meta name="contactOrganization" content="{{env('APP_URL')}}">
    <meta name="contactStreetAddress1" content='Georgia, Tbilisi'>
    <meta name="contactCity" content="Tbilisi">
    <meta name="contactCountry" content="Georgia">
    <meta name="linkage" content="@yield('linkage')">
  
  
    <meta property="og:type" content="website"/> 
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="og:site_name" content="{{env('APP_NAME')}}"/>
    <meta property="og:see_also" content="{{env('APP_URL')}}"/>
    
    
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{env('APP_NAME')}}"/>
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:creator" content="{{env('APP_NAME')}}"/>
    <meta name="twitter:image:src" content="@yield('image')"/>
    <meta name="twitter:domain" content="{{env('APP_URL')}}"/>
  
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('fav/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('fav/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('fav/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('fav/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('fav/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('fav/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('fav/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('fav/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fav/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('fav/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('fav/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fav/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('fav/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
   

    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.lineProgressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- ========== End Stylesheet ========== -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    
</head>

<body>
        <span class="success-cart">@lang('title.added to cart')</span>
        <span class="stock-cart">@lang('title.there are not enough items in stock')</span>
        <span class="success-wishlist">@lang('title.added to wishlist')</span>
        <span class="added-wishlist">@lang('title.already added to wishlist')</span>

        
        @include('inc.menu')
       

         @if(Request::segment(2) != '' && Request::segment(2) != 'contact')
         @if(false)
         @include('inc.breadcrumb')
         @endif
        @endif
            @include('inc.message')
            @yield('content')

        @include('inc.footer')
    </div>    

     <!-- Javascripts File
    ============================================= -->

    <script src="{{ asset('js/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/material-scrolltop.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('js/aos.min.js') }}"></script>
    <script src="{{ asset('js/jquery.instagramFeed.js') }}"></script>
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

    <script type="text/javascript">
          $( "#form" ).validate({
            rules: {
              message: {
                required: true,
                maxlength: 250,
              },
              name: {
                required: true
              },
              surname: {
                required: true
              },
              email: {
                required: true,
                email: true
              },
              current: {
                required: true
              },
              password: {
                required: true
              },
              password_confirmation: {
                required: true
              },
              phone: {
                required: true,
                number: true,
                maxlength: 9,
                minlength: 9
              },
              city: {
                required: true
              },
              address: {
                required: true
              },
              personal_number: {
                required: true,
				number: true,
              },
              
            },

             messages: {
                message: {
                  required: "@lang('title.the field is required')",
                },
                name: {
                  required: "@lang('title.the field is required')",
                },
                surname: {
                  required: "@lang('title.the field is required')",
                },
                city: {
                  required: "@lang('title.the field is required')",
                },
                address: {
                  required: "@lang('title.the field is required')",
                },
                personal_number: {
                  required: "@lang('title.the field is required')",
				  number: "@lang('title.should be just numbers')",
                },
                 current: {
                  required: "@lang('title.the field is required')",
                },
                password: {
                  required: "@lang('title.the field is required')",
                },
                password_confirmation: {
                  required: "@lang('title.the field is required')",
                },
                email: {
                  required: "@lang('title.the field is required')",
                   email: "@lang('title.enter the correct email address')"
                },
                phone: {
                  required: "@lang('title.the field is required')",
                  number: "@lang('title.should be just numbers')",
                  maxlength: "@lang('title.should not exceed 9')",
                  minlength: "@lang('title.must be 9 digits')",
                }
              }
          });   
    </script>

    @if(Request::segment(2) === 'contact')
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCq6i9m9Fj6zWJwmVujSZUw0E8M54WF53M"></script>
    <script type="text/javascript" src="{{ asset('js/google-map-init-multilocation.js') }}"></script>
    <script>
     jQuery(function(e) {
        "use strict";
        initialize({{$contact->lat}},{{$contact->lng}},'{{$metas->$title}}','{{env('APP_URL')}}')
    });
    </script>
    @endif


    <script type="text/javascript">
     $(function() {
       // This button will increment the value
       $('.qtyplus').click(function(e) {

         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         fieldName = $(this).attr('field');
         // Get its current value
         var currentVal = parseInt($('#'+fieldName).val());
         // If is not undefined
         if (!isNaN(currentVal)) {
           // Increment
           $('#'+fieldName).val(currentVal + 1);
         } else {
           // Otherwise put a 0 there
           $('#'+fieldName).val(1);
         }
         $( "#cartupdate"+fieldName).submit();
       });
       // This button will decrement the value till 0
       $(".qtyminus").click(function(e) {
         // Stop acting like a button
         e.preventDefault();
         // Get the field name
         fieldName = $(this).attr('field');
         // Get its current value
         var currentVal = parseInt($('#'+fieldName).val());
         // If it isn't undefined or its greater than 0
         if (!isNaN(currentVal) && currentVal > 0) {
           // Decrement one
           $('#'+fieldName).val(currentVal - 1);
         } else {
           // Otherwise put a 0 there
           $('#'+fieldName).val(1);
         }
         $( "#cartupdate"+fieldName).submit();
       });
     });
  </script>
</body> 
</html>
