<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Core stylesheets -->
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin/pixeladmin.min.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('pace/pace.min.js') }}"></script>

    <style>
        .page-signin-header {
            box-shadow: 0 2px 2px rgba(0,0,0,.05), 0 1px 0 rgba(0,0,0,.05);
        }

        .page-signin-header .btn {
            position: absolute;
            top: 12px;
            right: 15px;
        }

        html[dir="rtl"] .page-signin-header .btn {
            right: auto;
            left: 15px;
        }

        .page-signin-container {
            width: auto;
            margin: 30px 10px;
        }

        .page-signin-container form {
            border: 0;
            box-shadow: 0 2px 2px rgba(0,0,0,.05), 0 1px 0 rgba(0,0,0,.05);
        }

        @media (min-width: 544px) {
            .page-signin-container {
                width: 350px;
                margin: 60px auto;
            }
        }

        .page-signin-social-btn {
            width: 40px;
            padding: 0;
            line-height: 40px;
            text-align: center;
            border: none !important;
        }

        #page-signin-forgot-form { display: none; }
    </style>
    <!-- / Custom styling -->
</head>
<body>
<div class="page-signin-header p-a-2 text-sm-center bg-white">
    <a class="px-demo-brand px-demo-brand-lg text-default" href="/">
        {{ config('app.name') }}
    </a>
    {{--<a href="{{ route('register') }}" class="btn btn-primary">Inscrever-se</a>--}}
</div>

<!-- Sign In form -->

<div class="page-signin-container" id="page-signin-form">
    <h2 class="m-t-0 m-b-4 text-xs-center text-white font-weight-semibold font-size-20">Faça login em sua conta</h2>

    <form method="POST" action="{{ route('login') }}" class="panel p-a-4">

        @csrf

        <fieldset class=" form-group form-group-lg">
            <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </fieldset>

        <fieldset class=" form-group form-group-lg">
            <input type="password" class="form-control" placeholder="Senha" name="password">
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </fieldset>

        <div class="clearfix">
            <label class="custom-controlx custom-checkboxx pull-xs-left">
                <input type="checkbox" class="custom-control-inputx" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="custom-control-indicator"></span>
                Lembrar
            </label>
            <a href="#" class="font-size-12 text-muted pull-xs-right" id="page-signin-forgot-link">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Entrar</button>
    </form>

</div>

<!-- / Sign In form -->

<!-- Reset form -->

<div class="page-signin-container" id="page-signin-forgot-form">
    <h2 class="m-t-0 m-b-4 text-xs-center font-weight-semibold font-size-20">Redefinição de senha</h2>

    <form action="index.html" class="panel p-a-4">
        <fieldset class="form-group form-group-lg">
            <input type="email" class="form-control" placeholder="Your Email">
        </fieldset>

        <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Enviar link de redefinição de senha</button>
        <div class="m-t-2 text-muted">
            <a href="#" id="page-signin-forgot-back">&larr; Voltar</a>
        </div>
    </form>
</div>

<!-- / Reset form -->

<!-- ==============================================================================
|
|  SCRIPTS
|
=============================================================================== -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/pixeladmin.min.js') }}"></script>

<script>
	// -------------------------------------------------------------------------
	// Initialize DEMO sidebar

	$(function() {
//		pxDemo.initializeDemoSidebar();

		$('#px-demo-sidebar').pxSidebar();
//		pxDemo.initializeDemo();
	});
</script>

<script>
	// -------------------------------------------------------------------------
	// Initialize page components

	$(function() {
        $('h2').addClass('text-white font-weight-bold');

        $('h4')
            .addClass('text-white')
            .removeClass('text-muted');

		$('#page-signin-forgot-link').on('click', function(e) {
			e.preventDefault();

			$('#page-signin-form').css({ display: 'none' });
			$('#page-signin-forgot-form').css({ display: 'block' });

			$(window).trigger('resize');
		});

		$('#page-signin-forgot-back').on('click', function(e) {
			e.preventDefault();

			$('#page-signin-form').css({ display: 'block' });
			$('#page-signin-forgot-form').css({ display: 'none' });

			$(window).trigger('resize');
		});

		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<div class="px-responsive-bg">
    <div class="px-responsive-bg-overlay" style="background: rgb(0, 0, 0); opacity: 0.2;"></div>
    <img alt="" src="/images/login-bgr.jpg" style="object-fit: cover; object-position: center center; width: 100%; height: 100%;">
</div>

</body>
</html>
