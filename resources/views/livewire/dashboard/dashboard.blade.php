<div>

    <!-- <div class="content-body">
        <div class="container-fluid"> -->
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="la la-users"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Résource</p>
                                    <h3 class="text-white">{{ $prestataire }}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: 20%"></div>
                                    </div>
                                    <small>
                                        <!-- 2 nouveaux inscrits aujourd'hui -->
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-light w-100">Voir
                                                <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                            </button>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-success">
                        <div class="card-body">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="la la-user"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total recruteur</p>
                                    <h3 class="text-white">{{ $recruteur }}</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: 20%"></div>
                                    </div>
                                    <small>
                                        <!-- 3 nouveaux inscrits aujourd'hui -->
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-light w-100">Voir
                                                <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                            </button>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total poste</p>
                                    <h3 class="text-white">8</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: 6%"></div>
                                    </div>
                                    <small>
                                        <!-- 3 candidatures en attente -->
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-light w-100">Voir
                                                <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                            </button>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="widget-stat card bg-danger">
                        <div class="card-body">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="la la-"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Rapports</p>
                                    <h3 class="text-white">2</h3>
                                    <div class="progress mb-2 bg-white">
                                        <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                    </div>
                                    <small>
                                        <!-- 3 rapports en attente -->
                                        <a href="#">
                                            <button type="button" class="btn btn-outline-light w-100">Voir
                                                <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                            </button>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-xxl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistique demande</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="barChart_2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistique</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="areaChart_1"></canvas>
                        </div>
                    </div>
                </div>

            </div>
       <!--  </div>
    </div> -->
    {{--
    <div class="row">
        @include('include.dash-sidebar')
        <div class="col-sm-8 col-md-9">
   
            <div class="dashboard-info">	
    
                <div class="row">
      
                    <div class="col-sm-4">
                        <div class="fun-fact">
                            <div class="media-body">
                                <h1>0</h1>
                                <span>Offre(s) publiée(s)</span>
                            </div>
                        </div><!-- /.fun-fact -->
                    </div><!-- /.col-sm-4 -->
       
                    <div class="col-sm-4">
                        <div class="fun-fact">
                            <div class="media-body">
                                <h1>0</h1>
                                <span>Employé(s)</span>
                            </div>
                        </div><!-- /.fun-fact -->
                    </div><!-- /.col-sm-4 -->
       
                    <div class="col-sm-4">
                        <div class="fun-fact">
                            <div class="media-body">
                                <h1>0</h1>
                                <span>Demande encours...</span>
                            </div>
                        </div><!-- /.fun-fact -->
                    </div><!-- /.col-sm-4 -->
                    
                </div><!-- ./row -->		
     
    
            </div><!-- /.dashboard-info -->
    
            <div class="prop-info text-center">
                <i class="fa fa-align-left fa-5x"></i>
                <h3 style="font-weight:bold">Vous n'avez aucune demande en cours actuellement.</h3>
            </div><!-- /.prop-info -->		  				
  
        </div><!-- /.col-md-9 -->

    </div><!-- /.row -->
    --}}
</div>
