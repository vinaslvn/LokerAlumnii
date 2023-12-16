@extends('dashboardadmin')
@section('content')
    
    <div class="container-fluid">
        <div class="container mt-3 py-5">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>FORM DATA PERUSAHAAN</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control" id="" required value="{{ $perusahaans -> nama_perusahaan }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="" required value="{{ $perusahaans -> foto }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="115" rows="10" required value="{{ $perusahaans -> deskripsi }}"></textarea>
                        </div>
                        <input type="submit" value="SIMPAN" name="simpan">
                    </div>
                </form>
            </div>
        </div>




@endsection