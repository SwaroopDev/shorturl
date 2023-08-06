<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    const DEFAULT_LINKS = 10;
    protected $fillable = [
        'user_id',
        'available_links'
    ];

    public function user()  
    {  
        return $this->belongsTo('App\Models\User');  
    }  

    public static function createDefaultMembership($user_id){
        $membership = [
            'user_id' => $user_id,
            'available_links' => self::DEFAULT_LINKS
        ];

        $res = Membership::create($membership);
        return $res;
    }

    public static function updateMembership($user_id,$data){
        $membership = Membership::where('user_id','=',$user_id)->first();
        if($membership->available_links >= 0 && $data['package'] > 0){
            $membership->available_links += $data['package'];
        } else {
            $membership->available_links = $data['package'];
        }
        $res = $membership->update();
        return $res;
    }

    public static function checkAvailableLinks($user_id){
        $record = Membership::where('user_id',"=",$user_id)->first();
        return $record->available_links;
    }

    public static function decreamentAvailableLinks($user_id){
        $membership = Membership::where('user_id',"=",$user_id)->first();
        if($membership->available_links > 0){
            $membership->available_links = $membership->available_links - 1;
        }
        $res = $membership->update();
        return $res;
    }


}
