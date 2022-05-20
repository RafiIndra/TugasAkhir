<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class controllerMotor extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->merk) && isset($request->tipe)){
            $motors = Motor::select()
            ->where("available", 1)
            ->where("Merk", $request->merk)
            ->where("Tipe", $request->tipe)
            ->get();
            return view('index')->with('motors', $motors);
        }
        elseif (isset($request->merk)){
            $motors = Motor::select()
            ->where("available", 1)
            ->where("Merk", $request->merk)
            ->get();
            return view('index')->with('motors', $motors);
        } 
        elseif (isset($request->tipe)){
            $motors = Motor::select()
            ->where("available", 1)
            ->where("Tipe", $request->tipe)
            ->get();
            return view('index')->with('motors', $motors);
        }
        else {
            $motors = Motor::select()->where("available", 1)->get();
            return view('index')->with('motors', $motors);
        }
    }

    
}