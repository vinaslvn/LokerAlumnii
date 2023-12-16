@extends('dashboardadmin')
@section('content')
    
    <div class="container-fluid">
        <div class="container mt-3 py-1">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>FORM DATA TESTIMONI</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="" required value="{{ $testimonis -> nama_lengkap}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="" required value="{{ $testimonis -> jabatan}}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Testimoni</label>
                            <textarea name="testimoni" id="" cols="115" rows="10" required value="{{ $testimonis -> testimoni }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="" required value="{{ $testimonis -> foto }}" >
                        </div>
                        <input type="submit" value="SIMPAN" name="simpan">
                    </div>
                </form>
            </div>
        </div>

@endsection