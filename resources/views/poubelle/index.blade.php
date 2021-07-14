@extends('bases.master')

@section('style')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<section class="dashboard section-padding">
    <div class="container">
        @livewire('dashboard.dashboard')
    </div><!-- /.container -->
  </section>	 
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").dataTable();
        });
    </script>
@endsection