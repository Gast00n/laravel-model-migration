<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function index() {
        //return all the bikes in an API json

        //Get bikes from DB
        $bikes = Bike::all();

        return response()->json($bikes);
    }
}
