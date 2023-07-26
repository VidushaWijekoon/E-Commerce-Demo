<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>Travel Dreams</title>

    @include('libraries.admin.styles')
</head>

<body>

    <div class="wrapper">
        @include('components.admin.sidebar')
        <div class="main">
            @include('components.admin.navbar')
            <main class="content">
                @yield('content')
            </main>
            @include('components.admin.footer')
        </div>
    </div>

    @include('libraries.admin.scripts')
</body>

</html>
