@extends('layouts.master')

@section('title')
    [{{ $package }}] {{ $title }} - @parent
@stop

@section('meta')
    <link rel="canonical" href="{{ route('docs.show', [
        'version' => 'current',
        'package' => $package,
        'page'    => $page
    ]) }}"/>
@stop

@section('versions')
    <li class="nav-item dropdown switcher">
        <a class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ $version }}
        </a>
        <ul class="dropdown-menu" role="menu">
            @foreach($versions as $v)
                <a class="dropdown-item" href="{{ route('docs.show', ['version' => $v,'package' => $package,'page' => $page]) }}">
                  {{ $v }}
                </a>
            @endforeach
        </ul>
    </li>
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
