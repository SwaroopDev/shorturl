<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    //
    /**
     * membership upgrade form
     */
    public function upgrade(){
        return view('membership.upgrade');
    }

    /**
     * Membership update
     */
    public function update(Request $request)
    {
        $updateData['package'] = $request->package;
        $res = Membership::updateMembership(Auth::user()->id,$updateData);
        if($res){
            return redirect()->intended(RouteServiceProvider::HOME);
        }

    }

    
}
