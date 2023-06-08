<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')   

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css ') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/dist/css/adminlte.min.css ') }}">
    <link rel="stylesheet" href="./app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('partials.header')

    @include('partials.siderbar')

    @yield('content')
    
    @include('partials.footer')

</div>

<!-- jQuery -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/jquery/jquery.min.js ') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.1.0/dist/js/adminlte.min.js ') }}"></script>
</body>
</html>
