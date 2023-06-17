<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index')->with([
            'barang' => Barang::all(),
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     * 
     *  @return Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create',[
            'satuanbarang' => Satuan::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request -> validate([
            'kode' => 'required|unique:barangs,kode',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi'=> 'required',
            'satuan_id'=> 'required',
        ],
            [
               'kode.required' => 'Kode Barang harus di isi!',
               'kode.unique'=> 'Kode Barang sudah ada',
               'nama.required' => 'Nama Barang harus di isi!',
               'harga.numeric' => 'Harga Barang harus berupa nominal!',
               'deskripsi.required' => 'Deskripsi Barang harus di isi!',
               'satuan_id.required' => 'Satuan Barang harus di isi!',  
            ]);

        $barang = new Barang;
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan_id;
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::find($id);
        return view('barang.show')->with('barang', $barang);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('barang.edit')->with([
            'barang' => Barang::find($id),
            'satuanbarang' => Satuan::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $barang = Barang::find($id);
        $barang->kode = $request->kode;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan_id;
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return back()->with('success', 'Data Berhasil dihapus');
    }
}
