<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', [
    'as'   => 'home',
    'uses' => 'HomeController@show'
]);

$app->get('docs/{version}/{package}', [
    'as'   => 'docs.index',
    'uses' => 'DocsController@index'
]);

$app->get('docs/{version}/{package}/{page}', [
    'as'   => 'docs.show',
    'uses' => 'DocsController@show'
]);
