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
                    <h1 class="revealOnScroll" data-animation="fadeInDown"> SE CREER UN COMPTE</h1>
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
                                    <h3>INSCRIPTION</h3>
                                </div><!-- /.form-head -->
                                <div class="form-body">            	
                
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input type="text" name="name" class="field" placeholder="Votre nom">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->	
                                    
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input type="text" name="lastname" class="field" placeholder="Votre prénom">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->
               
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input type="text" name="email" class="field" placeholder="Votre Email">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->
               
               
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input type="password" name="password" class="field" placeholder="Mot de passe">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->
  
                                    <div class="form-row">
                                        <div class="form-controls">
                                            <input type="password" name="confirmPassword" class="field" placeholder="Confirmation mot de passe">
                                        </div><!-- /.form-controls -->
                                    </div><!-- /.form-row -->
               
                                    {{-- <div class="checkbox"> 
                                        <label> <input type="checkbox"> Agree to the <a href="#">terms and policy</a> </label> 
                                    </div> --}}
             
                                </div><!-- /.form-body -->
      
                                <div class="form-foot">
                                    <div class="form-actions">
                                        {{-- <input type="hidden" name="token" value="" /> --}}
                                        <input type="submit" name="register" value="S'inscrire" class="kafe-btn kafe-btn-default full-width">
                                    </div><!-- /.form-actions -->
                                </div><!-- /.form-foot -->
                            </form>
             
                        </div><!-- /.form-sign -->
                    </div><!-- /.col-lg-6 -->
                </div>
          
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /section --> 		
@endsection