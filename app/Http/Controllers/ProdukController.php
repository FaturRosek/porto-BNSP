<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|string',
            'harga' => 'required|max:255|string',
            'ukuran' => 'required|max:255|string',
            'prosesor' => 'required|max:255|string',
            'memori' => 'required|max:255|string',
            'storage' => 'required|max:255|string',
            'gambar' => 'nullable|mimes:png,jpg,jpeg,webp|max:3048',
        ]);

        $filename = NULL;
        $path = 'uploads/produk/';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        }

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'prosesor' => $request->prosesor,
            'memori' => $request->memori,
            'ukuran' => $request->ukuran,
            'storage' => $request->storage,
            'gambar' => $filename ? $path . $filename : NULL,
        ]);

        return redirect()->route('produk.index')->with('status', 'Data Berhasil Ditambahkan');
    }
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if (File::exists($produk->gambar)) {
            File::delete($produk->gambar);
        }

        $produk->delete();

        return redirect()->route('produk.index')->with('status', 'Data Berhasil di Hapus');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }
    public function update(Request $request, $id)
    {

        $produk = Produk::find($id);

        $filename = $produk->gambar;
        $path = 'uploads/produk/';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);

            if (File::exists($produk->gambar)) {
                File::delete($produk->gambar);
            }
        }

        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->prosesor = $request->prosesor;
        $produk->memori = $request->memori;
        $produk->ukuran = $request->ukuran;
        $produk->storage = $request->storage;
        $produk->gambar = $filename ? $path . $filename : $produk->gambar;
        $produk->save();

        return redirect()->route('produk.index')->with('status', 'Data Berhasil Diupdate');
        // $produk->update([
        //     'nama' => $request->nama,
        //     'harga' => $request->harga,
        //     'prosesor' => $request->prosesor,
        //     'memori' => $request->memori,
        //     'ukuran' => $request->ukuran,
        //     'storage' => $request->storage,
        //     'gambar' => $filename ? $path . $filename : $produk->gambar,
        // ]);


    }

    public function show()
    {
        return view('produk.show');
    }
}
