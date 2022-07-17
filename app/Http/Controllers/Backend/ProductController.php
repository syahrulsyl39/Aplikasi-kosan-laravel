<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request, [
            'boarding_type' => 'required|string',
            'street_name' => 'required|string',
            'price' => 'required|string',
            'details' => 'required|string',
            'photo' => 'required',
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo')->store('gambar', 'public');
        }

        Product::create([
            "boarding_type" => $request->input('boarding_type'),
            "street_name" => $request->input('street_name'),
            "price" => $request->input('price'),
            "details" => $request->input('details'),
            "photo" => $file
        ]);

        return redirect()->route('show-kosan');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('backend.kost.update', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'boarding_type' => 'required|string',
            'street_name' => 'required|string',
            'price' => 'required|string',
            'details' => 'required|string',
            'photo' => 'required',
        ]);

        $product = Product::where('id', $id)->first();

        if ($request->file('photo')) {
            $file = $request->file('photo')->store('gambar', 'public');
            if ($product->photo && file_exists(storage_path('app/public/' . $product->photo))) {
                Storage::delete('public/' . $product->photo);
                $file = $request->file('photo')->store('gambar', 'public');
            }
        }

        if ($request->file('photo') === null) {
            $file = $product->photo;
        }

        $product->update([
            "boarding_type" => $request->input('boarding_type'),
            "street_name" => $request->input('street_name'),
            "price" => $request->input('price'),
            "details" => $request->input('details'),
            "photo" => $file
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
