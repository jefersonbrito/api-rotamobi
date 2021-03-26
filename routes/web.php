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

$router->post('/setDriverPosition', function(Illuminate\Http\Request $request) {
    $driver = App\Models\Driver::find($request->id);
    $driver->lat = $request->lat;
    $driver->lng = $request->lng;
    return $driver->save();
});


