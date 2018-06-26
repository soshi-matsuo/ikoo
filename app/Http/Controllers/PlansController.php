<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

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

    public function show($id)
    {
        $plan=Plan::find($id);
        
        return view('plans.show',
        [ 
            'plan' => $plan
        ]);
    }
}

