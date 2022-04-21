<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts and icons  -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('fronted/css/custom.css') }}" rel="stylesheet">


</head>
<body>



            @include('layouts.inc.frontnav')
            <div class="content">

                @yield('content')
            </div>


            <script src="{{ asset('fronted/js/jquery-3.6.0.min.js') }}"></script>




            <script src="{{ asset('fronted/js/bootstrap.bundle.min.js') }}" defer></script>
            <script src="{{ asset('fronted/js/owl.carousel.min.js') }}" ></script>

            <script src="{{ asset('fronted/js/custom.js') }}" ></script>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal(" {{ session('status') }} ");

        </script>
    @endif
@yield('scripts')

</body>
</html>
