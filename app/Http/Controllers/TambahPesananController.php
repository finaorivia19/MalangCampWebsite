<?php

namespace App\Http\Controllers;

use App\Models\KelolaBarang;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelolaBarang = KelolaBarang::paginate(3);
        return view('tambahPesanan', compact(('kelolaBarang')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelolaBarang  $kelolaBarang
     * @return \Illuminate\Http\Response
     */
    public function show(KelolaBarang $kelolaBarang)
    {
        return view('tambahPesanan.show', compact('kelolaBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelolaBarang  $kelolaBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(KelolaBarang $kelolaBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelolaBarang  $kelolaBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelolaBarang $kelolaBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelolaBarang  $kelolaBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelolaBarang $kelolaBarang)
    {
        //
    }
}
