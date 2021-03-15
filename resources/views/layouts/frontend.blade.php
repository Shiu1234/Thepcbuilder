<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
  @yield('title') | ThePcBuilder
</title>
  <meta name="description" content="@yield('meta_desc')">
  <meta name="keywords" content="@yield('meta_tags')">

    <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- Alertify CSS -->
<link rel="stylesheet" href="{{asset('assets/css/alertify.min.css')}}">
<style>
body{


  width: 100%;
 height: 100%;
 margin: 0px;
 padding: 0px;
 overflow-x: hidden;
}

</style>
</head>

<body>

  <!-- Start your project here-->
@include('layouts.inc.frontnavbar')

<main>
@yield('content')

</main>

@include('layouts.inc.front-footer')

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom.js -->
  <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!--alertify -->
  <script src="{{asset('assets/js/alertify.min.js')}}"></script>

  <script>

  @error('email')
    $('#LoginModal').modal('show');
  @enderror

    @if (session('status'))
  alertify.set('notifier','position','top-right');
  alertify.success("{{session('status')}}");
   @endif
  </script>

      @yield('script')

</body>

</html>
