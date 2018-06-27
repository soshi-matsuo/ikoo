<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;
use App\Plan;

class UsersController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $plans= $user->wants()->paginate(10);
        
        return view('users.show', [
            'plans' => $plans,
            'user' => $user,
                   ]);
    }
}


// $count_gourmet = $Fuser->like_plans()->count();
        // $count_scene = $user->_plans()->count();
        // $count_want = $user->want_plans()->count();
        // $plans = \DB::table('plans')->join('plan_user', 'plans.id', '=', 'plan_user.plan_id')->select('plans.*')->where('plan_user.user_id', $user->id)->distinct()->paginate(20);

