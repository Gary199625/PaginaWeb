<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvaider extends Model
{

    protected $fillable=['provaider_id','provaider'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
