<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>بازیابی رمز عبور</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin_tm/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_tm/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin_tm/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin_tm/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin_tm/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
</head>
<body class="login-body">

<div class="container">

    <form method="POST" class="form-signin" action="{{ route('password.request') }}">
    @csrf
    <h2 class="form-signin-heading">تغییر رمز</h2>
    <div class="login-wrap">
        <input type="hidden" name="token" value="{{ $token }}">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="ایمیل خود را وارد کنید" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="کلمه عبور" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="تکرار کلمه عبور" required>
        <button class="btn btn-lg btn-login btn-block" type="submit">تایید</button>

    </div>

    </form>

</div>


</body>
</html>
