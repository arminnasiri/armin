<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>ورود</title>

    <!-- Bootstrap core CSS -->
    <link href="admin_tm/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_tm/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="admin_tm/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="admin_tm/css/style.css" rel="stylesheet">
    <link href="admin_tm/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="admin_tm/js/html5shiv.js"></script>
    <script src="admin_tm/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
    <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
    <div class="login-wrap">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <label class="checkbox">
            <input type="checkbox" value="remember-me" name="remember"> مرا به خاطر بسپار
            <span class="pull-right"> <a href="{{ route('password.request') }}"> کلمه عبور را فراموش کرده اید؟</a></span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">ورود</button>
        <p>یا توسط یکی از حسابهای شبکه اجتماعی خود وارد شوید</p>
        <div class="login-social-link">
            <a href="#" class="facebook">
                <i class="icon-facebook"></i>
                Facebook
            </a>
            <a href="#" class="twitter">
                <i class="icon-twitter"></i>
                Twitter
            </a>
        </div>

    </div>

    </form>

</div>


</body>
</html>