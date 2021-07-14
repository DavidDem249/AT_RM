@extends('bases.master')

@section('content')
    <section class="dashboard section-padding">
	    <div class="container">
	        <div class="row">
                <div class="col-sm-7 col-md-7">	
                    <div class="button-box">
                        <a href="{{ route('recrutement') }}" class="kafe-btn kafe-btn-mint-small">Retour aux offres</a>
                    </div><!-- /.prop-info -->	  
                    <div class="work-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="col-lg-12 top-sec">
                                    <h3 style='font-size: 2.2rem;text-transform:uppercase;'>Bésoin d'une femme de ménage à Abobo</h3>
                                    <h4 style='font-weight:bold'>Publier le 24-03-2021 </h4>
                                </div> 
                                <div class="col-lg-12">
                                    <hr class="small-hr" />
                                </div> 
            
                                {{--<div class="col-lg-12 middle-sec">
                                    <div class="col-lg-8">
                                        <img src="assets/img/users/8.jpg" class="img-circle img-thumbnail" alt="Image"/>
                                        <h3><a href="#">Kris Magamigi</a></h3>
                                        <h4><span class="label label-mint">Client</span></h4>
                                    </div><!-- .col-lg-3 -->
                                    <div class="col-lg-4">
                                        <a href="#" class="kafe-btn kafe-btn-mint-small"> Click here to Accept the Offer.</a>
                                    </div><!-- .col-lg-9 -->
                                </div> --}}  
        
                                <div class="col-lg-12">
                                    <hr class="small-hr" />
                                </div> 
        
                                <div class="col-lg-12 bottom-sec">
                                    <div class="col-lg-3">
                                        <h5> Code </h5>
                                        <p> #AT6778</p>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="pull-right">
                                            <h5> Localisation </h5>
                                            <p>Abidjan</p>
                                        </div>  
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="pull-right">
                                            <h5> Durée </h5>
                                            <p>3 Mois</p>
                                        </div>  
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="pull-right">
                                            <h5> Date limite </h5>
                                            <p><span style='color:red;'>29-09-2021</span></p>
                                        </div>  
                                    </div>
                                    
                                </div><!-- /.col-lg-12 -->
            
                            </div><!-- .col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- .work-box --> 

                    <div class="work-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

                                <div class="col-lg-12 top-sec">
                                    <h3>Description</h3>
                                    <p>Lorem ipsum dolor sit amet, lorem quaestio similique has at, possit vivendum ne nam. 
                                    Unum saepe ea vim, ius sensibus volutpat et, eum legere nostrum explicari ei. 
                                    Sed ex legere hendrerit. Ei saperet officiis has, eu usu prompta mandamus. 
                                    Vix dicat electram ei, ne sea aeterno ornatus perpetua, ne cum omnis voluptua iracundia 
                                    Ei saperet officiis has, eu usu prompta mandamus. Ei saperet officiis has, eu usu prompta mandamus. 
                                    Ei saperet officiis has, eu usu prompta mandamus. Ei saperet officiis has, eu usu prompta mandamus. 
                                    Vix dicat electram ei, ne sea aeterno ornatus perpetua, ne cum omnis voluptua iracundia.</p>
                                </div> 
                
                            </div><!-- .col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- .work-box --> 
                </div><!-- /.col-md-7 -->
                
                <div class="col-sm-5 col-md-5">	
                    {{--<div class="button-box">
                        Veuilliez remplir ce formulaire
                    </div><!-- /.prop-info -->	--}}  
                    <div class="work-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="job-box">
		                            <div class="job-header">
		                                <h4 style='text-transform:uppercase;'>Soumettre sa candidature </h4>
		                            </div>
                                    <form method="post" id="addform">
		   
                                        <div class="form-group">	
                                            <label>ADRESSE EMAIL</label>
                                            <input type="email" name="title" class="form-control" placeholder="Ex : example@gmail.com" value=""/>
                                        </div>   
                
                                        <div class="form-group">	
                                            <label>NOM</label>
                                            <input type="text" name="title" class="form-control" placeholder="Ex: Zadi" value=""/>
                                        </div> 
                
                                        <div class="form-group">	
                                            <label>PRENOM</label>
                                            <input type="text" name="title" class="form-control" placeholder="Ex: Zahourou" value=""/>
                                        </div> 
                
                                        <div class="form-group">	
                                            <label>CONTACT</label>
                                            <input type="tel" name="title" class="form-control" placeholder="Ex: 00225 578989776" value=""/>
                                        </div>
                                        
                                        <div class="form-group">	
                                            <label>Ville</label>
                                            <input type="text" name="title" class="form-control" placeholder="" value=""/>
                                        </div>
            
                                        <!-- <div class="form-group">	
                                            <label>Description</label>
                                            <textarea class="form-control" rows="5" placeholder="Provide a more detailed description of your job to get better proposals."></textarea>
                                        </div>  -->
                
                                        <button class="kafe-btn kafe-btn-mint-small full-width">Postuler</button>
                                    </form>
                                </div><!-- /.job-box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@stop