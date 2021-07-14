@extends('bases.master')

@section('styles')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
@stop

@section('content')
	<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">NOS OFFRES</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

	<section class="job-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>LES OFFRES DISPONIBLES</h2>
            </div>
            <div class="sorting-menu">
                <ul>
                    <li class="filter active" data-filter="all">Tous</li>
                    <li class="filter" data-filter=".web">Aide ménagère</li>
                    <li class="filter" data-filter=".ui">Garde enfant</li>
                    <li class="filter" data-filter=".branding">Plombier</li>
                    <li class="filter" data-filter=".branding">Menuisier</li>
                    <li class="filter" data-filter=".branding">Chef cusinier</li>
                    <li class="filter" data-filter=".branding">Electronique</li>
                    <li class="filter" data-filter=".ux">Autres</li>
                    {{-- <li class="filter" data-filter=".wp">Part Time</li> --}}
                </ul>
            </div>
            <div id="container">
                <div class="row">
                    <div class="col-lg-6 mix web ui">
                        <div class="job-item">
                            <img src="assets/img/home-1/jobs/civ2.png" alt="Job">
                            <div class="job-inner align-items-center">
                                <div class="job-inner-left">
                                    <h3>
                                        <a href="{{ route('detailOffre') }}">Une femme ménagère</a>
                                    </h3>
                                    {{-- <a class="company" href="company-details.html">Winbrans.com</a> --}}
                                    <ul>
                                        <li>
                                            <i class="icofont-money-bag"></i>
                                            80 000 Fr - 100 000 Fr
                                        </li>
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            Côte d'Ivoire, Abidjan, Angré 7 ème tranche
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-inner-right">
                                    <ul>
                                        <li>
                                            <a href="{{ route('detailOffre') }}">Voir <i class="icofont-plus"></i></a>
                                        </li>
                                        <li>
                                            <span>Partiel</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="col-lg-6 mix wp web">
                        <div class="job-item">
                            <img src="assets/img/home-1/jobs/civ2.png" alt="Job">
                            <div class="job-inner align-items-center">
                                <div class="job-inner-left">
                                    <h3>
                                        <a href="{{ route('detailOffre') }}">Deux femmes ménagères</a>
                                    </h3>
                                    {{-- <a class="company" href="company-details.html">Hotelzo.com</a> --}}
                                    <ul>
                                        <li>
                                            <i class="icofont-money-bag"></i>
                                            100 000 Fr - 140 000 Fr
                                        </li>
                                        <li>
                                            <i class="icofont-location-pin"></i>
                                            Côte d'Ivoire, Abidjan, Cocody xxx
                                        </li>
                                    </ul>
                                </div>
                                <div class="job-inner-right">
                                    <ul>
                                        <li>
                                            <a href="{{ route('detailOffre') }}">Voir <i class="icofont-plus"></i> </a>
                                        </li>
                                        <li>
                                            <span>3 Mois</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
  
                </div>
            </div>
            <div class="job-pagination">
                <ul>
                    <li>
                        <a href="#">
                            <i class="icofont-simple-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icofont-simple-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@stop