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

	@livewire('recruteurs.recruteur')
@stop


@section('script')
	
@stop