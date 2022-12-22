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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::get('/admin', function () {
    return view('admin.home', [
        "title" => "Home"
    ]);
});

Route::get('/admin/product', function () {
    return view('admin.product', [
        "title" => "Product"
    ]);
});

Route::get('/admin/product/add', function () {
    return view('admin.product_add', [
        "title" => "Add Product"
    ]);
});
