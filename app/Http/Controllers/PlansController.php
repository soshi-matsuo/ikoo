<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

class PlansController extends Controller
{
    public function gourmet()
    {
        $plans = \DB::table('plans')->where('type', 'gourmet')->paginate(3);
        return view ('plans.gourmet', ['plans'=>$plans]);
    }
   
    public function act()
    {
        return view ('plans.act');   
    }
    
    public function scene()
    {
        return view ('plans.scene');
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