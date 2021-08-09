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
        <header class="pagehead" id="bg-visionmission">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="page-title">Struktur Organisasi</h1>
                        </div>
                    </div>
                </div>


            </div>
        </header>
        <section class="page-section info-section">
            <div class="container-fluid">
                <div class="container">
                   <h2 class="nvm-header">//insert image later</h2>
                    <!--insert img--> 
                </div>
                
            </div>
        </section>



        @endsection   