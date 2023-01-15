<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// Route::get('/admin/product', function () {
//     return view('admin.product', [
//         "title" => "Product"
//     ]);
// });

// Route::get('/admin/product/add', function () {
//     return view('admin.product_add', [
//         "title" => "Add Product"
//     ]);
// });

// Category Admin
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/add', [CategoryController::class, 'add'])->name('category.add');
Route::post('/admin/category/store', [CategoryController::class, 'create'])->name('category.create');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

//Product Admin
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin_product.index');
Route::get('/admin/product/add', [ProductController::class, 'add'])->name('admin_product.add');
Route::post('/admin/product/store', [ProductController::class, 'create'])->name('admin_product.create');
