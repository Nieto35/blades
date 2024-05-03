@extends('_layout')

@section('title', 'Autenticación')

@section('content')
    <div id="app"></div>
@endsection

@section('scripts')
    @routes

    <script>
        window.app = @json($app_data)
    </script>

    <script src="{{ mix('dist/js/styles/index.js') }}" async defer></script>
    <script src="{{ mix('dist/js/auth/index.js') }}" async defer></script>
@endsection
