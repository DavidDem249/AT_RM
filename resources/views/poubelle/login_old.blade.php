@extends('bases.master')

@section('style')
    <link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- =====Header=============================================== -->	 
	<header class="header-login top-page">
        <div class="container">
            <div class="content">
                <div class="row">
                    <h1 class="revealOnScroll" data-animation="fadeInDown"> SE CONNECTER</h1>
                </div><!-- /.row -->
            </div><!-- /.content -->
        </div><!-- /.container -->
    </header><!-- /header -->
    <!-- Banner Login Section =============================================== -->

    <section class="banner-login">
        <div class="container">     
            <div class="row">
                <div class="main main-signup col-lg-12">
                    <div class="col-lg-6 col-lg-offset-3 text-center">
                    
                        <div class="form-sign">
                            <form method="post">
                                <div class="form-head">
                                    <h3>Login</h3>
                                </div><!-- /.form-head -->
                                <div class="margin-space"></div>
                                <a href="#" class="kafe-btn btn-facebook full-width">
                                    <i class="fa fa-facebook pull-left"></i> Connectez-vous avec Facebook
                                </a>
                                {{-- <div class="margin-space"></div>
                                <a href="register.html" class="kafe-btn btn-twitter full-width">
                                    <i class="fa fa-twitter pull-left"></i> Sign in with Twitter
                                </a> --}}
                                <div class="margin-space"></div>
                                <a href="#" class="kafe-btn btn-google-plus full-width">
                                    <i class="fa fa-google-plus pull-left"></i> Connectez-vous avec Google Plus
                                </a>
                                <div class="margin-space"></div>
                                <div class="form-body">            	
                    
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input name="email" placeholder="Email" class="field" type="text">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->

                                    <div class="form-row">
                                        <div class="form-controls">
                                        <input name="password" placeholder="Password" class="field" type="password">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->
                
                                    <div class="form-row">
                                        <div class="material-switch pull-left">
                                        <input id="someSwitchOptionSuccess" name="remember" type="checkbox"/>
                                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                                        <span>Se souvenir de moi</span>
                                        </div>
                                    </div><!-- /.form-row -->
                
                                </div><!-- /.form-body -->
    
                                <div class="form-foot">
                                    <div class="form-actions">					
                                        <input type="hidden" name="token" value="" />
                                        <input value="Se connecter" class="kafe-btn kafe-btn-default full-width" type="submit">
                                        <div class="margin-space"></div>
                                        <a href="{{ route('register') }}" class="kafe-btn kafe-btn-danger full-width">S'inscrire</a>
                                    </div><!-- /.form-actions -->
                                    <div class="form-head">
                                        <a href="#" class="more-link">Mot de passe oublié?</a>
                                    </div>
                                </div><!-- /.form-foot -->
                            </form>
                
                        </div><!-- /.form-sign -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section --> 
@endsection