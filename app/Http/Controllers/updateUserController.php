<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class updateUserController extends Controller
{
    public function update(Request $request, $id)
 {
//melakukan validasi data
 $request->validate([
 'photo_' => 'required',
 'Nama' => 'required',
 'Kelas' => 'required',
 'Jurusan' => 'required',
 'No_Handphone' => 'required',
 ]);
}
}
public function edit($Nim)
 {
//menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk
diedit
 $Mahasiswa = Mahasiswa::find($Nim);
 return view('mahasiswas.edit', compact('Mahasiswa'));
 }