@extends('bases.master')

@section('style')
    <link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/login2.css') }}" rel="stylesheet">
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
          border: 6px solid #fff;
          border-color: #fff transparent #fff transparent;
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
@endsection

@section('content')
    <!-- =====Header=============================================== -->     
    <div class="page-title-area" style="">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">CONNECTEZ-VOUS</h2>
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


    @livewire('auth.login')

    
@endsection

@section('script')

    <script>
        // For Demo Purpose [Changing input group text on focus]
        $(function() {
            $('input, select').on('focus', function() {
                $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
            });
            $('input, select').on('blur', function() {
                $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
            });
        });

    </script>
@endsection
