@extends('bases.master')

@section('style')
    
@endsection

@section('content')
    <section class="how-banner">
        <div class="container">
            <h4>DEVENIR PRESTATAIRE</h4>
        </div><!-- /.container -->
   </section>	

    <section class="dashboard section-padding">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-12">		

                <div class="job-box">
                    <div class="job-header">
                        <h4>DEVENIR PRESTATAIRE</h4>
                    </div>
                    <form method="post" id="addform">

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>NOM</label>
                                <input type="text" name="title" class="form-control" placeholder="Nom" value=""/>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>PRENOM</label>
                                <input type="text" name="title" class="form-control" placeholder="Prénom" value=""/>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>CONTACT</label>
                                <input type="text" name="title" class="form-control" placeholder="Contact" value=""/>
                            </div>  
                        </div> 

                        <div class="col-lg-4">
                            <div class="form-group">	
                                <label>DATE DE NAISSANCE</label>
                                <input type="date" name="title" class="form-control" placeholder="Nom" value=""/>
                            </div>  
                        </div>

                        <div class="col-lg-4">
                            <!-- <div class="form-group">	
                                <label>VILLE</label>
                                <input type="text" name="title" class="form-control" placeholder="Ville" value=""/>
                            </div>  --> 
                            <div class="form-group">    
                                <label>VILLE</label>
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
                                <label>COMMUNE/QUARTIER</label>
                                <input type="text" name="title" class="form-control" placeholder="Commune ou quartier" value=""/>
                            </div>  
                        </div> 
                  
                        <div class="col-lg-5">
                            <div class="form-group">	
                                <label>POSTE</label>
                                <select class="form-control form-control-lg">
                                    <option value="">Sélectionnez le metier</option>
                                    <option value="">Aide Ménagère</option>	
                                    <option value="">Garde Enfant</option>	
                                    <option value="">Ménuisier</option>	
                                    <option value="">Plombier</option>	
                                </select>
                            </div> 
                        </div> 
                        
                        <div class="col-lg-7">
                            <div class="form-group">	
                                <label>AUTRE</label>
                                <input type="text" name="title" class="form-control" placeholder="Autre poste à préciser" value=""/>
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