<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientendController extends Controller
{
    public function landingpage(){
        return view('clientend.homepage');
    }
    public function aboutus(){
        return view('clientend.about');
    }
    public function houselistings(){
        return view('clientend.houselistings');
    }
    public function houseview(){
        return view('clientend.houseview');
    }
    public function rentout(){
        return view('clientend.sellproperty');
    }
}
