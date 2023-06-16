@extends('layout')

@section('title', 'Tambah Pesanan')

@section('content')
<div class="utama">
    <!-- <div class="box_kelola"> -->
    <div class="box_listTam">
        <div>
            <div>
                <div class="pagination d-flex">
                    <div class="tambahan">

                    </div>
                    <div class="box_panah d-flex">
                        <!-- Tombol untuk halaman sebelumnya -->
                        @if($kelolaBarang->currentPage() > 1)
                        <a href="{{ $kelolaBarang->previousPageUrl() }}" style="color:black; font-size:20px;"><b>
                                <</b> </a> <!-- <div class="text"> -->
                                    <h4 class="list"> <b> List Barang </b> </h4>
                                    <!-- </div> -->
                                    <a href="{{ $kelolaBarang->nextPageUrl() }}"
                                        style="color:black; font-size:20px;"><b>></b></a>
                                    @endif

                                    <!-- Tombol untuk halaman berikutnya -->
                                    @if($kelolaBarang->hasMorePages())
                                    <a href="{{ $kelolaBarang->previousPageUrl() }}"
                                        style="color:black; font-size:20px;"><b>
                                            <</b> </a> <!-- <div class="text"> -->
                                                <h4 class="list"> <b> List Barang </b> </h4>
                                                <!-- </div> -->

                                                <a href="{{ $kelolaBarang->nextPageUrl() }}"
                                                    style="color:black; font-size:20px;"><b>></b></a>
                                                @endif

                    </div>
                </div>
                <div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
</div>
@endsection
