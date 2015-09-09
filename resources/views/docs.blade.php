@extends('layouts.master')

@section('title')
    [{{ $package }}] {{ $title }} - @parent
@stop

@section('versions')
    {{-- For future: --}}
    {{--<li class="nav-item dropdown">--}}
    {{--<a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">--}}
    {{--1.0--}}
    {{--</a>--}}
    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<a class="dropdown-item" href="https://github.com/laravel-doctrine">1.0</a>--}}
    {{--</ul>--}}
    {{--</li>--}}
@stop

@section('sidebar')
    <div class="slide-docs-nav">
        {!! $index !!}
    </div>
@stop

@section('content')

    <div class="docs-wrapper container">

        <section class="sidebar">
            {!! $index !!}
        </section>

        <article>
            {!! $content !!}
        </article>
    </div>

@stop
