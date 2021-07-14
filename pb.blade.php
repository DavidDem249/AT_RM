@extends('bases.master')

@section('styles')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

	<style>
		.label-file {
		    cursor: pointer;
		    color: #00b1ca;
		    font-weight: bold;
		}
		.label-file:hover {
		    color: #25a5c4;
		}

		.input-file {
		    display: none;
		}
	</style>
@stop

@section('content')
	<div class="page-title-area" style="background-image: url('bienv.png');">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">TROUVEZ DES RESSOURCES QUALIFIEES CHEZ NOUS</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="create-account-area pt-100 pb-100">
	    <div class="container">
	    	<form>
		    	<div class="create-information">
					
					<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations de contact</h3>
						<!-- <div class="create-information-btn">
							<a href="#">Upload Cover Photo</a>
							<a href="#">Upload Your CV</a>
						</div> -->
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="name">NOM</label>
								<input type="text" name="nom" id="name" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="lastname">PRENOM</label>
								<input type="text" name="prenom" id="lastname" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="phone">NUMERO</label>
								<input type="tel" name="phone" id="phone" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="dateN">DATE DE NAISSANCE</label>
								<input type="date" name="date_naiss" id="dateN" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="pays">PAYS</label>
								<select name="pays" id="pays" class="form-control">
									<option value="">Sélectionnez le pays</option>
									<option value="">Mali</option>
								</select>
							</div>
						</div>
						<!-- <div class="col-lg-4">
							<div class="form-group">
								<label for="ville">VILLE</label>
								<input type="text" id="ville" class="form-control">
							</div>
						</div> -->
						<div class="col-lg-4">
							<div class="form-group">
								<label for="ville">VILLE</label>
								<select name="ville" id="ville" class="form-control">
									<option value="">Sélectionnez la ville</option>
									<option value="">Abidjan</option>
									<option value="">Daloa</option>
								</select>
							</div>
						</div>
						{{--
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="gender-area">
									<span>Gender</span>
						 			<input type="radio" name="gender" id="male" value="male" checked>
									<label for="male">Male</label>
									<input type="radio" name="gender" id="female" value="female">
									<label for="female">Female</label>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<textarea id="your_message" class="form-control" rows="8"></textarea>
							</div>
						</div>
						--}}
					</div>
					<!-- </form> -->
				</div>

				{{--<div class="create-education">
					<div class="create-education-wrap">
						<div class="create-education-left">
							<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations travail</h3>
						</div>
						<!-- <div class="create-education-right">
							<a href="#">Add Education</a>
						</div> -->
					</div>
					<!-- <form> -->
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								<!-- <div class="col-lg-6">
									<div class="form-group">
										<div class="gender-area">
											<span>Gender</span>
									 		<input type="radio" name="gender" id="male" value="male" checked>
											<label for="male">Male</label>
											<input type="radio" name="gender" id="female" value="female">
											<label for="female">Female</label>
										</div>
									</div>
								</div> -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="work">TYPE TRAVAIL</label>
										<select name="work" id="work" class="form-control">
											<option value="">Votre domaine activité *</option>
											<option value="1">Plomberie</option>
											<option value="2">Menuiserie</option>
											<option value="3">Carrelage</option>
											<option value="4">Peinture</option>
											<option value="5">Maçonnerie</option>
											<option value="6">Feronnerie</option>
											<option value="7">Mécanique</option>
											<option value="8">Vitrerie</option>
											<option value="9">Devis et plan de maison</option>
											<option value="10">Prestation informatique</option>
											<option value="12">Tapisserie</option>
											<option value="13">Electricité</option>
											<option value="15">Electronique</option>
											<option value="16">Serigraphie</option>
											<option value="21">Ménagère</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="dateN">AUTRES A PRECISER</label>
										<input type="text" placeholder="Autre(s) domaine activité à preciser" name="date_naiss" id="dateN" class="form-control">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="row">
								<div class="form-group">
									<label for="file" class="label-file">PHOTO DE PROFIL</label>
									<input type="file" class="form-control" id="customFile" />
								</div>
							</div>
						</div>

					</div>
					<!-- </form> -->
				</div>--}}

				<!-- <div class="create-education"> -->
					<div class="row">
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary" style="width: 100%">ENREGISTRER</button>
						</div>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-danger" style="width: 100%">ANNULER</button>
						</div>
					</div>
				<!-- </div> -->
			</form>
		</div>
	</div>
@stop


@section('script')
	
@stop