@extends('bases.master')

@section('style')
    <link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

    <style>
        .btn_recruteur_prestataire{
            height: 100px !important;
            width: 400px !important;
            padding: 35px;
            background-color: #39a847;
            margin: 77px;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        a:hover{
            color: aquamarine;
        }
        .page-title-area{
            /*background-image: url('images/join1.png');
            width: 100%;
            height: 400px;*/
            height: 400px;
        }

    </style>
@endsection

@section('content')
    <!-- =====Header=============================================== -->     
    <div class="page-title-area" style="">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">SE CREER UN COMPTE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Login Section =============================================== -->

    {{--<section class="banner-login">
        <div class="container">
            <br><br>
            <div class="row text-center">
                <div class="jobseeker-area">
                    <div class="container">
                        <div class="row job-wrap">
                            <div class="col-lg-6">
                                <div class="jobseeker-item">
                                    <div class="btn_recruteur_prestataire">
                                        RECRUTER CHEZ NOUS
                                        <a href="{{ route('formRecruteur') }}"> INSCRIPTION
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="jobseeker-item">
                                    <div class="btn_recruteur_prestataire">
                                        CHERCHER DU TRAVAIL
                                        <a href="{{ route('prestataire') }}">Cliquez ici
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            
        </div><!-- /.container -->
    </section><!-- /section --> --}} 
    
    <div class="jobseeker-area">
        <div class="container">
            <br><!-- <br> -->
            <section class="banner-login">
                <br><br>
                <div class="row job-wrap">

                    <div class="col-sm-6 col-lg-6">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-job-search"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span></span>
                                <h3>Vous cherchez du travail ?</h3>
                            </div>
                            <a href="{{ route('prestataire') }}">Cliquer ici
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- <div class="col-sm-4 col-lg-4">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-job-search"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span></span>
                                <h3>Vous voulez recruter ?</h3>
                            </div>
                            <a href="create-account.html">Cliquer ici
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div> -->

                    <div class="col-sm-6 col-lg-6">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-recruitment"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span></span>
                                <h3>Vous voulez recruter ?</h3>
                            </div>
                            <a href="{{ route('formRecruteur') }}"> Cliquer ici
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>   		
@endsection