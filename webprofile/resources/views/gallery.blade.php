<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Galleri</title>
        @extends('layouts.head')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
    </head>
        <body style="background-color: #F2F2F2;">
        <!--extends navbar-->
        @extends('layouts.indexLayout')
        @section('mainContent')
        <header class="pagehead" id="bg-visionmission">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="page-title">Galleri</h1>
                        </div>
                    </div>
                </div>


            </div>
        </header>
        <section class="page-section info-section">
            <div class="container-fluid">
                <div class="gallery">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="img1">
                                Slide 1
                            </div>
                            <div class="swiper-slide" id="img2">
                                Slide 2
                            </div>
                            <div class="swiper-slide" id="img3">
                                Slide 3
                            </div>
                            <div class="swiper-slide" id="img4">
                                Slide 4
                            </div>
                            <div class="swiper-slide" id="img5">
                                Slide 5
                            </div>
                            <div class="swiper-slide" id="img6">
                                Slide 6
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                
            </div>
            <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    800:{
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1200:{
                        slidesPerView: 3,
                        spaceBetween:30
                    }
                },
                });
            </script>
        </section>



        @endsection   