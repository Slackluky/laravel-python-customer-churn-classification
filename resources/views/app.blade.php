<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        <!-- Scripts -->
        @routes
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        @inertiaHead
        @production
            @php
            $manifest = json_decode(File::get(public_path('build/manifest.json')), true);
            @endphp
            <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
            <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/js/app.js']['css'][0]) }}">
            @else
            @verbatim
            <script type="module" src="http://localhost:3000/@vite/client"></script>
            @endverbatim
            <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
        @endproduction
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv
    </body>
</html>
