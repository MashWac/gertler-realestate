<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminendController extends Controller
{
    public function dashboard(){
        return view('adminend.dashboard.dashboard');
    }
    public function uploads(){
        return view('adminend.uploads.index');
    }
    public function addlisting(){
        return view('adminend.uploads.add');
    }
    
    public function purchaserequests(){
        return view('adminend.purchaserequests.index');
    }
    public function rentalrequests(){
        return view('adminend.rentrequests.index');
    }
    public function sellrequests(){
        return view('adminend.sellrequests.index');
    }
    public function blogs(){
        return view('adminend.blogs.index');
    }
    public function viewpurchaselistings(){
        return view('adminend.uploads.view');
    }
    


}
