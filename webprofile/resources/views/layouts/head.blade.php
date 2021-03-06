<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    

<!--icon-->
<script src="https://kit.fontawesome.com/babb4f3fd7.js" crossorigin="anonymous"></script>

<!--boostrap v4.6-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!--swiper js-->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<link rel="stylesheet" href="{{ asset('css/indexLayout.css') }}" type="text/css"> 
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" type="text/css"> 
<link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css"> 

<!-- <script src="{{ asset('js/scroll-trigger.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js/scroll-trigger.js') }}"></script>
@yield('indexlayout')
