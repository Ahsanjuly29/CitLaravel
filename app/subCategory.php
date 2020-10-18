<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
	function category(){
        return $this->belongsTo('App\Category','category_id');
	}
}
