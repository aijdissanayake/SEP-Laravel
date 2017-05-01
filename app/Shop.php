<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function user(){
    	return $this->belongsTo('App\Shop');
    }

    public function gemTypes(){
    	return $this->hasMany('App\GemType');
    }

    public function gemTypes(){
    	return $this->hasMany('App\GemSize');
    }
}
