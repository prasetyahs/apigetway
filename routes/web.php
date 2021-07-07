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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/publikasi/category', 'Publikasi\CategoryController@index');
$router->post('/publikasi/category', 'Publikasi\CategoryController@store');
$router->get('/publikasi/category/{id}', 'Publikasi\CategoryController@show');
$router->put('/publikasi/category/{id}', 'Publikasi\CategoryController@update');
$router->delete('/publikasi/category/{id}', 'Publikasi\CategoryController@destroy');

$router->get('/publikasi', 'PublikasiController@index');
$router->post('/publikasi', 'PublikasiController@store');
$router->get('/publikasi/{id}', 'PublikasiController@show');
$router->put('/publikasi/{id}', 'PublikasiController@update');
$router->delete('/publikasi/{id}', 'PublikasiController@destroy');

