@extends('bases.master')

@section('style')
    <link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/login2.css') }}" rel="stylesheet">
    <style>
        /* body {
            overflow: hidden;
        } */

        /*.card {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            padding: 25px;
        }*/

    </style>
@endsection

@section('content')
    <!-- =====Header=============================================== -->     
    <div class="page-title-area" style="">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">MOT DE PASSE OUBLIE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Login Section =============================================== -->

    @if(session()->has('success'))
        <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}"></script>
        <script>
            iziToast.success({
                title: 'Succès',
                position: 'center',
                message: 'Inscription effectuée avec succès',
            })
        </script>
    @endif

    @livewire('auth.passwprd-forgot')
@stop