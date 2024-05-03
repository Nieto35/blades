<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title . ' — ' . config('company.name') }}</title>

        @stack ('styles')
    </head>
    <body>
        <div id="app">
            @yield ('content')
        </div>

        <script src="{{ mix('dist/js/styles/index.js') }}" async defer></script>
        <script src="{{ mix('dist/js/payroll-draft/index.js') }}" async defer></script>

        @stack ('scripts')
    </body>
</html>
