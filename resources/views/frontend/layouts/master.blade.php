<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">

        @yield('before_head')

    </head>
    <body>

    @include('frontend.layouts._header')

    <main role="main">

      @yield('main')

    </main>

    @include('frontend.layouts._footer')

    <script src="{{ mix('js/all.js') }}"></script>
    
    @yield('bofore_body')

    </body>
</html>
