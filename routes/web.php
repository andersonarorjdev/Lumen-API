<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function() use ($router){
    return $router->app->version();
});

$router->group(['prefix' => '/api/v2'], function () use ($router) {
    $router->post('/login', 'GeneralController@Login');
    $router->post('/estabelecimentos/', 'GeneralController@CreateEstabilishment');
    $router->get('/estabelecimentos/', 'GeneralController@getAll');
    $router->get('/estabelecimentos/{esid}/clientes', 'GeneralController@getAllClientes');
    $router->post('/estabelecimentos/{esid}/clients', 'GeneralController@postCliente');
    $router->get('/estabelecimentos/{esid}/clientes/{clid}', 'GeneralController@getfromClientes');
    $router->put('/estabelecimentos/{esid}/clientes/{clid}', 'GeneralController@updateCliente');
});