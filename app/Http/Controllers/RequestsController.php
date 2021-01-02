<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    //
    public function store(Request $request)
    {

        print $request;
        $Requests = new Requests();
        $Requests->senior_citizen = $request->senior_citizen;
        $Requests->disable = $request->disable;
        $Requests->currentLocation = $request->currentLocation;
        $Requests->distance = $request->distance;
        $Requests->user_id = $request->user_id;



        $Requests->save();
        return($Requests);
    }
}
