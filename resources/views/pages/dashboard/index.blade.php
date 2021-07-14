@extends('bases.master-dash')

@section('content')

	@if(session()->has('success'))
        <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}"></script>
        <script>
            iziToast.success({
                title: 'Success',
                position: 'topCenter',
                message: "{{ session()->get('success')}}",
            })
        </script>
    @endif

	@livewire('dashboard.dashboard')
@stop