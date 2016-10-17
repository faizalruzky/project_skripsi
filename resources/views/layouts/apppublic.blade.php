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

    <!-- fonts -->
    <!-- awesome -->
    <link href="/assets/fonts/font-awesome.min.css" rel="stylesheet">

    <!-- materialize -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- end fonts -->

    <!-- styles -->
    <!-- bootstrap -->
    <link href="/assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- materialize -->
    <!-- <link rel="stylesheet" type="text/css" href="/assets/library/materialize/css/materialize.min.css">  -->   

    <!-- end styles -->

    <!--  -->

    <!-- custom -->
    <link href="/assets/css/custom.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" style="background:white">

@include('public/shared.top_nav')
    @yield('content')

<!-- scripts -->
    <!-- bootstrap -->
    <script src="/assets/library/bootstrap/js/bootstrap.min.js"></script>

    <!-- materialize -->
   <!--  <script src="/assets/library/materialize/js/materialize.min.js"></script> -->

    <!-- jquery -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <!-- end jquery -->

    <!-- validator -->
    <script src="/assets/library/validator/validator.js"></script>
    <!-- end -->

    <!-- custom -->
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/validator-custom.js"></script>
    <script src="/assets/js/skycons-custom.js"></script>
    <script src="/assets/js/gauge-custom.js"></script>

    <!-- end scripts -->    

</body>
<footer>
    @include('public/shared.footer')
</footer>
</html>