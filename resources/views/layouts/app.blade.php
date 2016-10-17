<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />

    <title>Al Quran - Indonesia v.1 Beta</title>

    <!-- Fonts -->
    <link href="/assets/fonts/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> -->

    <!-- Styles -->
    <link href="/assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- custom side nav -->
    <link href="/assets/css/sidenav-custom.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
            transition: background-color .5s;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</style>
</head>
<body id="app-layout">
    @include('public/shared.side_nav')

    <!-- JavaScripts -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <script src="/assets/library/bootstrap/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!-- js sidenav custom -->
    <script src="/assets/js/sidenav-custom.js"></script>

</body>
<footer>
    @include('public/shared.footer')
</footer>
</html>
