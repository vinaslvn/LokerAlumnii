<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentangkami;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class TentangkamiController extends Controller
{
    function show (){
        $data ['tentangkamis'] = Tentangkami::all();
        return view ('tentangkami',$data);
    }
    function view (){
        $data ['tentangkamis'] = Tentangkami::all();
        return view ('formtentang',$data);
    }
    function tampil(){
        $data['tentangkami'] = Tentangkami::all();
        return view ('landingpage',$data);
    }
    function add(){
        $data=[
            'action'=>url('/tentangkami/create'),
            'tombol'=>'simpan',
            'tentangkamis'=>(object)[
                'tentangkami'=>''
            ],
        ];
        return view('formtentang',$data);
    }
    function create(Request $req){
        Tentangkami::create([
                'tentangkami'=> $req->tentangkami,
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('tentangkami');
    }

    function hapus($item){
        Tentangkami::where('id',$item)->delete();
        return redirect('tentangkami');
    }

    function edit($item){
        $data['tentangkamis']=Tentangkami::find($item);
        $data['action']= url('tentangkami/update').'/'.$data['tentangkamis']->id;
        // $data['tombol']='update';
        return view('formtentang',$data);
    }

    function update(Request $req){
        Tentangkami::where('id',$req->id)->update([
            'tentangkami'=> $req->tentangkami,
        ]);
        // Toastr::success('Anggota berhasil diedit', 'Berhasil');
        return redirect('tentangkami');
    }
}
