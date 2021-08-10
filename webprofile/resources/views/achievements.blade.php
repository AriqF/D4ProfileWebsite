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
                                <td class="table-awards-title">
                                   <a class="modal-link-title" data-toggle="modal" data-target="#award-detail">Contrary to popular belief, Lorem Ipsum is not simply random text 2021</a> 
                                   <!-- Modal -->
                                    <div class="modal fade" id="award-detail" tabindex="-1" role="dialog" aria-labelledby="award-detail-label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="award-detail-label">Award Title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <img src="{{ asset('img/5.jpg') }}" class="img-fluid card-img-top" alt="Image Karya" style="height: fit-content; width:fit-content">
                                            </div>
                                            <div class="container" style="margin-top: 20px;">
                                                <p class="modal-lead">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </td>
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