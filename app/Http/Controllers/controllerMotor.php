<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class controllerMotor extends Controller
{
    public function index()
    {
        $motors = Motor::all();
        return view('index')->with('motors', $motors);
    }

    
}
