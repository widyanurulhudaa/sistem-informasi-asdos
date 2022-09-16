@extends('layout.login')
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url ('admin1/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ url ('admin1/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ url ('admin1/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url ('admin1/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url ('admin1/images/favicon.png')}}" />
</head>

@yield('content')

  <!-- plugins:js -->
  <script src="{{ url ('admin1/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url ('admin1/js/off-canvas.js') }}"></script>
  <script src="{{ url ('admin1/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url ('admin1/js/template.js') }}"></script>
  <script src="{{ url ('admin1/js/settings.js') }}"></script>
  <script src="{{ url ('admin1/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
