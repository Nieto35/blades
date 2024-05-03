<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ (isset($title) ? ($title . ' — ') : '') . config('company.name') }}</title>

        @stack ('meta')

        @stack ('styles')

        @stack ('head_scripts')
    </head>
    <body>
        @yield ('content')

        @stack ('scripts')
    </body>
</html>
