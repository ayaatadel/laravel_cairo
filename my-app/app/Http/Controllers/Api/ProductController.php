<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        $products=Product::get();
        return response()->json(['data'=>$products]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:20|min:3',
            'price'=>'required',
            'availability'=>'required',
            'category_id'=>'required|exists:categories,id'
        ]);
        try {
            // code...
            $product=Product::create($request->all());
            return response()->json(['data'=>$product]);
        } catch (\Throwable $th) {
            throw $th;

            return response()->json(['message'=>'server is not available now',"satus"=>503]);

        }

    }

    function show($id)
    {
        $product=Product::find($id);
        if($product)
        {

            return response()->json(['data'=>$product]);
        }
        return response()->json(['message'=>'Product not found']);

    }

    function destroy($id)
    {
        $product=Product::find($id);
        if($product)
        {
            $product->delete();
            return response()->json(['data'=>$product,'message'=>'Product deleted successfully']);

        }
        return response()->json(['message'=>'Product not found']);

    }
    function edit($id,Request $request)
    {
        $product=Product::find($id);
         $request->validate([
            'name'=>'string|max:20|min:3',

        ]);
        if($product)
        {
            $product->update($request->all());
            return response()->json(['data'=>$product,'message'=>"product Updated Successfully"]);
        }

        return response()->json(['message'=>'Product not found']);


    }
}
