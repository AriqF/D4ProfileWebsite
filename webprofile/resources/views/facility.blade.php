<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Fasilitas</title>
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
                            <h1 class="page-title">Fasilitas</h1>
                        </div>
                    </div>
                </div>


            </div>
        </header>
        <section class="page-section info-section">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 activity-box">
                            <img src="{{ asset('img/2.jpg') }}" class="activity-box-img" alt="Card image cap">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 activity-box">
                            <h3 class="activity-box-header">Heading 01</h3>
                            <p class="activity-box-lead">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 activity-box">
                            <h3 class="activity-box-header">Heading 02</h3>
                            <p class="activity-box-lead">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 activity-box">
                            <img src="{{ asset('img/3.jpg') }}" class="activity-box-img" alt="Card image cap">
                        </div>

                    </div>
                </div>
                
            </div>
            
        </section>



        @endsection   