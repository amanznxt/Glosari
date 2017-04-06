<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    @yield('styles')

    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

    <style type="text/css">
        * {
            font-family: 'Karla', sans-serif;
        }
    </style>
    <!-- Scripts -->
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?></script>
    @yield('styles')
</head>
<body>
    @include('layouts.components.navigation')

    @if(session('message'))
        @include('components.message')
    @endif

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    @yield('scripts')
</body>
</html>
