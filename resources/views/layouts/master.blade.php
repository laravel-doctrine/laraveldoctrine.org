<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="LaravelDoctrine">
    <meta name="description" content="A drop-in Doctrine2 implementation for Laravel 5+">
    <meta name="keywords" content="laravel, php, framework, doctrine, orm">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>@section('title')Laravel Doctrine @show</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>
<body class="@yield('body-class', 'docs') language-php">

<nav class="navbar navbar-fixed-top">
    <div class="container ">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="navbar">
            <a class="navbar-brand" href="/">
                <img src="/img/laravel-doctrine-logo.png" height="30" alt="Laravel Doctrine logo">
                Laravel Doctrine
            </a>
            <ul class="nav navbar-nav pull-right">
                @include('partials.main-nav')
            </ul>
        </div>
    </div>
</nav>

<main class="wrapper">
    @yield('content')
</main>

<footer class="footer">
    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="/docs/orm">ORM</a>
            <a class="nav-link" href="/docs/extensions">Extensions</a>
            <a class="nav-link" href="/docs/migrations">Migrations</a>
            <a class="nav-link" href="/docs/acl">ACL</a>
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

</body>
</html>
