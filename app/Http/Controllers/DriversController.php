<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;


class DriversController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * 
     * @return type
     */
    function getDrivers() {
        return response()->json(Driver::all());
    }

    /**
     * 
     * @param type $id
     * @param Request $request
     * @return type
     */
    public function setDriverPosition($id, Request $request) {
        $driver = Driver::find($id);
        $driver->lat = $request->lat;
        $driver->lng = $request->lng;
        return response()->json($driver->save());
    }



}
