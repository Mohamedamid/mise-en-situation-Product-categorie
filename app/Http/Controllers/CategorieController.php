<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categorie = Categorie::create($request->all());
        return response()->json($categorie, 201);
    }

    public function show($categorieid)
    {
        $categorie = Categorie::find($categorieid);
        return response()->json($categorie);
    }

    public function update(Request $request, $categorieid)
    {
        $categorie = Categorie::find($categorieid);
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    public function delete($categorieid)
    {
        $categorie = Categorie::find($categorieid);
        $categorie->delete();
        return response()->json(null, 204);
    }
}
