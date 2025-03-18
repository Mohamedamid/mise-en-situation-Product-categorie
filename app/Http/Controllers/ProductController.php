<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        $product->categorie()->attach($request->categorie_id);
        return response()->json($product, 201);
    }

    public function show($productid)
    {
        $product = Product::find($productid);
        return response()->json($product);
    }

    public function update(Request $request, $productid)
    {
        $product = Product::find($productid);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete($productid)
    {
        $product = Product::find($productid);
        $product->delete();
        return response()->json(null, 204);
    }
}
