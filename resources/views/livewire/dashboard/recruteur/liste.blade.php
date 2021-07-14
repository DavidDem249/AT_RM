<div>
    

    <div class="row">
		<div class="col-lg-12">
			<div class="row tab-content">
				@foreach($recruteurs as $recruteur)
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="card card-profile">
							<div class="card-header justify-content-end pb-0">
								<div class="dropdown">
									<button class="btn btn-link" type="button" data-toggle="dropdown">
										<span class="dropdown-dots fs--1"></span>
									</button>
									<div class="dropdown-menu dropdown-menu-right border py-0">
										<div class="py-2">
											<a class="dropdown-item" href="javascript:void(0);">
												Modifier
											</a>
											<a class="dropdown-item text-danger" href="javascript:void(0);">
												Supprimer
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pt-2">
								<div class="text-center">
									<div class="profile-photo">
										<img src="https://www.belin.re/wp-content/uploads/2018/11/default-avatar.png" width="100" class="img-fluid rounded-circle" alt="">
									</div>
									<h3 class="mt-4 mb-1">
										{{ $recruteur->lastname }}
										{{ $recruteur->firstname }}
									</h3>
									<p class="text-muted">
										<span class="badge badge-pill badge-success">Actif</span>
									</p>
									<ul class="list-group mb-3 list-group-flush">
										
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">
												Phone No. :
											</span>
											<strong>
												{{ $recruteur->phone }}
											</strong>
										</li>
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">
												Email:
											</span>
											<strong>
												{{ $recruteur->email }}
											</strong>
										</li>
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">
												Address:
											</span>
											<strong>
												{{ $recruteur->domicile ?? 'Non indiqué' }}
											</strong>
										</li>
									</ul>
									<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="#">
										<span class="btn-icon-left text-info"><i class="fa fa-eye"></i>
                                    	</span>
										Voir plus
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
