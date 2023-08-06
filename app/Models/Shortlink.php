<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shortlink extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    const DEFAULT_STATUS = true;
    const DOMAIN = 'http://url.to/';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'shortlink',
        'link',
        'user_id',

    ];


    /**
     * This function generates unique short link
     */
    public static function getShortLink(){
        $code = substr(md5(rand()), 0, 6);
        $slink = self::DOMAIN.$code;
        $shortlink = Shortlink::where('shortlink',"=",$slink)->first();
        if($shortlink === null){
            return $slink;
        } else {
            Shortlink::getShortLink();
        } 
    }


    /**
     * This function is responsible to store newly generated shortlink in shortlink table
     */
    public static function createShortLink($data){
        $slink = Shortlink::getShortLink();
        $shortlink = [
            'shortlink' => $slink,
            'link' => $data['link'],
            'user_id' => $data['user_id'],
            'active' => $data['active'] 
        ];
        $res = Shortlink::create($shortlink);
        return $res;
    }

    /**
     * This function updates the long link or its activation status
     */
    public static function updateShortLink($data){
        $shortlink = Shortlink::find($data['shortlink_id']);
        $shortlink->link = $data['big_link'];
        $shortlink->active = $data['status'];
        $res = $shortlink->update();
        return $res;
    }
    
}
