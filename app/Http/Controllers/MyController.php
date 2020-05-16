<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('CheckAge');
    }
    
    function show($id){
        return $id;
    }

    function tong($hsa, $hsb){
        return $hsa + $hsb;
    }
}
