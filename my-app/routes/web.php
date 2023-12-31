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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
view all products

- blade (viewAllProducts)
-- function => return all products
-- route execute funtion in controller    /products

--------------------------------------------------------------------

1- migrations :  structure tables in data
2-seeders : out fatory fake data
3-factory : name:string
4-relations
--------------------------
php artisan make:controller -r || --resource
============================================================

<>    one to one       one to many   many to many     <>


*/

// Route::get('/', function () {
//     echo "ayaat";
//     return view('welcome');
// });

// Route::get('/hello',function()
// {
//     $name="ayaat";
// return view('hello',['user_name'=>"$name"]);
// });
Route::view('/products/create','product.create')->name('product.create');
Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/products/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');

Route::resource('/category',CategoryController::class);

// php artisan route:list
