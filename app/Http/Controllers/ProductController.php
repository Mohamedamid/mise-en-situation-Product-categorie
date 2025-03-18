<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'categorie_id' => 'required',
    ]);

    $product = Product::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);

    $product->categories()->attach($request->categorie_id);

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
