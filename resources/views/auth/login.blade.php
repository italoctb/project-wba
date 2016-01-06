<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wba Software Projects</title>

    <!-- Bootstrap -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('css/animate.css') }}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet prefetch"
          href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900"/>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-6 col-sm-6 col-xs-6 login-logo">
                <a href="#"><img src="{{ asset('img/logo-white.png') }}" alt="WBALogo"></a>
            </div>

            <div class="login fadeInRight animated">
                <h1>Restricted Area</h1>
                {!! Form::open(['action' => 'Auth\AuthController@postLogin']) !!}

                    @include('includes.validation')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <svg class="icon name svg-icon" viewBox="0 0 20 20">
                                        <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"/>
                                    </svg>
                                </div>
                                <input type="text" name="username" class="form-control name" placeholder="Username" autocomplete="off"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <svg class="icon pass svg-icon" viewBox="0 0 20 20">
                                        <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"/>
                                    </svg>
                                </div>
                                <input type="password" name="password" class="form-control pass" placeholder="Password"/>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="form-control submit" value="Sign in"/>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
