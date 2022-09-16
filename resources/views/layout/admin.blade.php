<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('includes.admin1.style')


</head>
 <body id="page-top">
<div id="wrapper">

    @include('includes.admin1.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
    @include('includes.admin1.navbar')
    @yield('content')
    @include('includes.admin1.footer')
        </div>
    @include('includes.admin1.script')
</div>

</body>

</html>


