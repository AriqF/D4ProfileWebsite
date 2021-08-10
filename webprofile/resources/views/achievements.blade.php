<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Prestasi Akademik</title>
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
                            <h1 class="page-title">Penghargaan & Prestasi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section info-section">
            <div class="container-fluid">
                <div class="container">
                    <table class="table" id="table-awards">
                        <thead>
                            <tr id="table-awards-header">
                                <th scope="col">Prestasi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-awards-title">Contrary to popular belief, Lorem Ipsum is not simply random text 2021</td>
                                <td class="table-awards-category">Random Text</td>
                                <td class="table-awards-year">2021</td>
                            </tr>
                            <tr>
                                <td class="table-awards-title">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                <td class="table-awards-category">Lorem Ipsum</td>
                                <td class="table-awards-year">2022</td>
                            </tr>
                            <tr>
                                <td class="table-awards-title">Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero</td>
                                <td class="table-awards-category">Random Text</td>
                                <td class="table-awards-year">2025</td>
                            </tr>
                            <tr>
                                <td class="table-awards-title">Contrary to popular belief, Lorem Ipsum is not simply random text 2021</td>
                                <td class="table-awards-category">Random Text</td>
                                <td class="table-awards-year">2021</td>
                            </tr>
                            <tr>
                                <td class="table-awards-title">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                <td class="table-awards-category">Lorem Ipsum</td>
                                <td class="table-awards-year">2022</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
            </div>

            </script>
        </section>



        @endsection   