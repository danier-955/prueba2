<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} &middot; @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @mix('css/app.css')
    @stack('styles')

</head>
<body class="bg-light">

    <div id="app">

      @include('layouts.dashboard.navbar')

      @include('layouts.dashboard.navdrawer')

      <main class="content-wrapper pt-4 mt-1">
        <div class="container pb-4">

          @yield('content')

        </div>

        @include('layouts.dashboard.footer')
      </main>

    </div>

    @mix('js/manifest.js')
    @mix('js/vendor.js')
    @mix('js/app.js')
    @mix('js/dashboard.js')
    @stack('scripts')

</body>
</html>
