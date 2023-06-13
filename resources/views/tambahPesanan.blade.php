@extends('layout')

@section('title', 'Tambah Pesanan')

@section('content')
<div class="utama">
    <!-- <div class="box_kelola"> -->
        <div class="box_listTam">
            <div>
                <div>
                    <div>
                        <div class="box_tenda">
                            <div class="text">
                                    <h4> List Barang </h4>
                            </div>
                        </div>
                        <div class="tenda d-flex">
                            @foreach ($kelolaBarang as $barang)
                                <div class="box_kelola">
                                    <div class="nama">
                                        <img src="{{ asset('storage/static/image/'.$barang->gambar) }}" class="box_foto" alt="">                                       
                                        <!-- <div>
                                            <label for="item_id">ID Item</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->id_item}}
                                                </div>
                                            </div>
                                        </div> -->
                                        <div>
                                            <label for="nama_item">Nama Item</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->nama_item}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="stok">Stok</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->stok}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div>
                                            <label for="jenis">Jenis</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->jenis}}
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div>
                                            <label for="keterangan">Keterangan</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->keterangan}}
                                                </div>
                                            </div>
                                        </div> -->
                                        <div>
                                            <label for="harga">Harga</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$barang->harga}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hapus_edit d-flex">
                                            <button type="submit" class="box_add">Pesan</button>
                                            <button type="submit" class="box_add">Add To Chart</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            <div class="d-flex">
                                <!-- Tombol untuk halaman sebelumnya -->
                                @if($kelolaBarang->currentPage() > 1)
                                <div class="panah">
                                    <a href="{{ $kelolaBarang->previousPageUrl() }}"><</a>
                                </div>
                                <div class="panah">
                                    <a href="{{ $kelolaBarang->nextPageUrl() }}">></a>
                                </div>  
                                @endif
                                  
                                <!-- Tombol untuk halaman berikutnya -->
                                @if($kelolaBarang->hasMorePages())
                                <div class="panah">
                                    <a href="{{ $kelolaBarang->nextPageUrl() }}">></a>
                                </div>
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>
@endsection
