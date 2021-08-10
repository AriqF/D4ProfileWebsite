<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Visi dan Misi</title>
        @extends('layouts.head')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('css/vision-mission.css') }}" type="text/css"> 
    </head>
        <body style="background-color: #F2F2F2;">
        <!--extends navbar-->
        @extends('layouts.indexLayout')
        @section('mainContent')
        <header class="pagehead" id="bg-visionmission">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="page-title">Visi & Misi</h1>
                        </div>
                    </div>
                </div>


            </div>
        </header>

        <section class="page-section info-section">
            <div class="container-fluid">
                <div class="container">
                    <h2 class="vnm-header">Visi</h2>
                    <p class="vnm-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="container">
                    <h2 class="vnm-header">Misi</h2>
                    <p class="vnm-lead">ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                </div>
                <div class="container">
                    <h2 class="vnm-header">Tujuan</h2>
                    <p class="vnm-lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                </div>
                <div class="container">
                    <h2 class="vnm-header">Core Value</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                            <div class="value-box">
                                <h4 class="value-box-title text-center">Bertaraf Nasional</h4>
                                <p class="value-box-lead">Bertaraf nasional dalam hal prestasi bidang pendidikan, penelitian dan engabdian kepada masyarakat bagi mahasiswa dan dosen</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                            <div class="value-box">
                                <h4 class="value-box-title text-center">Profesional</h4>
                                <p class="value-box-lead">Profesional berarti lulusan memiliki kompetensi dan ahli di bidang pendidikan
                                    teknologi informasi dalam bidang multi media, teknik komputer jaringan, atau
                                    Rekayasa Perangkat Lunak.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                            <div class="value-box">
                                <h4 class="value-box-title text-center">Karakter</h4>
                                <p class="value-box-lead">Karakter IDAMAN JELITA (Iman, Cerdas, Jujur, Peduli dan Tangguh)
                                    merupakan ciri khas yang harus ditanamkan dan ditumbuhkan di Unesa agar
                                    Growing with Character sesuai dengan motto yang bisa direalisasikan di prodi.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                            <div class="value-box">
                                <h4 class="value-box-title text-center">Wirausaha</h4>
                                <p class="value-box-lead">Berjiwa wirausaha adalah mampu membuat ide inovatif dan kreatif menjadi
                                    peluang bisnis yang terkait dengan bidang pendidikan teknologi informasi
                                    diantaranya bisnis Start Up.</p>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>
        </section>

        @endsection   