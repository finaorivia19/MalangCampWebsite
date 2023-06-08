@extends('layout')
@section('title', 'KelolaBarang')
@section('content')
<div class="utama">
    <div class="box_kelola">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                <div>
                    <label for="images" class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    <input type="file" id="images" accept="image/*" required >
                    </label>
                </div>
                <div class="nama">
                    ID item
                    <div>
                        <label for="item_id"></label> 
                        <input class="box_isi" type="text" id="text-input" placeholder="Masukkan ID Item">
                    </div>
                    Nama Item
                    <div>
                        <label for="nama_item"></label> 
                        <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Nama Item">
                    </div>
                    stok
                    <div>
                        <label for="stok"></label> 
                        <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Stok Item">
                    </div>
                    jenis
                    <div>
                        <label for="jenis"></label> 
                        <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Jenis Item">
                    </div>
                    harga
                    <div>
                        <label for="harga"></label> 
                        <input class="box_isi" type="text" id="text-input" placeholder="Masukkan Harga Item">
                    </div>
                    <div class="hapus_edit d-flex">
                        <button class="box_add">reset</button>
                        <button type="submit" name="submit" class="box_add">add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="box_list">
        <div>
            <div>
                <div class="d-flex">
                    <div class="panah">
                        < </div>
                            <div class="box_tenda">
                                <div class="text">
                                    <b>
                                        <h4> Tenda </h4>
                                    </b>
                                </div>
                            </div>
                            <div class="panah">
                                >
                            </div>
                    </div>
                    <div>
                        <div class="tenda d-flex">
                            <div class="box_kelola">
                                <div>
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
                                </div>
                            </div>
                            <div class="box_kelola">
                                <div>
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
                                </div>
                            </div>
                            <div class="box_kelola">
                                <div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection