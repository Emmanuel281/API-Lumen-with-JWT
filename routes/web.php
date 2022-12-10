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

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });

    // $router->get(
    //     '/getvendor/{id}',
    //     function () use ($router) {
    //         return $router->app->version();
    //     }
    // );

});
$router->group(['prefix' => 'vendor'], function () use ($router) {
    $router->get('/', 'MsVendorController@get');
    $router->post('/', 'MsVendorController@store');
    $router->put('/', 'MsVendorController@update');
    // $router->get('/{id}', 'MsVendorController@getwithid');
});
