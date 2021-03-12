<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $pasta = config('pasta');
    return view('home', ['pastaArray' => $pasta]);
});

Route::get('/products', function () {
    $pasta = config('pasta');
    return view('pages.products', ['pastaArray' => $pasta]);
});

Route::get('/product/{id?}', function($id=null){
    $pasta = config('pasta');
    if($id > count($pasta)){
        return abort(404);
    }
    // if(empty($id)){
    //     return redirect('/');
    // }
    return view('pages.product', ['idProduct' => $id], ['pastaArray' => $pasta]);
});