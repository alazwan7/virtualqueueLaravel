<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {

        $Request = new Request;
        $Request->age = $request->age;
        $Request->ability = $request->ability;
        $Request->currentLocation = $request->currentLocation;
        $Request->distance = $request->distance;

        $Request->save();
        return($Request);
    }
}
