<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
    return "post: $postId - comment: $commentId";
});

Route::get('user/{id}', function($id = null){
    return $id;
})->middleware('checkAge', 'checkName');

Route::get('show/{id}', 'MyController@show');
Route::get('tong/{a}/{b}', 'MyController@tong');

Route::resource('products', 'Admin\ProductController');
Route::resource('/','BrandController');
Route::resource('customers', 'CustomerController');

// Route::prefix('admin')->group(function() {
//     Route::resource('products', 'ProductController');
//     Route::resource('brands', 'BrandController');
// });
Route::get('test', 'BrandController@index')->name('thang');
Auth::routes();

Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('products', 'ProductController');
    Route::resource('brands', 'BrandController');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('detailproduct', function()
{
    return view('products.detail');
});

