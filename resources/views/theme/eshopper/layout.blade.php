<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('theme/assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('theme/assets/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('theme/assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('theme/assets/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('theme/assets/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>
    @include('theme.eshopper.partials.header')

    @include('theme.eshopper.partials.slider')

    <section>
        <div class="container">
            <div class="row">
                @include('theme.eshopper.partials.sidebar')

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('theme.eshopper.partials.footer')



    <script src="{{asset('theme/assets/js/jquery.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/price-range.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
</body>

</html>