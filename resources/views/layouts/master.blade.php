<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="LaravelDoctrine">
    <meta name="description" content="A drop-in Doctrine2 implementation for Laravel 6+">
    <meta name="keywords" content="laravel, php, framework, doctrine, orm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    @yield('meta')

    <title>@section('title')Laravel Doctrine @show</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>
<body class="@yield('body-class', 'docs') language-php">

<span class="overlay"></span>

<nav class="navbar">
    <div class="container ">
        <button class="toggle-slide menu-link btn btn-default hidden-sm-up pull-right" type="button">
            &#9776;
        </button>
        <a class="navbar-brand" href="/">
            <img src="/img/laravel-doctrine-logo.png" height="30" alt="Laravel Doctrine logo">
            Laravel Doctrine
        </a>
        <ul class="nav navbar-nav pull-right">
            @yield('versions')
        </ul>
        <div class="collapse navbar-toggleable-xs">
            <ul class="nav navbar-nav pull-right">
                @include('partials.main-nav')
            </ul>
        </div>
    </div>
</nav>

<main class="wrapper">

    <nav id="slide-menu" class="slide-menu" role="navigation">

        <div class="brand">
            <a href="/">
                <img src="/img/laravel-doctrine-logo.png" height="50">
            </a>
        </div>

        <ul class="slide-main-nav">
            <li><a href="/">Home</a></li>
            @include('partials.main-nav')
        </ul>

        @yield('sidebar')

    </nav>

    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'orm']) }}">ORM</a>
            <a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'extensions']) }}">Extensions</a>
            <a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'migrations']) }}">Migrations</a>
            <a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'acl']) }}">ACL</a>
        </nav>
        <p>
            <a href="/">laraveldoctrine.org</a> is based on
            <a href="http://laravel.com" target="_blank" title="Laravel - PHP Framework">laravel.com</a>
            © Taylor Otwell & <a href="http://jackmcdade.com/" target="_blank" title="Jack McDade">Jack McDade</a>.
        </p>
        <p class="less-significant"><a target="_blank" href="http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/">Official Doctrine Documentation</a></p>
    </div>
</footer>

<script src="{{ elixir('js/scripts.js') }}"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67510065-1', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>
