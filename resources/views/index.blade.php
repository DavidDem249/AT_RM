@extends('bases.master')

@section('style')

    {{--<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('animate/animation.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('animate/slider.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    
    <style>
        .tab-content{
          background: #EB851D;
        }
        
        .img_box_left{
          width: 80%;
          border-radius: 20px;
          padding-top: 30px;
          padding-bottom: 30px;
        }
        
        .img_box_right{
          width: 80%;
          padding-top: 30px;
          padding-bottom: 30px;
        }
    
        .box .nav button{
          color: #130a02 !important;
          font-size: 16px;
          text-align: center !important;
          border: 1px solid #64A4BC;
          margin-right: 30px;
          border-radius: 0% !important;
          background-color: #ffffff;
        }


        .box .nav button.active {
            color: #ffffff !important;
            background-color: #EB851D !important;
            border-left: 5px solid #64A4BC;
        }

        .box .nav button:hover{
            background-color: #EB851D;
        }

        .btn1{
            color: #ffffff !important;
            margin-top: 150px;
            margin-bottom: 10px !important;
        }
        .btn{
            color: #ffffff !important;
        }
    </style>
@stop

@section('content')

    {{-- <div class="banner-area banner-area-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>Rechercher ici pour <span>Mieux</span> Employer</h1>
                        <p>Travailler, Récruter & opportunités de carrière futures</p>
                        <div class="banner-form-area">
                            <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre emploi">
                                            <label>
                                                <i class="icofont-search-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Categorie</option>
                                                <option>Aide ménagère</option>
                                                <option>Nousnous</option>
                                                <option>Electricien</option>
                                                <option>Plombier</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn banner-form-btn">Réchercher</button>
                            </form>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="{{ asset('assets/img/home-3/banner.png') }}" alt="Banner">
                        {{--<img src="{{ asset('images/images/banner-image-two.jpg') }}" alt="Banner">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jobseeker-area">
        <div class="container">
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
        </div>
    </div> --}}


    <section id="myCarousel" class="carousl" style="background: #17405e ">
        <!-- carouselExampleCaptions -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

              {{--<div class="carousel-item active">
                <img src="{{ asset('2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="banner-text">
                        <h1>Rechercher ici <br>
                        pour <span>Mieux</span> Employer</h1><br>
                        <div class="banner-form-area">
                            <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre emploi">
                                            <label>
                                                <i class="icofont-search-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Categorie</option>
                                                <option>Aide ménagère</option>
                                                <option>Nousnous</option>
                                                <option>Electricien</option>
                                                <option>Plombier</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn banner-form-btn">Rechercher</button>
                            </form>
                        </div>
                        <p style="color: transparent !important">
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                          </p>
                    </div>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('1.png') }}">
                <div class="carousel-caption d-none d-md-block">
                    <div class="banner-text">
                        <h1>Rechercher ici <br>
                        pour <span>Mieux</span> Employer</h1><br>
                        <div class="banner-form-area">
                            <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre emploi">
                                            <label>
                                                <i class="icofont-search-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Categorie</option>
                                                <option>Aide ménagère</option>
                                                <option>Nousnous</option>
                                                <option>Electricien</option>
                                                <option>Plombier</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn banner-form-btn">Rechercher</button>
                            </form>
                        </div>
                        <p style="color: transparent !important">
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                          </p>
                    </div>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('333.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="banner-text">
                        <h1>Rechercher ici <br>
                        pour <span>Mieux</span> Employer</h1><br>
                        <div class="banner-form-area">
                            <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre emploi">
                                            <label>
                                                <i class="icofont-search-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Categorie</option>
                                                <option>Aide ménagère</option>
                                                <option>Nousnous</option>
                                                <option>Electricien</option>
                                                <option>Plombier</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn banner-form-btn">Rechercher</button>
                            </form>
                        </div>
                        <p style="color: transparent !important">
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                            <small>Some representative placeholder content for the third slide.</small>
                        </p>
                    </div>
                </div>
              </div>--}}
              <div class="carousel-item active">
                  <div class="mask flex-center">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                          <h4>Present your <br>
                            awesome product</h4>
                          <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                            necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                          <a href="#">BUY NOW</a> </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="mask flex-center">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                          <h4>Present your <br>
                            awesome product</h4>
                          <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                            necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                          <a href="#">BUY NOW</a> </div>
                        <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
              <div class="mask flex-center">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-7 col-12 order-md-1 order-2">
                      <h4>Present your <br>
                        awesome product</h4>
                      <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                        necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                      <a href="#">BUY NOW</a> </div>
                    <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
                  </div>
                </div>
              </div>
              </div>  
            </div>
        </div>
    </section>

    <div class="account-area" style="background: #c48f6c">
        <div class="container">
            <div class="row account-wrap">
                <div class="col-sm-6 col-lg-4">
                    <div class="account-item">
                        <i class="flaticon-approved"></i>
                        <span>Register Your Account</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="account-item">
                        <i class="flaticon-cv"></i>
                        <span>Upload Your Resume</span>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="account-item account-last">
                        <i class="flaticon-customer-service"></i>
                        <span>Apply for Dream Job</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    {{--@include('include.slider')--}}

    {{--<div class="jobseeker-area">
        <div class="container">
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
        </div>
    </div>--}}

    @include('include.section-bas')


    <!-- section "nos partenaies" (debut)-->
    @include('include.section-partenaire')
    <!-- section "nos partenaies" (fin)-->

    @section('script')

        <script>
            $(document).ready(function () {
                $('#myCarousel').carousel({
                    interval: 3000,
                })
            })
        </script>

    @stop
@stop