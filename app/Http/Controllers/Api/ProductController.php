<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return api_success(
            array('data' => Product::all())
        );
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return api_success(
            array('data' => $product)
        );
    }
}
