<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelolaBarang;

class KelolaBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelolaBarang');
        // //fungsi eloquent menampilkan data menggunakan pagination
        // $kelola_barangs = KelolaBarang::all(); // Mengambil semua isi tabel
        // $posts = KelolaBarang::orderBy('barang_id', 'desc');
        // return view('kelolaBarang', compact('kelola_barangs'));
        // // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelolaBarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'id_item' => 'required',
            'nama_item' => 'required',
            'stok' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        KelolaBarang::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kelolaBarang.index')
            ->with('success', 'Item Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        // $kelola_barangs = KelolaBarang::find($barang_id);
        // return view('kelolaBarang', compact('KelolaBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // //fungsi eloquent untuk menghapus data
        // KelolaBarang::find($barang_id)->delete();
        // return redirect()->route('kelolaBarang')
        // -> with('success', 'Barang Berhasil Dihapus');
    }
}
