
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Login | AmsisFACTURA </title>
    <!--=== CSS ===-->
    <!-- Bootstrap -->
    <link href="{{asset('melon/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme -->
    <link href="{{ asset('melon/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('melon/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('melon/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('melon/css/icons.css') }}" rel="stylesheet" type="text/css" />

    <!-- Login -->
    <link href="{{ asset('melon/css/login.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('melon/css/fontawesome/font-awesome.min.css') }}">
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ asset('melon/css/fontawesome/font-awesome-ie7.min.css') }}">
    <![endif]-->

    <!--[if IE 8]>
    <link href="{{asset('melon/css/ie8.css')}}" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!--=== JavaScript ===-->

    <script type="text/javascript" src="{{asset('melon/js/libs/jquery-1.10.2.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('melon/js/libs/lodash.compat.min.js') }}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{asset('melon/js/libs/html5shiv.js')}}"></script>
    <![endif]-->

    <!-- Beautiful Checkboxes -->
    <script type="text/javascript" src="{{ asset('melon/plugins/uniform/jquery.uniform.min.js') }}"></script>

    <!-- Form Validation -->
    <script type="text/javascript" src="{{asset('melon/plugins/validation/jquery.validate.min.js')}}"></script>

    <!-- Slim Progress Bars -->
    <script type="text/javascript" src="{{asset('melon/plugins/nprogress/nprogress.js')}}"></script>

    <!-- App -->
    <script type="text/javascript" src="{{ asset('melon/js/login.js') }}"></script>
    <script>
        $(document).ready(function(){
            "use strict";

            Login.init(); // Init login JavaScript
        });
    </script>
</head>

<body class="login">
<!-- Logo -->
<div class="logo">
    <img src="{{asset('melon/img/logo.png')}}" alt="logo" />
    <strong>AMSIS</strong> INVOICE
</div>
<!-- /Logo -->

<!-- Login Box -->
<div class="box">
    <div class="content">
        <!-- Login Formular -->
            {{ Form::open(['route'=>'login','method'=>'POST','role' => 'form', 'class'=> 'form-vertical login-form' ]) }}
                    <!-- Title -->
            <h3 class="form-title">Entra a tu cuenta</h3>

            <!-- Error Message -->
            <div class="alert fade in alert-danger" style="display: none;">
                <i class="icon-remove close" data-dismiss="alert"></i>
                Entra un usuario y contraseña
            </div>

            <!-- Input Fields -->
            <div class="form-group">
                <div class="input-icon">
                    <i class="icon-user"></i>
                    {{ Form::email('email',null,['class'=>"form-control",'placeholder'=>'Correo electrónico','autofocus'=>'autofocus','data-rule-required'=>'true','data-msg-required'=>'Por favor entra tu usuario.']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i class="icon-lock"></i>
                    {{ Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','data-rule-required'=>'true','data-msg-required'=>'Por favor entra tu contraseña.']) }}
                </div>
            </div>
            <!-- /Input Fields -->

            <!-- Form Actions -->
        <div class="form-actions">
            <label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Recordarme</label>
            <button type="submit" class="submit btn btn-primary pull-right">
                Entrar <i class="icon-angle-right"></i>
            </button>
        </div>
        {{ Form::close() }}
        <!-- /Login Formular -->

        <!-- Register Formular (hidden by default) -->
        <!-- /Register Formular -->
    </div> <!-- /.content -->

    <!-- Forgot Password Form -->
    <div class="inner-box">
        <div class="content">
            <!-- Close Button -->
            <i class="icon-remove close hide-default"></i>

            <!-- Link as Toggle Button -->
            <a href="#" class="forgot-password-link">Olvidé Contraseña?</a>

            <!-- Forgot Password Formular -->
                {{ Form::open(['route'=>'forgot_password','method'=>'POST','role' => 'form', 'class'=> 'form-vertical forgot-password-form hide-default' ]) }}
                <!-- Input Fields -->
                <div class="form-group">
                    <!--<label for="email">Email:</label>-->
                    <div class="input-icon">
                        <i class="icon-envelope"></i>
                        {{ Form::text('email',null,['class'=>'form-control','placeholder'=>'Entrar correo electrónico.','data-rule-required'=>'true','data-rule-email'=>'true','data-msg-required'=>'Porfavor entre su correo electrónico.']) }}
                    </div>
                </div>
                <!-- /Input Fields -->
                <button type="submit" class="submit btn btn-default btn-block">
                    Restaure contraseña.
                </button>
            {{ Form::close() }}
            <!-- /Forgot Password Formular -->

            <!-- Shows up if reset-button was clicked -->
            <div class="forgot-password-done hide-default">
                <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                <span>Perfecto, le hemos enviado un correo.</span>
            </div>
        </div> <!-- /.content -->
    </div>
    <!-- /Forgot Password Form -->
</div>
<!-- /Login Box -->

<!-- Single-Sign-On (SSO) -->
{{--<div class="single-sign-on">--}}
    {{--<span>or</span>--}}

    {{--<button class="btn btn-facebook btn-block">--}}
        {{--<i class="icon-facebook"></i> Sign in with Facebook--}}
    {{--</button>--}}

    {{--<button class="btn btn-twitter btn-block">--}}
        {{--<i class="icon-twitter"></i> Sign in with Twitter--}}
    {{--</button>--}}

    {{--<button class="btn btn-google-plus btn-block">--}}
        {{--<i class="icon-google-plus"></i> Sign in with Google--}}
    {{--</button>--}}
{{--</div>--}}
<!-- /Single-Sign-On (SSO) -->

<!-- Footer -->
{{--<div class="footer">--}}
    {{--<a href="#" class="sign-up">Don't have an account yet? <strong>Sign Up</strong></a>--}}
{{--</div>--}}
<!-- /Footer -->
</body>
</html>