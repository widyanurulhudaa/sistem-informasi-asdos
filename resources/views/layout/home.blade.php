<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SI Asdos MKU</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('includes.home.style')
</head>

<body>
    @include('includes.home.navbar')

    @yield('content')

    @include('includes.home.footer')

    @include('includes.home.script')


</body>

</html>
