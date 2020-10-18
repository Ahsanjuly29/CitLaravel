<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'product_name',
        'product_slug',
        'product_code',
        'product_summary',
        'product_description',
        'product_color',
        'product_size',
        'product_price',
        'product_thumbnail',
        'product_quantity',
        'category_id',
        'subcategory_id',
        'product_alert',
        'product_tags',
        'created_at',
    ];
   function category(){
       return $this->belongsTo('App\Category','category_id');
   }

}
