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
        $plans = \DB::table('plans')->where('type', 'act')->paginate(3);
        return view ('plans.act', ['plans'=>$plans]);
           
    }
    
    public function scene()
    {
        $plans = \DB::table('plans')->where('type', 'scene')->paginate(3);
        return view ('plans.scene', ['plans'=>$plans]);
        
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