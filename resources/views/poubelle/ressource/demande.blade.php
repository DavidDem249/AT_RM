@extends('bases.master')

@section('style')
    
@endsection

@section('content')
    <section class="how-banner">
        <div class="container">
            <h4>DEMANDER UNE RESSOURCE</h4>
        </div><!-- /.container -->
   </section>	

    <section class="dashboard section-padding">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-12">		

                <div class="job-box">
                    <div class="job-header">
                        <h4 style="text-align: center;">FAITE VOTRE DEMANDE EN REMPLISSANT CE FORMULAIRE</h4>
                        <hr style="height:4px;border-width:0;color:gray;background-color:rgb(9, 87, 90);width:10%;" />
                    </div>
                    <form method="post" id="addform">

                        <div class="col-lg-12">
                            <h4 style="font-weight:bold;">LES DETAILS DE LA DEMANDE</h4>
                        </div> <br><br><br>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>QUEL SERVICE CHERCHEZ-VOUS ?</label>
                                <select class="form-control form-control-lg">
                                    <option value="">Sélectionnez un service</option>
                                    <option value="">Aide Ménagère</option>	
                                    <option value="">Garde Enfant</option>	
                                    <option value="">Ménuisier</option>	
                                    <option value="">Plombier</option>	
                                </select>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>VOTRE VILLE</label>
                                <select class="form-control form-control-lg">
                                    <option value="">Sélectionnez Une ville</option>
                                    @foreach ($data as $pays)
                                        <option value="{{ $pays }}">{{ $pays }}</option>	
                                    @endforeach
                                </select>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>VOTRE ADRESSE COMPLET</label>
                                <input type="text" name="title" class="form-control" placeholder="Commune ou quartier" value=""/>
                            </div>  
                        </div> 

                        <div class="col-lg-12">
                            <div class="form-group">	
                                <label>DESCRIPTION</label>
                                <textarea class="form-control" rows="5" placeholder="Décrivez-nous votre problème."></textarea>
                            </div> 
                        </div> 

                        {{-- <div class="col-lg-5">
                            <div class="form-group">	
                                <label>DATE</label>
                                <input type="date" name="date" class="form-control" value=""/>
                            </div> 
                        </div>  --}}
                        
                        <div class="col-lg-12">
                            <h4 style="font-weight:bold;">INFORMATION DE CONTACT</h4>
                        </div> <br><br><br>
                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>NOM</label>
                                <input type="text" name="title" class="form-control" placeholder="Nom" value=""/>
                            </div>  
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>PRENOMS</label>
                                <input type="text" name="title" class="form-control" placeholder="Prénom" value=""/>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>CONTACT</label>
                                <input type="text" name="title" class="form-control" placeholder="Contact" value=""/>
                            </div>  
                        </div> 
                        <div class="col-lg-12">
                            <div class="form-group">	
                                <label>ADRESSE EMAIL</label>
                                <input type="email" name="title" class="form-control" placeholder="Votre adresse email" value=""/>
                            </div>  
                        </div>  

                        {{-- <div class="form-group">	
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Provide a more detailed description of your job to get better proposals."></textarea>
                        </div>  --}} 
                        
                        <button class="kafe-btn kafe-btn-mint-small full-width-f">Envoyer</button>
                        {{-- <div class="col-lg-6">
                            <button class="kafe-btn kafe-btn-mint-small full-width">Envoyer</button>
                        </div> --}}
                    </form>
                </div><!-- /.job-box -->		
              
              </div><!-- /.col-md-9 -->
           </div>
       </div>
   </section>

@endsection

@section('script')
    
@endsection