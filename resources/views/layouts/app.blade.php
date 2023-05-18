<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Najara</title>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- styles --}}
    @stack('styles')
</head>

<body>

    <!-- header panel -->
    @include('layouts._partials.header')
    <!-- header panel -->

    <!-- content panel -->
    @yield('content')
    <!-- content panel -->

    <!-- footer panel -->
    @include('layouts._partials.categories_footer')
    @include('layouts._partials.footer')
    <!-- footer panel -->

    {{-- scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
