<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class produkController extends Controller
{
    function read() {
        $produks = Produk::get();
        return view('produks.read', compact('produks'));
    }
    
    function create() {
        return view('produks.create');
    }
    function submit(Request $request){

        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stok'         => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/produks', $image->hashName());

        //create product
        Produk::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stok'         => $request->stok
        ]);


        return redirect()->route('produks.read')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    function edit($id) {
        $produks = Produk::find($id);
        return view('produks.edit', compact('produks'));
    }
    
    function update(Request $request, $id)  {
        $produks = Produk::find($id);
        $produks->image = $request->image;
        $produks->title = $request->title;
        $produks->description = $request->description;
        $produks->price = $request->price;
        $produks->stok = $request->stok;
        $produks->update();
        
        return redirect()->route('produks.read');
    }

    function delete($id) {
        $produks = Produk::find($id);
        if ($produks) {
            $produks->delete();
            return redirect()->route('produks.read')->with('success', 'Produk berhasil dihapus');
        } else {
            return redirect()->route('produks.read')->with('error', 'Produk tidak ditemukan');
        }
    }
    
    
}
