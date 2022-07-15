<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $product = Product::all();
        return view('backend.kost.index', compact('product'));
    }

    public function create()
    {
        return view('backend.kost.create');
    }

    public function store(Request $request)
    {
        $product = $request->all();

        Product::create($product);

        return redirect()->route('show-kosan');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('backend.kost.update', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();

        $product->update([
            "boarding_type" => $request->input('boarding_type'),
            "street_name" => $request->input('street_name'),
            "price" => $request->input('price'),
            "details" => $request->input('details'),
        ]);

        return redirect()->route('show-kosan');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();

        $product->delete();

        return redirect()->route('show-kosan');
    }
}
