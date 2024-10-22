@include('sweetalert::alert')

@extends('layouts.base')

@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

@if (session('success'))
    <script>
        Swal.fire(
          'Success!',
          '{{ session('success') }}',
          'success'
        )
    </script>
@endif
