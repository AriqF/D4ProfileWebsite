<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Welcome</title>
        @extends('layouts.head')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
    </head>
        <body style="background-color: #F2F2F2;">
        <!--extends navbar-->
        @extends('layouts.indexLayout')
        @section('mainContent')
        
        <header class="pagehead" id="bg-index">
            <div class="container h-100">
                <div class="d-flex bd-highlight h-100 align-items-center">
                    <div class="p-2 flex-fill bd-highlight text-left">
                        <h1 class="page-title">Halaman Profil D4 Manajemen Informatika</h1>
                        <p class="sub-title">Kami adalah mahasiswa informatika hu ha hu haaa</p>
                        <a href="#main-section" class="btn-explore js-scroll-trigger" role="button" id="btn-exp">Jelajahi</a>
                    </div>

                </div>
            </div>
        </header>
        <section class="page-section info-section" id="main-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 mb-4">
                        <div class="px-lg-5">
                            <h2 class="text-center mt-0 section-title">Informasi Berita Terbaru</h2>
                            <div class="row">  

                                <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/unesa.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="p-2 bd-highlight">
                                            <h5 class="font-weight-bold card-news-title">Halo 1</h5>
                                            <p class="news-date-update"><i class="far fa-calendar-alt"></i> 08 Agustus 2021</p>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <a href="#" class="card-read-more">Lanjut Baca <i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/5.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="p-2 bd-highlight">
                                            <h5 class="font-weight-bold card-news-title">Halo 1</h5>
                                            <p class="news-date-update"><i class="far fa-calendar-alt"></i> 08 Agustus 2021</p>
                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <a href="#" class="card-read-more">Lanjut Baca <i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/unesa.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="p-2 bd-highlight">
                                            <h5 class="font-weight-bold card-news-title">Halo 1</h5>
                                            <p class="news-date-update"><i class="far fa-calendar-alt"></i> 08 Agustus 2021</p>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <a href="#" class="card-read-more">Lanjut Baca <i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/ut.jpg') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="p-2 bd-highlight">
                                            <h5 class="font-weight-bold card-news-title">Halo 1</h5>
                                            <p class="news-date-update"><i class="far fa-calendar-alt"></i> 08 Agustus 2021</p>
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <a href="#" class="card-read-more">Lanjut Baca <i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--row div-->
                        </div> <!--px-lg-5 div-->
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 mb-4">
                        <div class="px-lg-5">
                            <h2 class="text-center mt-0 section-title">Informasi Lawas</h2>
                            <div class="list-group list-group-mine">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start hov">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Heading 1</h5>
                                    <small>5 days ago</small>
                                    </div>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    <small>Lorem Ipsum.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Heading 2</h5>
                                    <small>10 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Lorem Ipsum.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Heading 3</h5>
                                    <small>12 days ago</small>
                                    </div>
                                    <p class="mb-1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <small >Lorem Ipsum..</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!--container-fluid-->
        </section>
        @endsection   
