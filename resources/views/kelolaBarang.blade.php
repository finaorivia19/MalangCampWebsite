@extends('layout')

@section('title', 'Kelola Barang')

@section('content')
<div class="utama">
    <div class="box_kelola">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terdapat beberapa masalah pada inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="text">
            Tambah Barang
        </div>

        <div>
            <form method="post" action="{{ route('kelolaBarang.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf 
                
                <div class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    <input type="file" id="images" accept="image/*" required name="gambar">
                </div>

                <div class="nama">
                    <div>
                        <label for="item_id">ID item</label>
                        <input class="box_isi" type="text" id="item_id" placeholder="Masukkan ID Item" required name="id_item">
                    </div>
                    <div>
                        <label for="nama_item">Nama Item</label>
                        <input class="box_isi" type="text" id="nama_item" placeholder="Masukkan Nama Item" required name="nama_item">
                    </div>
                    <div>
                        <label for="stok">Stok</label>
                        <input class="box_isi" type="text" id="stok" placeholder="Masukkan Stok Item" required name="stok">
                    </div>
                    <div>
                        <label for="jenis">Jenis</label>
                        <input class="box_isi" type="text" id="jenis" placeholder="Masukkan Jenis Item" required name="jenis">
                    </div>
                    <div>
                        <label for="keterangan">Keterangan</label>
                        <input class="box_isi" type="text" id="keterangan" placeholder="Masukkan Keterangan Item" required name="keterangan">
                    </div>
                    <div>
                        <label for="harga">Harga</label>
                        <input class="box_isi" type="text" id="harga" placeholder="Masukkan Harga Item" required name="harga">
                    </div>
                    <div class="hapus_edit d-flex">
                        <button type="reset" class="box_add">Reset</button>
                        <button type="submit" class="box_add">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="box_list">
        <div>
            <div>
                <div class="d-flex">
                    <!-- <div class="panah">
                        < 
                    </div> -->
                    <div class="box_tenda">
                        <div class="text">
                            <h4> List Barang </h4>
                        </div>
                    </div>
                    <!-- <div class="panah">
                        >
                    </div> -->
                    </div>
                    <div>
                        <div class="tenda d-flex"> 
                            @foreach ($kelolaBarang as $KelolaBarang) 
                                <div class="box_kelola">
                                    <div class="nama">
                                        <img src="{{ asset('storage/static/image/'.$KelolaBarang->gambar) }}" class="box_foto" alt="">                                       
                                        <div>
                                            <label for="item_id">ID Item</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->id_item}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        <label for="nama_item">Nama Item</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->nama_item}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        <label for="stok">Stok</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->stok}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        <label for="jenis">Jenis</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->jenis}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        <label for="keterangan">Keterangan</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->keterangan}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        <label for="harga">Harga</label>
                                            <div class="box_isi">
                                                <div class="isi"> 
                                                    {{$KelolaBarang->harga}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hapus_edit d-flex">
                                            <button type="reset" class="box_add">Update</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <!-- <div>
                                    <div>
                                        <div class="box_foto">
                                            <div class="pencil">
                                                <img src="{{ asset('static/image/pencil.png') }}" alt="pencil">  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nama">
                                        nama barang
                                        <div>
                                            <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Nama Barang">
                                        </div>
                                        stok
                                        <div>
                                            <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Stok Barang">
                                        </div>
                                        harga
                                        <div>
                                            <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Harga Barang">
                                        </div>
                                        <div class="hapus_edit d-flex">
                                            <button class="box_add">update</button>
                                            <button class="box_add">delete</button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection