<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin</title>

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

    <!-- custom -->
    <link href="/assets/css/custom.min.css" rel="stylesheet">

</head>
<body class="login">

@include('auth.login')

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

    <!-- custom -->
    <script src="../assets/js/custom.min.js"></script>
    <!-- end scripts -->

     <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

     <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
    <footer>
           @include('dashboard/shared.footer')
        </footer>
</body>

</html>