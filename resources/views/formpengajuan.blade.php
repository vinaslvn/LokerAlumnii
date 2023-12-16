@extends('dashboardadmin')
@section('content')
    
    <div class="container-fluid">
        <div class="container mt-3 py-1">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>FORM DATA PENGAJUAN</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="" required value="{{ $pengajuans -> nama_lengkap }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="" required value="{{ $pengajuans -> tanggal_lahir }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" id="" cols="115" rows="10" required value="{{ $pengajuans -> alamat }}">Alamat</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="" required value="{{ $pengajuans -> email }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kontak</label>
                            <input type="text" name="kontak" class="form-control" id="" required value="{{ $pengajuans -> kontak }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Persyaratan</label>
                            <input type="file" name="persyaratan" class="form-control" id="" required value="{{ $pengajuans -> persyaratan }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Pengajuan</label>
                            <input type="date" name="tanggal_pengajuan" class="form-control" id="" required value="{{ $pengajuans -> tanggal_pengajuan }}" >
                        </div>
                        {{-- <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="">
                                <option value=""></option>
                                <option value="">Laki-laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div> --}}
                        <input type="submit" value="SIMPAN" name="simpan">
                    </div>
                </form>
            </div>
        </div>




@endsection