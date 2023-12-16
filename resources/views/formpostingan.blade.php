@extends('dashboardadmin')
@section('content')
    
    <div class="container-fluid">
        <div class="container mt-3 py-1">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>FORM DATA POSTINGAN</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control" id="" required value="{{ $postingans -> nama_perusahaan }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Bidang Usaha</label>
                            <input type="text" name="bidang_usaha" class="form-control" id="" required value="{{ $postingans -> bidang_usaha }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" id="" cols="115" rows="10" required value="{{ $postingans -> alamat }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="115" rows="10" required value="{{ $postingans -> deskripsi }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="" required value="{{ $postingans -> email }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kontak</label>
                            <input type="text" name="kontak" class="form-control" id="" required value="{{ $postingans -> kontak }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Status</label>
                            <input type="text" name="status" class="form-control" id="" required value="{{ $postingans -> status }}" >
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="" required value="{{ $postingans -> foto }}" >
                        </div>
                        <input type="submit" value="SIMPAN" name="simpan">
                    </div>
                </form>
            </div>
        </div>




@endsection