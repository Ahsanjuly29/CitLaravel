<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    function category(){
        return $this->belongsTo('App\Category','category_id');
//        return $this->belongsTo('App\User', 'foreign_key');
    }
}
