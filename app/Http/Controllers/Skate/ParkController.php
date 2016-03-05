<?php

namespace App\Http\Controllers\Skate;

use App\Http\Controllers\Controller;


// IMPORT MODELS
use App\Park;

class ParkController extends Controller
{
    public function showParks()
    {

        $data = Park::all();

        return $data;
    }
}