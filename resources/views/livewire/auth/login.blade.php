<div>
    
    <div class="h-100">
	    <div class="authincation h-100 mt-2">
	        <div class="container h-100">
	            <div class="row justify-content-center h-100 align-items-center">
	                <div class="col-md-6">
	                    <div class="authincation-content" style="background: linear-gradient(90deg, #0f7e4c 0%, #387481 63%)">
	                        <div class="row no-gutters">
	                            <div class="col-xl-12">
	                                <div class="auth-form">
	                                    <!-- <h4 class="text-center mb-4">
	                                    	CONEXION
	                                    </h4> -->
	                                    @if(session()->has('echec'))
	                                    	<center>
										        <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
										            <span style="color: #e00713;">{{ session('echec') }}</span>
										        </div>
										    </center>
								        @endif
	                                    <form wire:submit.prevent="submit">
	                                    	
	                                        <div class="form-group">
	                                            <label>
	                                            	<strong>Adresse email</strong>
	                                            </label>
	                                            <input type="email" wire:model="email" class="form-control form-control-lg" value="hello@example.com">
	                                        </div>
	                                        <div class="form-group">
	                                            <label>
	                                            	<strong>Mot de passe</strong>
	                                            </label>
	                                            <input type="password" wire:model="password" class="form-control form-control-lg" value="Password">
	                                        </div>
	                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
	                                            <div class="form-group">
	                                               <div class="custom-control custom-checkbox ml-1">
	                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1" wire:model="remember_me" value="remember_me">
	                                                    <label class="custom-control-label" for="basic_checkbox_1">
	                                                    	Se souvenir de moi
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <a href="{{ route('forgot') }}" style="color:white;">Mot de passe oublié ?</a>
	                                            </div>
	                                        </div>
	                                        <div class="text-center">
	                                        	<div wire:loading.delay wire:target="submit">
											        <div class="lds-dual-ring"></div>
											    </div>
	                                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #3ba2b7;" wire:loading.attr="disabled">
	                                            	Connexion
	                                            </button>
	                                            
	                                        </div>

	                                    </form>
	                                    <div class="new-account mt-3"><!-- background-color: grey; text-primary -->
	                                        <p>Vous n'avez pas de compte ? 
	                                        	<a class="" href="{{ route('register') }}" style="color:blue;font-weight: 900px;">Créer un compte</a>
	                                        </p>
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
</div>
