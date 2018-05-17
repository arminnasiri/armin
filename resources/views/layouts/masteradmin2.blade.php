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

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">مدیریت سایت <span>خبری</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">@yield('news_notify')</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">شما @yield('news_notify') دارید</p>
                        </li>
                        @yield('news_notify_m')
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>
                        <span class="badge bg-important">@yield('comment_notify')</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما @yield('comment_notify') دارید</p>
                        </li>
                        @yield('comment_notify_m')
                        <a href="#">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!-- user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
            @yield('user_m')
                <!-- user login dropdown end -->
            </ul>
            <!-- user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>عناصر صفحه</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general.html">عمومی</a></li>
                        <li><a class="" href="buttons.html">دکمه ها</a></li>
                        <li><a class="" href="widget.html">ویجت ها</a></li>
                        <li><a class="" href="slider.html">اسلایدر ها</a></li>
                        <li><a class="" href="font_awesome.html">فونت های شکل دار</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-cogs"></i>
                        <span>کامنت ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="grids.html">گرید</a></li>
                        <li><a class="" href="calendar.html">تقویم</a></li>
                        <li><a class="" href="charts.html">چارت</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-tasks"></i>
                        <span>ابزارهای فرم</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_component.html">کامنت فرم</a></li>
                        <li><a class="" href="form_wizard.html">فرم Wizard</a></li>
                        <li><a class="" href="form_validation.html">ارزیابی فرم</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-th"></i>
                        <span>اطلاعات جدول</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.html">جدول ساده</a></li>
                        <li><a class="" href="dynamic_table.html">جدول داینامیک</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="inbox.html">
                        <i class="icon-envelope"></i>
                        <span>ایمیل </span>
                        <span class="label label-danger pull-right mail-info">2</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-glass"></i>
                        <span>عناصر اضافی</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="blank.html">صفحه خالی</a></li>
                        <li><a class="" href="profile.html">پروفایل</a></li>
                        <li><a class="" href="invoice.html">فاکتور</a></li>
                        <li><a class="" href="404.html">404 Error</a></li>
                        <li><a class="" href="500.html">500 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="login.html">
                        <i class="icon-user"></i>
                        <span>صفحه ورود به سایت</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
        @yield('content')

        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

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
