  
<header class="tr-header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			 	<a class="navbar-brand" href="/">
			 		<img src="{{ asset('assets/img/logoAT.png') }}" alt="Image"/> AT e-service
			 	</a>
			</div><!-- /.navbar-header -->
			<div class="navbar-left">
			    <div class="collapse navbar-collapse" id="navbar-collapse">
				    <ul class="nav navbar-nav">
				    	<li>
				    		<a href="/">Accueil</a>
				    	</li>
				    	<li>
				    		<a href="#">Actualités</a>
				    	</li>
				    	<li>
				    		<a href="#">Nos service</a>
				    	</li>
				    	<li>
				    		<a href="{{ route('recrutement') }}">Offres</a>
				    	</li>
				    </ul>
			    </div>
			</div><!-- /.navbar-left -->
			<div class="navbar-right">                          
 				<ul class="nav navbar-nav">
  					<li>
  						<i class="fa fa-user"></i>
  					</li>
  					<li>
  						<a href="{{ route('login') }}">Connexion/ Inscription </a>
  					</li>
					@auth
						<li class="dropdown mega-avatar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<span class="avatar w-32">
									<img src="{{ asset('assets/img/users/2.jpg') }}" class="img-resonsive img-circle" width="25" height="25" alt="...">
								</span>
								<span>{{ auth()->user()->name }}</span>
							</a>
							<div class="dropdown-menu w dropdown-menu-scale pull-right">
								<a class="dropdown-item" href="dashboard.html">
									<span>Dashboard</span>
								</a> 
								<a class="dropdown-item" href="#">
									<span>Profile</span>
								</a> 
								<a class="dropdown-item" href="#">
									<span>Settings</span>
								</a> 
								<a class="dropdown-item" href="#">Logout</a>
							</div>
						</li><!-- /navbar-item -->	
					@endauth
 				</ul><!-- /.sign-in -->   
 				<a href="{{ route('dashboard') }}" class="kafe-btn kafe-btn-mint-small">Publier une offre</a>
			</div><!-- /.nav-right -->
		</div><!-- /.container -->
	</nav><!-- /.navbar -->
</header><!-- Page Header --> 