@extends('bases.master-dash')

@section('style')
    <link rel="stylesheet" href="{{ asset('dash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <!-- Datatable -->
    <link href="{{ asset('dash/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@stop

@section('content')
	<div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Récruteurs</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                	<a href="{{ url()->previous() }}">Accueil</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0);">Récruteurs</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0);">Liste</a>
                </li>
            </ol>
        </div>
    </div>

    @livewire('dashboard.recruteur.liste')

@stop

@section('script')
    <script src="{{ asset('dash/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dash/js/plugins-init/datatables.init.js') }}"></script>
@stop