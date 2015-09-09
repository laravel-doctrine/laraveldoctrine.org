@extends('layouts.master')

@section('title')
    @parent - Page not found
@stop

@section('content')

    <section class="panel statement light">
        <div class="content">

            <h2>Page not found</h2>

            <div class='browser-window'>
                <div class='top-bar'>
                    <div class='circles'>
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>
                </div>
                <div class='window-content'>
				<pre class="language-php line-numbers"><code>
&lt;?php

$pageRepository = EntityManager::getRepository(
    Page::class
);

$page = $pageRepository->find('{{ $request->path() }}');

if(!$page) {
    throw new PageWasNotFound(
        'Page not found'
    );
}
</code></pre>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
