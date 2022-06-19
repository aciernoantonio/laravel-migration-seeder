<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        //dd($trips);
        return view('welcome', compact('trips'));
    }
}
