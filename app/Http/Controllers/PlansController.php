<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

class PlansController extends Controller
{
    public function gourmet()
    {
        $plans = \DB::table('plan_user')->join('plans', 'plan_user.plan_id', '=', 'plans.id')->select('plans.*', \DB::raw('COUNT(*) as count'))->groupBy('plans.id', 'plans.name','plans.content','plans.type',  'plans.image_url','plans.created_at', 'plans.updated_at')->orderBy('count', 'DESC')->take(10)->get();
        
        return view ('plans.gourmet', ['plans'=>$plans]);
    }
   
    public function act()
    {
        $plans = \DB::table('plan_user')->join('plans', 'plan_user.plan_id', '=', 'plans.id')->select('plans.*', \DB::raw('COUNT(*) as count'))->groupBy('plans.id', 'plans.name', 'plans.content', 'plans.type', 'plans.image_url','plans.created_at', 'plans.updated_at')->orderBy('count', 'DESC')->take(10)->get();
        return view ('plans.act', ['plans'=>$plans]);
           
    }
    
    public function scene()
    {
        $plans = \DB::table('plan_user')->join('plans', 'plan_user.plan_id', '=', 'plans.id')->select('plans.*', \DB::raw('COUNT(*) as count'))->groupBy('plans.id', 'plans.name', 'plans.content', 'plans.type', 'plans.image_url','plans.created_at', 'plans.updated_at')->orderBy('count', 'DESC')->take(10)->get();
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