<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function gourmet()
    {
        return view ('plans.gourmet');
    }
   
    public function act()
    {
        return view ('plans.act');   
    }
    
    public function scene()
    {
        return view ('plans.scene');
    }
}