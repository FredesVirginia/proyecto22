<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page Template</title>
  <link rel="shortcut icon" href="{{asset('imgs/ico.png')}}" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{asset('css/jc/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/icon-font/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/typography-font/typo.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fontawesome-5/css/all.css')}}">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{asset('css/jc/aos.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jc/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jc/nice-select.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jc/slick.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jc/jquery-ui.css')}}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{asset('css/jc/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/c.css')}}">
  <!-- Custom stylesheet -->
</head>

<body>


    <div class="site-wrapper overflow-hidden bg-default-2">

        @include('app.layout._appheader')

        @include('dash.layout._sidebar')

        <div class="dashboard-main-container mt-25 mt-lg-31" id="dashboard-body" style="min-height:100vh;">
            <div class="container">

                @yield('content')

            </div>
        </div>


    </div>

  <!-- Vendor Scripts -->
  <script src="{{asset('js/jc/vendor.min.js')}}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{asset('js/jc/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('js/jc/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('js/jc/aos.min.js')}}"></script>
  <script src="{{asset('js/jc/slick.min.js')}}"></script>
  <script src="{{asset('js/jc/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/jc/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jc/jquery-ui.js')}}"></script>
  <!-- Activation Script -->
  <!-- <script src="{{asset('js/jc/drag-n-drop.js')}}"></script> -->
  <script src="{{asset('js/jc/custom.js')}}"></script>
  <script src="{{asset('js/c.js')}}"></script>

</body>
