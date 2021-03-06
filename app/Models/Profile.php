<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    protected $table = 'profiles';

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
