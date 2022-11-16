<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\products;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [products::class,'index']);

Route::get('/products/create', [products::class,'create']);

Route::post('/products/registrar', [products::class,'registrar']);