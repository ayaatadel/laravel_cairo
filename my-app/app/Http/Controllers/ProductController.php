<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

   // show all peoducts
   /*
 1- view (products)
 2-controller => function => all products
 3-route => /product => function in controlller

   */


    function getAllProducts()
    {
        // plural => table model=> singular
        $products=Product::get();
        // dump  dd=> dump and die
        // dd($products);
        return view('products',['products'=>$products]);
    }
}
