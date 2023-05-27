@extends('layout')
@section('title', 'Cart')
@section('content')
    <div class="box-pesanan" style="padding-top: 3vh;">
        <div class="cart-pesanan">
            <h3 style="color: black; text-align:center; padding-top: 1vh"><b>Cart Pesanan</b></h3>
                <div class="content-cart" style="display:flex; width:100%; height:100%">
                    <div class="left-box-cart">

                    </div>
                    <div class="right-box-cart">
                        <div class="content-right-box-cart" >
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="tanggal-pinjam" style="padding-top: 3vh;">
                                    <label style="color:black; font-family: 'Inter'; font-style: normal;">Tanggal Pinjamanan</label><br>
                                    <input type="date" name="tanggal-pinjam" style="width: 100%; height: 6vh; border-radius:4px; background: #FFFFFF;
                                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border:none;">
                                </div>
                                <div class="tanggal-kembali" style="padding-top: 3vh;">
                                    <label style="color:black; font-family: 'Inter'; font-style: normal;">Tanggal Kembali</label><br>
                                    <input type="date" name="tanggal-kembali" style="width: 100%; height: 6vh; border-radius:4px; background: #CFCFCF;
                                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border:none;">
                                </div>
                                <div class="upload-bukti-transaksi" style="padding-top: 3vh;">
                                    <input class="custom-input-bukti" type="file" id="upload-photo" name="photo" style="width: 100%; background: #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                    border-radius: 18px;" onchange="previewImage(event)">
                                    <label  style="display:flex; color:black; font-family: 'Inter'; font-style: normal; width: 100%;" for="upload-photo">
                                        <div class="text-kirim-bukti">
                                            Bukti Transaksi
                                        </div>
                                        <div class="button-kirim-bukti">
                                            <button class="custom-button-kirim">
                                                {{ __('Kirim') }}
                                            </button>
                                        </div>
                                    </label>
                                    <div class="preview-bukti" style="padding-top: 3vh;">
                                        <img class="img-bukti" id="preview" src="#" alt="preview">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
