<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Travel Dreams" />
    <meta name="author" content="Travel Dreams" />
    <meta name="keywords" content="Travel Dreams" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <title>Travel Dreams</title>

    @include('libraries.frontend.styles')
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    @include('components.frontend.navbar')
    <main id="main">
        @yield('content')
    </main>
    @include('components.frontend.footer')
    @include('libraries.frontend.scripts')
</body>

</html>
