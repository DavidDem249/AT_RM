<div>
    
    <div class="row">
    	{{--<div class="col-lg-12 mb-3">
			<div class="row">
				<div class="col-lg-6">
					<select class="form-control form-control-lg">
                        <option>Réchercher</option>
                        <option>Ressource disponible</option>
                        <option>Réssource occupée</option>
                        <option>Réssource désactivée</option>
                    </select>
				</div>
				<div class="col-lg-6">
					<select class="form-control form-control-lg">
                        <option>Réchercher</option>
                        <option>Ressource disponible</option>
                        <option>Réssource occupée</option>
                        <option>Réssource désactivée</option>
                    </select>
				</div>
			</div>
		</div>--}}
		
		<div class="col-lg-12">
			<div class="row tab-content">
				<div id="list-view" class="tab-pane fade active show col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">LISTE DES RESSOURCES  </h4>
							<!-- <input type="" class="form-control" name=""> -->
							<a href="#" class="btn btn-primary">+ Ajouter</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								
								<table id="example3" class="display" style="min-width: 845px">
									<thead>
										<tr>
											<!-- <th></th>
 -->										<th>Nom</th>
											<th>Prénom</th>
											<th>Numéro</th>
											<!-- <th>Domaine</th> -->
											<th>Date inscription</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($resources as $resource)
											<tr>
												<td>{{ $resource->lastname }}</td>
												<td>{{ $resource->firstname }}</td>
												<td>{{ $resource->phone }}</td>
												
												<td>{{ $resource->created_at->format('m-d-Y') }}</td>
												<td>
													<span class="badge badge-rounded badge-success">En service</span>
												</td>
												
												<td>
													<a href="#" class="btn btn-sm btn-primary" title="Modifier">
														<i class="la la-eye"></i>
													</a>
													<a href="#" class="btn btn-sm btn-success" title="Modifier">
														<i class="la la-submit"></i>
													</a>
													<a href="#" class="btn btn-sm btn-danger" title="Supprimer">
														<i class="la la-trash-o"></i>
													</a>
												</td>					
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
	                </div>
	            </div>
				<!-- <div id="grid-view" class="tab-pane fade col-lg-12">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="card card-profile">
								<div class="card-header justify-content-end pb-0">
									<div class="dropdown">
										<button class="btn btn-link" type="button" data-toggle="dropdown">
											<span class="dropdown-dots fs--1"></span>
										</button>
										<div class="dropdown-menu dropdown-menu-right border py-0">
											<div class="py-2">
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body pt-2">
									<div class="text-center">
										<div class="profile-photo">
											<img src="{{ asset('dash/images/profile/small/pic2.jpg') }}" width="100" class="img-fluid rounded-circle" alt="">
										</div>
										<h3 class="mt-4 mb-1">Alexander</h3>
										<p class="text-muted">M.COM., P.H.D.</p>
										<ul class="list-group mb-3 list-group-flush">
											<li class="list-group-item px-0 d-flex justify-content-between">
												<span class="mb-0">Gender :</span><strong>Male</strong></li>
											<li class="list-group-item px-0 d-flex justify-content-between">
												<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
											<li class="list-group-item px-0 d-flex justify-content-between">
												<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
											<li class="list-group-item px-0 d-flex justify-content-between">
												<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
										</ul>
										<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
