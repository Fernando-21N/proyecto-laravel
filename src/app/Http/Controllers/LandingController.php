<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(){
        return view('landing.index');
    }

    public function checkout(){
        return view('landing.checkout');
    }

    public function checkoutsupra(){
        return view('landing.checkoutsupra');
    }
}