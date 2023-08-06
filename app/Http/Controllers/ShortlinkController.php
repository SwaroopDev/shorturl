<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Shortlink;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class ShortlinkController extends Controller
{
    //

    /**
     * Url redirect function
     */
    public function url($code){
        $shortlink = Shortlink::where('shortlink', 'like', "%$code")
        ->where('active','=', 1)->first();
        sleep(2);
        if($shortlink){
            return Redirect::away($shortlink->link);
        } else {
            abort(404);
        }
        
    }

    /**
     * Show all links of user
     */
    public function index() : view 
    {
        $user = User::find(Auth::User()->id);
        return view('shortlink.index')->with('user',$user);
    }


    /**
     * Create new short link page
     */
    public function create() : View
    {
        $avblLinks = Membership::checkAvailableLinks(Auth::user()->id);
        if($avblLinks > 0 || $avblLinks == -1){
            return view('shortlink.create_shortlink');
        } else {
            return view('membership.membership-expired');  
        }
        
    }

    /**
     * Store new short link
     */
    public function store(Request $request)
    {
        $avblLinks = Membership::checkAvailableLinks(Auth::user()->id);
        if($avblLinks > 0 || $avblLinks == -1){
                $insertData['user_id'] = Auth::user()->id;
                $insertData['link'] = $request->big_link;
                $insertData['active'] = $request->status;
                $res = Shortlink::createShortLink($insertData);
                if($res){
                    Membership::decreamentAvailableLinks(Auth::user()->id);
                    $response = array(
                        'status' => 'success',
                        'msg' => $res->shortlink,
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'msg' => 'Error while saving your details. please try again later.',
                    );
                } 
                
        } else {
            
            $response = array(
                'status' => 'membership-error',
                'msg' => 'Your membership is expired please upgrade your membership.',
            );
        }

        return response()->json($response);          
    }

    /**
     * shortlin edit page
     */
    public function edit($id) 
    {
        $data = Shortlink::find($id);
        return view('shortlink.edit_shortlink')->with('data',$data);
    }

    /**
     * Update the shortlink details
     */
    public function update(Request $request)
    {
         $updateData['shortlink_id'] = $request->shortlink_id;
         $updateData['big_link'] = $request->big_link;
         $updateData['status'] = $request->status;
         $res = Shortlink::updateShortLink($updateData);
         return redirect()->intended(RouteServiceProvider::HOME);

        
    }

    /** Softdelete the link */
    public function delete(Request $request){
        $record = Shortlink::find($request->id);
        
        $res = $record->delete();
        if($res){
            $response = array(
                'status' => 'success',
                'msg' => 'Record deleted successfully.',
                'deleted_id' => $record->id 
            );
        } else {
            $response = array(
                'status' => 'error',
                'msg' => 'Something Went Wrong. Please try again later',
            );
        } 
        
        return response()->json($response);
    }
}
