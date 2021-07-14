<div>
    

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">lorem ipsun lorem lorem</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                	<a href="javascript:void(0)">Compte</a>
                </li>
                <li class="breadcrumb-item active">
                	<a href="javascript:void(0)">Profile</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile">
                <div class="profile-head">
                    <div class="photo-content">
                        <!-- <div class="cover-photo"></div> -->
                    </div>
                    <div class="profile-info mt-4">
						
                        <div class="row">
							<div class="col-sm-3">
								<div class="profile-photo">
									<img src="{{ asset('dash/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
								</div>
							</div>
                            <div class="col-sm-9 col-12">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6 border-right-1">
                                        <div class="profile-name">
                                            <h4 class="text-primary mb-0">{{ auth()->user()->name }}</h4>
                                            <p>Domaine</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6 border-right-1">
                                        <div class="profile-email">
                                            <h4 class="text-muted mb-0">
                                            	{{ auth()->user()->email }}
                                            </h4>
                                            <p>Email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-statistics">
                        <div class="text-center mt-4 border-bottom-1 pb-3">
                            <div class="row">
                                <div class="col">
                                    <h3 class="m-b-0">0</h3>
                                    <span>Lorem ipsun</span>
                                </div>
                                <div class="col">
                                    <h3 class="m-b-0">0</h3>
                                    <span>Lorem ipsun</span>
                                </div>
                                <div class="col">
                                    <h3 class="m-b-0">0</h3>
                                    <span>Lorem ipsun</span>
                                </div>
                            </div>
                            <div class="mt-4">
								<a href="javascript:void()" class="btn btn-primary px-5 mr-3 mb-4">Accueil</a> 
								<a href="javascript:void()" class="btn btn-dark px-3 mb-4">Envoi Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Messages</a>
                                </li>
                                <li class="nav-item">
                                	<a href="#about-me" data-toggle="tab" class="nav-link">A propos de moi</a>
                                </li>
                                <li class="nav-item">
                                	<a href="#profile-settings" data-toggle="tab" class="nav-link">Paramètres</a>
                                </li>
                            </ul>
                        	<div class="tab-content">
                        		<div id="about-me" class="tab-pane fade">
                                    <div class="profile-about-me">
                                        <div class="pt-4 border-bottom-1 pb-4">
                                            <h4 class="text-primary">About Me</h4>
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                        </div>
                                    </div>
                                    <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                        <h4 class="text-primary mb-4">Language</h4>
                                        <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
                                        <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                        <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                    </div>
                                    <div class="profile-personal-info">
                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>Mitchell C.Shay</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>example@examplel.com</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-9"><span>Full Time (Free Lancer)</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>27</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-9"><span>Rosemont Avenue Melbourne,
                                                    Florida</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Year Experience <span class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-9"><span>07 Year Experiences</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @include('pages.dashboard.compte.setings')

                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
