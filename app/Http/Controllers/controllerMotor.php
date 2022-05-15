<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class controllerMotor extends Controller
{
    public function index()
    {
        $motors = Motor::select()->where("available", 1)->get();
        return view('index')->with('motors', $motors);
    }

    
}