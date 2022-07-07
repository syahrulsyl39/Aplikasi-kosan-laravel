<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BoardingHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BoardingController extends Controller
{
    public function show()
    {
        $boarding = BoardingHouse::all();
        return view('backend.kost.index', compact('boarding'));
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
            'picture' => 'required',
        ]);

        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
        }

        BoardingHouse::create([
            "boarding_type" => $request->input('boarding_type'),
            "street_name" => $request->input('street_name'),
            "price" => $request->input('price'),
            "picture" => $file
        ]);

        return redirect()->route('show-kosan');
    }

    public function edit($id)
    {
        $boarding = BoardingHouse::where('id', $id)->first();

        return view('backend.kost.update', compact('boarding'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'boarding_type' => 'required|string',
            'street_name' => 'required|string',
            'price' => 'required|string',
        ]);

        $boarding = BoardingHouse::where('id', $id)->first();
        if ($request->file('picture')) {
            $file = $request->file('picture')->store('gambar', 'public');
            if ($boarding->picture && file_exists(storage_path('app/public/' . $boarding->picture))) {
                Storage::delete('public/' . $boarding->picture);
                $file = $request->file('picture')->store('gambar', 'public');
            }
        }

        if ($request->file('picture') === null) {
            $file = $boarding->picture;
        }

        $boarding->update([
            "boarding_type" => $request->input('boarding_type'),
            "street_name" => $request->input('street_name'),
            "price" => $request->input('price'),
            "picture" => $file
        ]);

        return redirect()->route('show-kosan');
    }

    public function destroy($id)
    {
        $boarding = BoardingHouse::where('id', $id)->first();

        if ($boarding->picture && file_exists(storage_path('app/public/' . $boarding->picture))) {
            Storage::delete('public/' . $boarding->picture);
        }

        $boarding->delete();

        return redirect()->route('show-kosan');
    }
}
