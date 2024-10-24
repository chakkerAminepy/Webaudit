<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        //get Targets list : 
        $targets = Target::all(); // You can modify this to apply filters as needed


        return view('target', ['targets' => $targets]);
    }
}
