<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kosan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class KosanController extends Controller
{
    public function index()
    {
        $kosan = Kosan::paginate(4);
        return view('backend.kosan.index', compact('kosan'));
    }

    public function create()
    {
        return view('backend.kosan.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'jalan'=>'required|string',
            'harga'=>'required|integer',
            'jeniskosan'=>'required|string',
            'gambar'=>'required'
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kosan');
        }

        Kosan::create([
            'jalan'=> $request->input('jalan'),
            'harga'=> $request->input('harga'),
            'jeniskosan' =>$request->input('jeniskosan'),
            'gambar'=>$file
        ]);

        return redirect()->route('index-kosan');
    }

    public function edit($id)
    {
        $kosan = Kosan::where('id', $id)->first();
        return view('backend.kosan.edit', compact('kosan'));
    }

    public function update(Request $request, $id)
    {
        $kosan = Kosan::where('id', $id)->first();
        $this->validate($request, [
            'jalan'=>'required|string',
            'harga'=>'required|integer',
            'jeniskosan'=>'required|string',
       
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kosan');
            if ($kosan->gambar && file_exists(storage_path('app/public', $kosan->gambar))) {
                Storage::delete('public/', $kosan->gambar);
                $file = $request->file('gambar')->store('kosan');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $kosan->gambar;
        }

        $kosan->update([
            'jalan'=> $request->input('jalan'),
            'harga'=> $request->input('harga'),
            'jeniskosan' =>$request->input('jeniskosan'),
            'gambar'=>$file
        ]);

        return redirect()->route('index-kosan');

    }

    public function delete($id)
    {
        $kosan = Kosan::where('id', $id)->first();
        if ($kosan->gambar && file_exists(storage_path('app/public', $kosan->gambar))) {
            Storage::delete('public/', $kosan->gambar);
        }
        $kosan->delete();
        return redirect()->route('index-kosan');
    }

    
}
