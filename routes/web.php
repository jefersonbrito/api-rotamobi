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

$router->get('/getDrivers', function() {
    return response()->json(App\Models\Driver::all());
});

$router->get('/setDriverPosition', function() {
    $driver = App\Models\Driver::find(1);
    $driver->lat = -12.85557;
    $driver->lng = -38.28331;

    return $driver->save();
});


