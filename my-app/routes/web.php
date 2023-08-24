<?php

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






*/

Route::get('/', function () {
    echo "ayaat";
    return view('welcome');
});

Route::get('/hello',function()
{
    $name="ayaat";
return view('hello',['user_name'=>"$name"]);
});

Route::get('/products',[ProductController::class,'getAllProducts']);
// Route::post('/products',[ProductController::class,'cteateProduct']);


