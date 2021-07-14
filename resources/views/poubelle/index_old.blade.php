@extends('bases.master')

@section('content')
	<section class="tr-banner section-before bg-image">
        <div class="container">
            <div class="banner-content text-center">
                <h2>Trouvez les meilleurs services chez agiles telecoms</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</h3>

		        <form class="form-horizontal"> 
				    <div class="col-md-10 no-padd"> 
				        <div class="input-group"> 
				        	<input type="text" placeholder="Que cherchez-vous?" class="form-control" />
				        </div>
				    </div>
				 	<div class="col-md-2 no-padd"> 
				  		<div class="input-group"> 
				   			<button type="submit" class="kafe-btn kafe-btn-mint full-width">Allons-y!</button> 
				  		</div>
				 	</div>
				</form>
		
				<div class="row hidden-xs">
				 
				    <div class="col-lg-4 col-sm-6 col-xs-12">
				        <div class="features">
				        	<a href="{{ route('dashboard') }}" style="color:white;">
								<span class="fa-stack fa-3x">
								 <i class="fa fa-circle fa-stack-2x"></i>
								 <i class="fa fa-clone fa-stack-1x fa-inverse"></i>
								</span><!-- /span -->
							</a>
					  		<p style='text-transform:uppercase;'>Publier une offre</p>
				    	</div><!-- /.features -->
				    </div><!-- /.col-md-4 -->
				 
					{{--<div class="col-lg-3 col-sm-6">
					    <div class="features">
					    	<a href="#" style="color:white;">
								<span class="fa-stack fa-3x">
								 <i class="fa fa-circle fa-stack-2x"></i>
								 <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
								</span><!-- /span -->
							</a>
					  		<p style='text-transform:uppercase;'>Trouver du travail</p>
					  	</div><!-- /.features -->
				    </div>--}}<!-- /.col-md-4 -->
				 
					<div class="col-lg-4 col-sm-6 col-xs-12">
					    <div class="features">
					    	<a href="{{ route('prestataire') }}" style="color:white;">
								<span class="fa-stack fa-3x">
								 <i class="fa fa-circle fa-stack-2x"></i>
								 <i class="fa fa-user fa-stack-1x fa-inverse"></i>
								</span><!-- /span -->
							</a>
					  		<p style='text-transform:uppercase;'>Devenir prestataire</p>
					    </div><!-- /.features -->
					</div><!-- /.col-md-4 -->

					<div class="col-lg-4 col-sm-6 col-xs-12">
					    <div class="features">
					    	<a href="{{ route('demandeRessource') }}" style="color:white;">
								<span class="fa-stack fa-3x">
								 <i class="fa fa-circle fa-stack-2x"></i>
								 <i class="fa fa-users fa-stack-1x fa-inverse"></i>
								</span><!-- /span -->
							</a>
					  		<p style='text-transform:uppercase;'>Demander un dépanage</p>
					    </div><!-- /.features -->
					</div><!-- /.col-md-4 -->
		 
				</div><!-- /.row -->
       		</div><!--/. banner-content -->
        </div><!-- /.container -->
    </section>

	<section class="how">
		<div class="container">

		    <div class="col-lg-4 text-center">
		  		<i class="fa fa-file fa-5x"></i>
				<h3 style='font-weight:bold;font-size:2.1rem'>SERVICE DE QUALITÉ</h3>
		  		<h4 style='text-align:center;'>
					Vous êtes unique, notre service devrait l'être aussi. Nous donnons le maximum 
					de nous, afin que de mettre à votre disposition des services de qualités.
				</h4>
		 	</div>	
			<div class="col-lg-4 text-center">
				<i class="fa fa-users fa-5x"></i>
				<h3 style='font-weight:bold;font-size:2.1rem'>RESSOURCES QUALIFIÉES</h3>
				<h4>
					Lorem ipsum dolor sit amet consectetur Lorem, ipsum dolor Lorem, ipsum dolor
					Lorem ipsum dolor sit amet consectetur Lorem, ipsum dolor Lorem, ipsum dolor.
				</h4>
			</div>	
			<div class="col-lg-4 text-center">
				<i class="fa fa-briefcase fa-5x"></i>
				<h3 style='font-weight:bold;font-size:2.1rem'>DISPONIBILITE</h3>
				<h4>
					Lorem ipsum dolor sit, amet consectetur adipisicing Lorem ipsum dolor sit
					Lorem ipsum dolor sit amet consectetur Lorem, ipsum dolor Lorem, ipsum dolor.
				</h4>
			</div>	

		</div><!-- /.container -->
	</section>		

    <div class="tr-category section-padding">
	    <div class="container">
	        <div class="section-title">
	        	<h1 style='font-size:2.6rem'>
					Les catégories d'offres disponibles
				</h1>
				<hr style="height:4px;border-width:0;color:gray;background-color:rgb(9, 87, 90);width:10%;" />
				{{-- <div class="barr"></div> --}}
	    	</div>
	        <div class="row">	
		        <div class="category-list tr-list">
					<div class="col-lg-4">
					    <div class="category-box">
							<a href="{{ route('recrutement') }}">
							    <span class="icon">
							    	<!-- <i class="fa fa-code fa-2x"></i> -->
							    	<!-- <img src="https://img.icons8.com/wired/64/000000/teacher-hirring.png"/ width="60" height="60"> -->
							    	<img src="{{ asset('assets/img/emploi.png') }}" width="60" height="60">
							    </span>
							    <span class="category-title">Aide-ménagère</span>
							    <span class="category-quantity">(2)</span>
							</a>
					    </div><!-- category-box -->
			  	    </div><!-- col-lg-3 -->
		  			<div class="col-lg-4">
		   				<div class="category-box">
							<a href="#">
								<span class="icon">
									<!-- <i class="fa fa-eye fa-2x"></i> -->
									<img src="{{ asset('assets/img/immobilier.png') }}" width="60" height="60">
								</span>
								<span class="category-title">Garde d'enfant</span>
								<span class="category-quantity">(0)</span>
							</a>
			   			</div><!-- category-box -->
		  			</div><!-- col-lg-3 -->
		  			<div class="col-lg-4">
					   	<div class="category-box">
							<a href="#">
								<span class="icon">
									<!-- <i class="fa fa-edit fa-2x"></i> -->
									<img src="{{ asset('assets/img/appartements.png') }}" width="60" height="60">
								</span>
								<span class="category-title">Technicien surface</span>
								<span class="category-quantity">(0)</span>
							</a>
					   </div><!-- category-box -->
		  			</div><!-- col-lg-3 -->
		 		</div><!-- category-list -->
			</div><!-- row -->
	    </div><!-- /.container -->
	</div><!-- tr-category -->	 		
@stop