<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $data_image = Image::paginate(4);
        return view('backend.image.index',compact('data_image'));
    }

    public function create()
    {
        return view('backend.image.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required'
        ]);


        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('image');
        }

        Image::create([
            'gambar'=>$file
        ]);

        return redirect()->route('index-image');
    }

    public function edit($id)
    {
        $data_image = Image::where('id', $id)->first();
        return view('backend.image.edit', compact('data_image'));
    }

    public function update(Request $request, $id)
    {
        $data_image = Image::where('id', $id)->first();

        $this->validate($request, ['gambar'=>'required']);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('image');
            if ($data_image->gambar && file_exists(storage_path('app/public', $data_image->gambar))) {
                Storage::delete('public/', $data_image->gambar);
                $file = $request->file('gambar')->store('image');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $data_image->gambar;
        }

        $data_image->update([
            'gambar'=> $file
        ]);

        return redirect()->route('index-image');
    }

    public function delete($id)
    {
        $data_image = Image::where('id', $id)->first();
        if ($data_image->gambar && file_exists(storage_path('app/public', $data_image->gambar))) {
            Storage::delete('public', $data_image->gambar);
        }
        $data_image->delete();

        return redirect()->route('index-image');

    }




}
