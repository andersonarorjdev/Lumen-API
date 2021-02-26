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

$router->group(['prefix' => '/api/v2'], function () use ($router) {
    $router->post('/login', 'GeneralController@Login');
    $router->get('/estabelecimentos/{eid}', 'GeneralController@getAll');
    $router->get('/estabelecimentos/{eid}/clientes', 'GeneralController@getAllClientes');
    $router->post('/estabelecimentos/{eid}/clients', 'GeneralController@postCliente');
    $router->get('/estabelecimentos/{eid}/clientes/{cid}', 'GeneralController@getfromClientes');
    $router->put('/estabelecimentos/{eid}/clientes/{cid}', 'GeneralController@updateCliente');
});