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
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});



Route::group(['prefix' => 'driver'], function($router) {
    $router->get('/login', ['as' => 'login', 'uses' => 'UsersController@login']);
    $router->post('/logout', ['as' => 'logout', 'uses' => 'UsersController@logout']);
    $router->post('/getDrivers', ['as' => 'driver.getDrivers', 'uses' => 'DriversController@getDrivers']);
    $router->put('/setDriverPosition', ['as' => 'driver.setDriverPosition', 'uses' => 'DriversController@setDriverPosition']);
});

Route::group(['prefix' => 'user'], function($router) {
    
});
