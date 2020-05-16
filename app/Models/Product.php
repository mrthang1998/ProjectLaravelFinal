<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'desc', 'price', 'brand_id'];

    function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

    function orderdetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    function orders(){
        return $this->belongsToMany('App\Models\Order', 'order_details', 'product_id', 'order_id');
    }
}
