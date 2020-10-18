<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'quantity'
    ];
   function product(){
//       return $this->belongsTo(Product::class);
       return $this->belongsTo('App\Product', 'product_id');
   }
}
