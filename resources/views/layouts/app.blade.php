<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arminnasiri">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin_tm/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_tm/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin_tm/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin_tm/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin_tm/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('admin_tm/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin_tm/js/respond.min.js')}}"></script>
    <![endif]-->
    @yield('css')
</head>

<body class="login-body">
<div class="container">


@yield('content')
</div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin_tm/js/jquery.js')}}"></script>
    <script src="{{asset('admin_tm/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_tm/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('admin_tm/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{asset('admin_tm/js/common-scripts.js')}}"></script>
    @yield('js')

</body>
</html>
