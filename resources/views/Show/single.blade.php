<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{360</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link href="image/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>

<!-- Start Top Menu-->
<header>
    <nav class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12"><small>360 درجه در اینترنت بچرخید</small></div>
                <div class="col-md-6 hidden-xs hidden-sm text-left"><small>دوشنبه 15 شهریور 1395</small></div>
            </div>
        </div>
    </nav>
    <div class="nav-logo">
        <div class="container">
            <div class="row">
                <div class="col-md-3 branding"><img src="image/logo.png" class="img-responsive img-circle" alt=""></div>
                <div class="col-md-9 brand-menu">
                    <div class="pull-left">
                        <div class="navbar navbar-default top-menu hidden-xs hidden-sm">
                            <ul class="nav navbar-nav">
                                <li><a href="#">خانه</a> </li>
                                <li><a href="#"></a> </li>
                                <li><a href="#">امکانات</a> </li>
                                <li><a href="#">درباره ما</a> </li>
                                <li><a href="#">تماس با ما</a> </li>
                            </ul>
                            <div class="pull-left">
                                <form class="navbar-form" role="search" method="get" action="" id="searchform">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="جستجو در سایت" name="srch-term" id="srch-term">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primry" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html">وب سایت سرگرمی ، تفریحی 360</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="about.html">خانه</a> </li>
                    <li> <a href="services.html">دسته بندی</a> </li>
                    <li> <a href="contact.html">امکانات</a> </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">آبشاری <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">ورزشی</a> </li>
                            <li><a href="#">سرگرمی</a> </li>
                            <li><a href="#">سیاسی</a> </li>
                            <li class="divider"></li>
                            <li><a href="#">اقتصادی</a> </li>
                            <li class="divider"></li>
                            <li><a href="#">همه موارد</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Top Menu-->

<div class="container main">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6"><img src="image/wide-banner.jpg" class="img-responsive" alt=""></div>
                <div class="col-md-6"><img src="image/wide-banner.jpg" class="img-responsive" alt=""></div>
            </div><br>
            <ol class="breadcrumb">
                <li><a href="index.html">صفحه اصلی</a></li>
                <li class="active">{{$sh->title}}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <article class="col-md-7">
            <div class="row">
                <p><span class="glyphicon glyphicon-time"></span> ارسال شده در تاریخ :{{$sh->created_at}}</p>
                <hr>
                <img src="img/1920x500.gif" alt="" class="img-responsive img-rounded">
                <hr>
                <ul class="list-inline list-unstyled text-center">
                    اشتراک گذاری مطلب :
                    <li><a href="#"><img src="img/f.png" alt=""></a></li>
                    <li><a href="#"><img src="img/t.png" alt=""></a></li>
                    <li><a href="#"><img src="img/y.png" alt=""></a></li>
                    <li><a href="#"><img src="img/g.png" alt=""></a></li>
                    <li><a href="#"><img src="img/i.png" alt=""></a></li>
                </ul>
                <hr>
                <p class="lead text-primary text-justify">
                    {{$sh->title}}
                </p>
                <blockquote>
                    <p class="text-justify">
                        {{$sh->abstr}}
                    </p>
                </blockquote>
                <p>

                    {{$sh->body}}

                </p>
            </div>
            <hr>
            <div class="row">
                <ul class="pager">
                    <li><a href="#">مطلب قبلی</a></li>
                    <li><a href="#">مطلب بعدی</a></li>
                </ul>
            </div>
            <hr>
            <div class="row">
                <div class="alert alert-success">
                    <div class="media">
                        <img src="img/a.png" alt="" class="pull-right img-circle">
                        <div class="media-body">
                            <h5 class="media-heading">
                                یاسر داودفر <small>نویسنده ارشد</small>
                            </h5>
                            <p>بعضی از این انتظارات ناشی از افزایش در نقدینگی، افزایش سالیانه دستمزد و حقوق، یا قیمت نهاده های دیگر باشد، موجب افزایش سطح قیمتها به صورت زود هنگام می‌شود.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4 class="text-primary">
                    مطالبی که دیدنشان پیشنهاد می شود :
                </h4>
                <hr>
                <div class="col-md-6">
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/64X64.gif" alt="" class="pull-right img-responsive">
                        <div class="media-body">
                            <h5 class="media-heading">
                                ایران قهرمان آسیا شد <br><small> ارسال شده در تاریخ : 15 شهریور 1396

                                </small>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="well">
                    <h3 class="text-danger text-center">
                        دیدگاه خود را بفرستید !
                    </h3>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <label for=""><span class="glyphicon glyphicon-user"></span> نام شما ...</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group"  >
                            <label for="">ایمیل شما ...</label>
                            <input type="email" class="form-control" name="">
                        </div>
                        <div class="form-group">
                            <label for="">سایت شما ...</label>
                            <input type="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">سایت شما ...</label>
                            <textarea type="url" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="ارسال دیدگاه" class="btn btn-info btn-lg">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <h3 class="text-success">123 دیدگاه</h3>
                <hr>
                @foreach($sh->comment as $com)
                <div class="media">
                    <img src="{{asset('img/64X64.gif')}}" alt="" class="pull-right img-responsive">
                    <div class="media-body">
                        <h5 class="media-heading">
                            <span class="label label-success left">{{$com->name}}</span>
                            <small class="label label-primary">{{$com->created_at}}</small>
                        </h5>
                        <p>{{$com->user_comment}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </article>
        <!-- Start Left Block Content -->
        <aside class="col-md-3"> <img src="image/840_490.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/882_428.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/890_556.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/885_369.gif" alt="" class="img-responsive img-rounded"><br>
            <div class="thumbnail">
                <div class="box-heading">
                    <h5 class="text-center side-title">محبوب ترین آلبوم ها</h5>
                </div>
                <img src="image/125806-43100005001p01.jpg" class="img-responsive" alt="">
                <div class="caption">
                    <h6><a href="">آلبوم امیر بی گزند از محسن چاوشی</a></h6>
                </div>
                <div class="rating">
                    <p class="pull-left text-danger">900 بازدید</p>
                    <p> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> </p>
                </div>
                <hr>
                <img src="image/769545-12900279007p01.jpg" class="img-responsive" alt="">
                <div class="caption">
                    <h6><a href="">دانلود آلبوم دوئل در آینه از رضا یزدانی</a></h6>
                </div>
                <div class="rating">
                    <p class="pull-left text-danger">523 بازدید</p>
                    <p> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> </p>
                </div>
                <hr>
                <img src="image/569694-38302613004p01.jpg" class="img-responsive" alt="">
                <div class="caption">
                    <h6><a href="">دانلود آلبوم گذر اردیبهشت از گروه دال</a></h6>
                </div>
                <div class="rating">
                    <p class="pull-left text-danger">233 بازدید</p>
                    <p> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span> <span class="glyphicon glyphicon-star-empty"></span> </p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="box-heading">
                    <h5 class="text-center side-title">مطالب جنجالی</h5>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> چگونه یک فرد خوش صحبت باشیم؟</h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> مسکن ها برای دستگاه گوارش مضرتر هستند یا فست فودها؟ </h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> بوتاکس خوب و بعد را با این راه تشخیص دهید!!!</h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-body">
                            <h6 class="text-center">دیدن مطالب بیشتر ...</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="box-heading">
                    <h5 class="text-center side-title">مطالب پربازدید</h5>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> چگونه یک فرد خوش صحبت باشیم؟</h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> مسکن ها برای دستگاه گوارش مضرتر هستند یا فست فودها؟ </h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-right"> <a href="#"> <img class="img-circle " src="image/64X64.gif" alt="..."> </a> </div>
                        <div class="media-body">
                            <h6 class="media-heading"> بوتاکس خوب و بعد را با این راه تشخیص دهید!!!</h6>
                            <small>25 آذر 1394 - 18:56</small> </div>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="media-body">
                            <h6 class="text-center">دیدن مطالب بیشتر ...</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumbnail"> <img src="image/300x200.gif" class="img-responsive" alt="">
                <div class="caption">
                    <p>شرایط این نظام به گونه ای است كه كمتر می توان نشانه هایی از یك نظام مالیاتی كارآمد را در آن پیدا كرد.</p>
                    <a href="#" class="btn btn-primary btn-block">ادامه مطلب</a> </div>
                <hr>
                <img src="image/300X200.gif" class="img-responsive" alt="">
                <div class="caption">
                    <p>شرایط این نظام به گونه ای است كه كمتر می توان نشانه هایی از یك نظام مالیاتی كارآمد را در آن پیدا كرد.</p>
                    <a href="#" class="btn btn-primary btn-block">ادامه مطلب</a> </div>
                <hr>
                <img src="image/300x200.gif" class="img-responsive" alt="">
                <div class="caption">
                    <p>شرایط این نظام به گونه ای است كه كمتر می توان نشانه هایی از یك نظام مالیاتی كارآمد را در آن پیدا كرد.</p>
                    <a href="#" class="btn btn-primary btn-block">ادامه مطلب</a> </div>
                <hr>
                <img src="image/300x200.gif" class="img-responsive" alt="">
                <div class="caption">
                    <p>شرایط این نظام به گونه ای است كه كمتر می توان نشانه هایی از یك نظام مالیاتی كارآمد را در آن پیدا كرد.</p>
                    <a href="#" class="btn btn-primary btn-block">ادامه مطلب</a> </div>
            </div>

            <!-- Start Block B Ads-->
            <!--<img src="image/2747_876.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/4049_457.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/4235_938.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/2747_876.gif" alt="" class="img-responsive img-rounded"><br>
               <img src="image/858_131.jpg" alt="" class="img-responsive img-rounded"><br>
            <img src="image/756_327.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/2086_311.gif" alt="" class="img-responsive img-rounded"><br>-->
            <!-- End Block B Ads-->
        </aside>
        <aside class="col-md-2"> <img src="image/15182_221.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/14816_757.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/15329_722.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/13950308124614934778596.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/13941217170650878729194.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/15331_221.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/15292_102.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/13950107140906510741004.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/4201_431.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/1942_222.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/2057_630.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/1992_595.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/2056_804.gif" alt="" class="img-responsive img-rounded"><br>
            <img src="image/2091_619.gif" alt="" class="img-responsive img-rounded"><br>
            <!--<img src="image/2079_399.gif" alt="" class="img-responsive img-rounded"><br>-->
        </aside>
        <!-- End Left Block Content -->
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="لطفا ایمیل خود را وارد کنید.">
                    </div>
                    <button class="btn btn-danger btn-block">
                        عضویت در خبرنامه
                    </button>
                </form>
            </div>
            <div class="col-md-5 text-center">
                <div class="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">امکانات</a></li>
                        <li><a href="#">تبلیغات</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <p>شرایط این نظام به گونه ای است كه كمتر می توان نشانه هایی از یك نظام مالیاتی كارآمد را در آن پیدا كرد.</p>
            </div>
        </div>
        <div class="row text-center">
            <p class="footerdesc">
                <small>طراحی و اجرا : یاسر داودفر / با استفاده از بوت استرپ و نیرو گرفته از وردپرس</small>
            </p>
        </div>
    </div>
</footer>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>