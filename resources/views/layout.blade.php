<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Document </title>
    <meta name="keywords" content="">
    <meta name="description" content=""/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    @yield('header')

</head>
<body>

    @yield('content')

    <script type="text/javascript" src="assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>

    @yield('footer')
</body>
</html>