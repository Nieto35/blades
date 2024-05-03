@extends('_layout')

@section('title', 'ERP')

@section('content')
    <div id="app"></div>
@endsection

@section('scripts')
    @routes

    <script>
        window.app = @json($app_data)
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_js.key') }}&libraries=places" async defer></script>
    <script src="{{ mix('dist/js/styles/index.js') }}" async defer></script>
    <script src="{{ mix('dist/js/erp/index.js') }}" async defer></script>
@endsection
