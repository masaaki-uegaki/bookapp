<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-starturl" content="/">

    <meta name="twitter:card" content="summary">
    <meta property="og:title" content="{{ __('書籍リスト') }}">
    <meta property="og:description" content="{{ __('書籍リストのアプリケーション') }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://uwettie.bookapp.mydns.jp" />
    <meta property="og:site_name" content="Masaaki Uegaki" />

    <link rel="alternate" hreflang="{{ app()->getLocale() }}" href="http://uwettie.bookapp.mydns.jp/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', __('書籍リスト')) }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Layouts css -->
    @yield('layoutCss')
    <!-- Object css -->
    <link href="{{ asset('css/shared/objects.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @navbar
        @endnavbar

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
