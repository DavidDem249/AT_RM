@extends('bases.master')

@section('styles')
	
@stop

@section('content')

	<section class="featured-users">	
        <div class="container">
			<div class="section-title" style="padding-top: 20px;">
				<hr class="small-hr" />
				<h1 style="font-size:2.6rem;">LES OFFRES DISPONIBLES</h1>
				<hr class="small-hr" />
				{{-- <hr style="height:4px;border-width:0;color:gray;background-color:rgb(9, 87, 90);width:10%;" /> --}}
			</div>
			<div class="row"> 
		    	<div class="col-lg-9">	  
			    	<div class="row">
			    		@include('pages.recrutement.liste')
			    		@include('pages.recrutement.liste')
			    	</div>
			    </div>
			    <div class="col-sm-4 col-md-3">
					
					<div class="widget">
				    	<h3 class="widget_title">Categories</h3>
						<ul class="tr-list">
						 	<li>
						 		<a href="#" class="active">
						 			<!-- <i class="fa fa-code"></i> -->
						 			<img src="{{ asset('assets/img/emploi.png') }}" width="30" height="30" style="margin-right: 10px;margin-top: 12px;">  Aide-ménagère
						 		</a>
						 	</li>
						 	<li>
						 		<a href="#">
						 			<!-- <i class="fa fa-eye"></i>   -->
						 			<img src="{{ asset('assets/img/immobilier.png') }}" width="30" height="30" style="margin-right: 10px;margin-top: 12px;">  garde d’enfant
						 		</a>
						 	</li>
						 	<li>
						 		<a href="#">
						 			<!-- <i class="fa fa-edit"></i>   -->
						 			<img src="{{ asset('assets/img/appartements.png') }}" width="30" height="30" style="margin-right: 10px;margin-top: 12px;">  Technicien surface
						 		</a>
						 	</li>
						</ul>
				   		<!-- <div class="margin-space"></div>
				   		<div class="row">
				    		<div class="col-sm-6">
				     			<h3 class="widget_title_small">Feedback Rating</h3>
								<ul class="tr-list">
									<li><a href="#" class="active">Any</a></li>
								 	<li><a href="#">5 Stars</a></li>
								 	<li><a href="#">4.5+ Stars</a></li>
								 	<li><a href="#">4+ Stars</a></li>
								 	<li><a href="#">3+ Stars</a></li>
								 	<li><a href="#">No feedback yet</a></li>
								</ul>
							</div>
				    		<div class="col-sm-6">
				     			<h3 class="widget_title_small">Hours Worked</h3>
								<ul class="tr-list">
								 	<li><a href="#" class="active">Any</a></li>
								 	<li><a href="#">800+ Hours</a></li>
								 	<li><a href="#">500+ Hours</a></li>
								 	<li><a href="#">300+ Hours</a></li>
								 	<li><a href="#">100+ Hours</a></li>
								 	<li><a href="#">No Hours</a></li>
								</ul>
							</div>
				   		</div> -->
				 	</div><!-- /.widget --> 
			    </div>
			</div>
		</div>
	</section>
@stop