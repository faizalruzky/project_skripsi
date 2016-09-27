<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />

    <title>Dashboard Admin</title>

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

    <!-- nprogress -->
    <link href="/assets/library/nprogress/nprogress.css" rel="stylesheet">
    <!-- end nprogress -->

    <!-- iCheck -->
    <link href="/assets/library/iCheck/skin/flat/green.css" rel="stylesheet">
    <!-- end iCheck -->

    <!-- progressbar -->
    <link href="/assets/library/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- end progressbar -->

    <!-- jqvmap -->
    <link href="/assets/library/jqvmap/jqvmap.min.css" rel="stylesheet">
    <!-- end jqvmap -->

    <!-- datatables -->
    <link href="/assets/library/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- end datatables -->

    <!-- custom -->
    <link href="/assets/css/custom.min.css" rel="stylesheet">

</head>
<body class="nav-md">

@include('dashboard/shared.side_nav')

<!-- scripts -->
    <!-- bootstrap -->
    <script src="/assets/library/bootstrap/js/bootstrap.min.js"></script>

    <!-- materialize -->
   <!--  <script src="/assets/library/materialize/js/materialize.min.js"></script> -->

    <!-- jquery -->
    <script src="/assets/jquery/jquery.min.js"></script>
    <!-- end jquery -->

    <!-- fastclick -->
    <script src="/assets/library/fastclick/fastclick.js"></script>
    <!-- end fastclick -->

    <!-- nprogress -->
    <script src="/assets/library/nprogress/nprogress.js"></script>

    <!-- gauge -->
    <script src="/assets/library/gauge/gauge.min.js"></script>
    <!-- end gauge -->

    <!-- icheck -->
    <script src="/assets/library/iCheck/icheck.min.js"></script>

    <!-- skycons -->
    <script src="/assets/library/skycons/skycons.js"></script>
    <!-- end skycons -->

    <script src="/assets/library/datatables/js/jquery.dataTables.min.js"></script>

    <!-- validator -->
    <script src="/assets/library/validator/validator.js"></script>
    <!-- end -->

    <!-- custom -->
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/validator-custom.js"></script>
    <script src="/assets/js/skycons-custom.js"></script>
    <script src="/assets/js/gauge-custom.js"></script>

    <!-- end scripts -->    

</body>
<footer>
    @include('dashboard/shared.footer')
</footer>
</html>