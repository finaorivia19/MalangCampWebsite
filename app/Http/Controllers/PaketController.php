<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\KelolaBarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pakets = Paket::all();
        // dd($Pakets);
        return view('kelolaPaket', compact('Pakets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = KelolaBarang::all();
        // dd($item);
        return view('tambahPaket', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_paket' => 'required',
            'image_paket' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_paket' => 'required|numeric',
            'items' => 'required|array',
        ]);

        dd($request);

        // Simpan data paket
        $paket = new Paket();
        $paket->nama_paket = $request->get('nama_paket');
        $paket->harga_paket = $request->get('harga_paket');

        // Upload gambar dan simpan path ke database
        if ($request->file('image_paket')) {
            $filename = $request->file('image_paket')->store('image_paket', 'public');
        }

        $paket->save();

        // Simpan item terkait
        $items = $request->get('items');
        $paket->items()->attach($items);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('paket.index')->with('success', 'Paket berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show($paket_id)
    {
        $Paket = Paket::find($paket_id);
        return view('paketDetail', compact('Paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit($paket_id)
    {
        $Paket = Paket::find($paket_id);
        return view('updatePaket', compact('Paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        //
    }
}
