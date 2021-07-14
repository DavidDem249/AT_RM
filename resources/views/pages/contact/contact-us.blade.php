@extends('bases.master')

@section('style')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
    <link rel='stylesheet' id='vc_ihover_cq_style-css' href='http://stopdesign.cn/codecanyon/vc-extensions/wp-content/plugins/vc-extensions-cqbundle/ihover/css/ihover.css?ver=3.9.2' type='text/css' media='all' />

    <style>
        .lds-dual-ring {
          display: inline-block;
          width: 80px;
          height: 80px;
        }
        .lds-dual-ring:after {
          content: " ";
          display: block;
          width: 64px;
          height: 64px;
          margin: 8px;
          border-radius: 50%;
          /*border: 6px solid black;*/
          border: 6px solid #fff;
          /*border-color: black;*/
          border-color: green transparent green transparent;
          animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
          0% {
            transform: rotate(0deg);
          }
          100% {
            transform: rotate(360deg);
          }
        }
    </style>

@stop

@section('content')
	<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">CONTACTEZ-NOUS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card border ">
            <!--toast alert message recu-->
            @if(session()->has('message'))
            <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}"></script>
            <script>
                iziToast.success({
                    title: 'OK',
                    position: 'center',
                    message: "Message envoyé avec succès!",
                })
            </script>
            @endif
            <!--fin du toast-->
            @livewire('contact.contact-component')

        </div>
    </div>
    <br>
    <div class="map-area pb-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1610127505137!2d-3.9783475854389385!3d5.392418736773158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc19345661af3c7%3A0xfde21c611e00748c!2sRadio%20Cocody%20FM%20(98.5)!5e0!3m2!1sfr!2sci!4v1624409279065!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
@stop