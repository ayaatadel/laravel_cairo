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

    function index()
    {
        // plural => table model=> singular
        $products=Product::get();

        // dump  dd=> dump and die
        // dd($products->count());
        // dd($products->first());
        // dd($products->last());
        // dd($products->toArray());
        // dd($products->where('product_name',"shai_alarosa"));

                  // view      // DB
        return view('product.index',['products'=>$products]);
    }
    function show($id)
    {
        $product=Product::find($id);
        // $product2=Product::where('product_price','>',10)->get();
        // dd($product2);
        return view('product.show',compact('product'));

    }
    function destroy($id)
    {
       Product::find($id)->delete();
        // dd($product);
        return redirect()->route('product.index');

    }
    function update($id)
    {
        $product=Product::find($id);
        return view('product.update',compact('product'));

    }
    function edit($id,Request $request)
    {
        // dd($id,$_REQUEST);
        // dd($request->all());

        $product=Product::find($id);
        // _method _token
        // $product->update($request->all());
        $product->update($request->except('_method','_token'));
        // $product->update([
        //     // db             // request->name(form)
        //     "product_name"=>$request->product_name,
        // ]);

        return redirect()->route('product.index');


    }
    // function create()
    // {
    //     return view('product.create');

    // }
    function store(Request $request)
    {
        //  Product::create([
        //     "product_name"=>$request->product_name,
        //  ]);
        Product::create($request->all());
        return redirect()->route('product.index');

    }
}
