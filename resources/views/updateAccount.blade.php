@extends('layout')
@section('title', 'updateAccount')
@section('content')

<div class="all" style="padding-top:40px;">
<div class="d-flex" id="table" style=" background-color: #96858F; padding: 25px; border-radius: 35px; margin-left:85px; width: 800px;">
<div class="card mb-3" style="max-width: 800px; border-radius:20px; background-color: #D9D9D9;">
    <div class="row g-0">
        <div class="col-md-4">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label><br>
                        <input type="text" name="nim" class="form-control" id="nim" aria-describedby="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        {{-- <input type="text" name="kelas" class="formcontrol" id="kelas" aria-describedby="kelas"> --}}
                        <select name="kelas" class="form-control">
                            @foreach ($kelas as $Kelas)
                                {{-- <script>
                                    console.log({{$Kelas->nama}});
                                </script> --}}
                                <option value={{ $Kelas->id }}>{{ $Kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label><br>
                        <input type="text" name="jurusan" class="form-control" id="jurusan"
                            aria-describedby="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No_HP</label><br>
                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                            aria-describedby="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal_Lahir</label><br>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                            aria-describedby="tanggal_lahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6>
                <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6>
                <h5 class="mb-3 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h5>
                <h6 class="mb-4 card-title" style="height:23px; width: 400px; background-color:white; border-radius:10px; padding-left:8px;"></h6> -->
                <button type="button" class="btn btn-outline-light"style="background-color:#AC608D;">Cancel</button>
                <button type="button" class="btn btn-outline-light"style="background-color:#673A54;">Update</button>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection