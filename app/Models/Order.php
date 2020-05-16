<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    

    // function products(){
    //     return $this->belongsToMany('App\Models\Product', 'order_details', 'order_id', 'product_id');
    // }

    function orderdetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    function products(){
        return $this->belongsToMany('App\Models\Product', 'order_details', 'order_id', 'product_id');
    }

}
