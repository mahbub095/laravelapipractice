<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return response()->json(Product::get(), 200);
    }

    public function productbyID($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json('Record not found !', 200);
        }
        //return response()->json(Product::find($id), 200);
    }

    public function countrysave(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function productupdate(Request $request, $id)
    {

        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json('Record not found !', 400);
        }

        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function productDelete(Request $request,  $id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json('Record not found !', 400);
        }
        $product->delete();
        return response()->json(null, 204);
    }
}
