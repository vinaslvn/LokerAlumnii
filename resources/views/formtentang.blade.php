@extends('dashboardadmin')
@section('content')
    
    <div class="container-fluid">
        <div class="container mt-3 py-1">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>FORM DATA TENTANG</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tentang Kami</label>
                            <textarea name="tentangkami" id="" cols="115" rows="10" required value="{{ $tentangkamis -> tentangkami }}"></textarea>
                        </div>
                        <input type="submit" value="SIMPAN" name="simpan">
                    </div>
                </form>
            </div>
        </div>

@endsection