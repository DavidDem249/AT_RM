@extends('bases.master')

@section('style')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

    <style>
        .a-box {
            display: inline-block;
            width: 240px;
            text-align: center;
        }

        .img-container {
            height: 200px;
            width: 200px;
            overflow: hidden;
            border-radius: 0px 0px 20px 20px;
            display: inline-block;
        }

        .img-container img {
            /* transform: skew(0deg, -13deg); */
            height: 200px;
            /* margin: -35px 0px 0px -70px; */
        }

        .inner-skew {
            display: inline-block;
            border-radius: 20px;
            overflow: hidden;
            padding: 0px;
            /* transform: skew(0deg, 13deg); */
            font-size: 0px;
            margin: 30px 0px 0px 0px;
            background: #c8c2c2;
            height: 250px;
            width: 200px;
        }

        .text-container {
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            padding: 100px 10px 10px 10px;
            border-radius: 15px;
            border: 1px solid #39a947;
            background: #fff;
            color: #000;
            margin: -120px 0px 0px 0px;
            line-height: 19px;
            font-size: 14px;
        }

        .text-container h3 {
            margin: 20px 0px 10px 0px;
            color: #39a947;
            font-size: 18px;
        }
    </style>
@stop

@section('content')
	<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">NOS SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <section class="container mt-4 mb-2">
        <div class="section-header mt-3">
            <h2>Nos différents Services</h2>
        </div>
        
        <div class="row">
            @foreach ($service as $item)
                <div class="col-md-3">
                    <div class="a-box">
                        <div class="img-container">
                            <div class="img-inner">
                                <div class="inner-skew">
                                    <img src="{{ $item->lien_image }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-container">
                            <h3>{{ $item->titre }}</h3>
                            <div>
                                <small>{{ $item->description }}</small>
                            </div>  
                            <div class="btn{{ $item->id }}">
                                <button class="btn btn-sm btn-block btn-outline-success">Lire plus</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- <div class="service">
        <div class="container">
            <div class="section-header mt-3">
                <h2>Nos différents Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Lorem
                            </h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Projets</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Gestion de contenu</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Formation</h3>
                            <a class="btn" href="">Lire plus</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- Service End -->
@stop