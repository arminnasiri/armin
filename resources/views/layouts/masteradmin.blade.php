<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <title> مدیریت::@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.rtl.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/MoneAdmin.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/Font-Awesome/css/font-awesome.css')}}" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
      @yield('css')
    <!-- END PAGE LEVEL  STYLES -->
</head>
<body class="padTop53 " >
<div id="wrap">


    <!-- HEADER SECTION -->
    <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding: 10px;">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                <i class="icon-align-justify"></i>
            </a>
            <!-- LOGO SECTION -->
            <header class="navbar-header">

                <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" height="30" />
                    <h1 class="site-title">خبرگزاری شما</h1>
                </a>
            </header>
            <!-- END LOGO SECTION -->
            <ul class="nav navbar-top-links navbar-left">

                <!--ADMIN SETTINGS SECTIONS -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="icon-user"></i> مشاهده پروفایل </a>
                        </li>
                        <li><a href="#"><i class="icon-gear"></i> تنظیمات </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-signout"></i> خروج </a>
                        </li>
                    </ul>

                </li>
                <!--END ADMIN SETTINGS -->
            </ul>

        </nav>

    </div>
    <!-- END HEADER SECTION -->



    <!-- MENU SECTION -->
    <div id="right">
        <div class="media user-media well-small">
            <a class="user-link" href="#">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
            </a>
            <br />
            <div class="media-body">
                <h5 class="media-heading"> محمدرضا</h5>
                <ul class="list-unstyled user-info">
                </ul>
            </div>
            <br />
        </div>

        <ul id="menu" class="collapse">


            <li class="panel">
                <a href="{{ url('/show') }}" >
                    <i class="icon-table"></i> داشبورد

                </a>
            </li>



            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="icon-tasks"> </i> المنت های طراحی

                    <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    &nbsp; <span class="label label-default">10</span>&nbsp;
                </a>
                <ul class="collapse" id="component-nav">

                    <li class=""><a href="button.html"><i class="icon-angle-left"></i> دکمه ها </a></li>
                    <li class=""><a href="icon.html"><i class="icon-angle-left"></i> آیکون ها </a></li>
                    <li class=""><a href="progress.html"><i class="icon-angle-left"></i> نوار پیشرفت </a></li>
                    <li class=""><a href="tabs_panels.html"><i class="icon-angle-left"></i> تب ها و پنل ها </a></li>
                    <li class=""><a href="notifications.html"><i class="icon-angle-left"></i> اطلاع رسانی ها </a></li>
                    <li class=""><a href="more_notifications.html"><i class="icon-angle-left"></i> اطلاع رسانی ها بیشتر </a></li>
                    <li class=""><a href="modals.html"><i class="icon-angle-left"></i> مودال ها </a></li>
                    <li class=""><a href="wizard.html"><i class="icon-angle-left"></i> ویزارد </a></li>
                    <li class=""><a href="sliders.html"><i class="icon-angle-left"></i> اسلایدر </a></li>
                    <li class=""><a href="typography.html"><i class="icon-angle-left"></i> تایپوگرافی </a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-map-marker"></i> نقشه ها </a></li>

            <li><a href="#"><i class="icon-columns"></i> گرید </a></li>

        </ul>

    </div>
    <!--END MENU SECTION -->


    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">


                    @yield('content')



                </div>
            </div>

            <hr />




        </div>




    </div>
    <!--END PAGE CONTENT -->


</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>کلیه حقوق سایت متعلق به <a href="">360</a> می باشد.</p>
</div>
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<script src="{{asset('assets/plugins/jquery-2.0.3.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.rtl.js')}}"></script>
<script src="{{asset('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
<!-- END GLOBAL SCRIPTS -->
<!-- PAGE LEVEL SCRIPTS -->
@yield('js')
<!-- END PAGE LEVEL SCRIPTS -->
</body>

<!-- END BODY -->
</html>