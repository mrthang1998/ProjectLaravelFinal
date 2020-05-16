<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = 'brands';
    protected $fillable = ['name'];

    function products(){
        return $this->hasMany('App\Models\Product', 'brand_id', 'id');
    }
}
