<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pro_cov_time_comment extends Model
{
    protected $guarded = [];
    protected $table = 'pro_cov_time_comment';

    public function profilePic(){

    	return $this->hasOne('App\Models\Profile', 'user_id', 'user_id');
    }

    public function user(){
    	return $this->hasOne('App\User');
    }
}
