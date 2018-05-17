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
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form class="form-signin" method="POST" action="{{ route('password.email') }}">
        @csrf
        <h2 class="form-signin-heading">بازیابی رمز عبور</h2>
        <div class="login-wrap">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ایمیل خود را وارد کنید" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <button class="btn btn-lg btn-login btn-block" type="submit">فرستادن</button>

        </div>

    </form>

</div>


</body>
</html>
