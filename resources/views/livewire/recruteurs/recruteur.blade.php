<div>

    @if(session()->has('echec'))
	    <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}"></script>
	    <script>
	        iziToast.error({
	            title: 'Echec',
	            position: 'center',
	            message: 'Cet adresse email existe déjà',
	        })
	    </script>
    @endif

    @if(session()->has('invalide'))
	    <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}"></script>
	    <script>
	        iziToast.error({
	            title: 'Invalide',
	            position: 'center',
	            message: 'Remplissez correctement les champs',
	        })
	    </script>
    @endif

    <div class="create-account-area pt-100 pb-100">
	    <div class="container">
	    	<form wire:submit.prevent="submit" enctype="multipart/form-data">
		    	<div class="create-information">
		    		<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations de contact</h3>
				    <div class="row">
					    <div class="col-lg-8">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="name">NOM</label>
										<input type="text"  id="name" class="form-control" wire:model='nom'>

										@error('nom') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Saisissez le nom svp
											</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="lastname">PRENOM</label>
										<input type="text" id="lastname" class="form-control" wire:model='prenom'>
										@error('prenom') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Saisissez le prénom svp
											</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="phone">NUMERO</label>
										<input type="tel" id="phone" class="form-control" wire:model='phone'>
										@error('phone') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Saisissez le numéro svp
											</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="dateN">DATE DE NAISSANCE</label>
										<input type="date" id="dateN" class="form-control" wire:model='date_naissance'>

										@error('date_naissance') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Saisissez la date de naissance svp
											</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="pays">PAYS</label>
										<select id="pays" class="form-control" wire:model='pays'>
											<option value="">Sélectionnez le pays</option>
											@foreach($country as $countries)
							                    <option value="{{ $countries->id }}">
							                    	{{ $countries->libele }}
							                    </option>
							                @endforeach
										</select>

										@error('pays') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Sélectionnez un pays svp
											</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="ville">VILLE</label>
										@if(!is_null($pays))
											<select id="ville" class="form-control" wire:model='ville'>
												<option value="">
													Veilliez sélectionnez une ville *
												</option>
												
												@foreach($cities as $city)
							                        <option value="{{ $city->id }}">
							                        	{{ $city->libele }}
							                        </option>
							                    @endforeach
											</select>
										@else
											<select id="ville" class="form-control" wire:model='ville' disabled="true">
												<option value=""></option>
											</select>
										@endif

										@error('ville') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Sélectionnez la ville svp
											</span>
										@enderror
									</div>
								</div>
							</div>
						</div>

					    <div class="col-lg-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="file" class="label-file">
											@if($avatar)
												<span class="alert alert-success">
									                Image chargé avec succès
									            </span> <br>
											@else
												PHOTO DE PROFIL
											@endif
										</label>
										<div class="card" style="height: 207px; width: 250px;">
											@if($avatar)
												<img src="{{ $avatar->temporaryUrl() }}" width="250px" height="207px">
											@else
												<img src="{{ asset('assets/avatar.png') }}">
											@endif
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">

										<div
											x-data="{ isUploading: false, progress: 0 }"
    										x-on:livewire-upload-start="isUploading = true"
    										x-on:livewire-upload-finish="isUploading = false"
    										x-on:livewire-upload-error="isUploading = false"
    										x-on:livewire-upload-progress="progress = $event.detail.progress"
										>
										<input type="file" class="form-control" id="customFile" wire:model='avatar' />

										<center>
											<div x-show="isUploading">
										        <progress max="100" x-bind:value="progress"></progress>
										    </div>
										</center>

										@error('avatar') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Sélectionnez une photo
											</span>
										@enderror
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="create-education">
					<div class="create-education-wrap">
						<div class="create-education-left">
							<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations d'Identification</h3>
						</div>
						
					</div>
					<!-- <form> -->
					<div class="row">
						<!-- <div class="col-lg-12">
							<div class="row"> -->
							
								<div class="col-lg-4">
									<div class="form-group">
										<label for="email">VOTRE EMAIL</label>
										<input type="email" placeholder="Adresse Mail" id="email" class="form-control" wire:model='email'>

										@error('email') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Saisissez une adresse mail
											</span>
										@enderror
									</div>
								</div>

								<div class="col-lg-4">
									<div class="form-group">
										<label for="password">MOT DE PASSE</label>
										<input type="password" placeholder="Votre mot de passe" id="password" class="form-control" wire:model='password'>

										@error('password') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												Veilliez choisir un mot de passe
											</span>
										@enderror
									</div>
								</div>

								<div class="col-lg-4">
									<div class="form-group">
										<label for="conf" class="label-file">CONFIRMER</label>
										<input type="password" placeholder="Mot de passe confirmation" id="password" class="form-control" wire:model='password_confirmation'>

										@error('password_confirmation') 
											<span class="text-danger" style="color: red;font-weight:bold;">
												{{-- $message --}}
												Confirmation invalide
											</span>
										@enderror
									</div>
								</div>

							<!-- </div>
						</div> -->

					</div>
					<!-- </form> -->
				</div>

				<div class="row">
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary" style="width: 100%">ENREGISTRER</button>
					</div>
					<div class="col-lg-6">
						<button wire:click='resetInput()' class="btn btn-danger" style="width: 100%">ANNULER</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
