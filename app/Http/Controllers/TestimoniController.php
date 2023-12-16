<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class TestimoniController extends Controller
{
    function show (){
        $data ['testimonis'] = Testimoni::all();
        return view ('datatestimoni',$data);
    }
    function view (){
        $data ['testimonis'] = Testimoni::all();
        return view ('formtestimoni',$data);
    }
    function tampil(){
        $data['testimonis'] = Testimoni::all();
        return view ('landingpage',$data);
    }
    function add(){
        $data=[
            'action'=>url('/datatestimoni/create'),
            'tombol'=>'simpan',
            'testimonis'=>(object)[
                'nama_lengkap'=>'',
                'jabatan'=>'',
                'testimoni'=>'',
                'foto'=>''
            ],
        ];
        return view('formtestimoni',$data);
    }
    function create(Request $req){
        Testimoni::create([
            'nama_lengkap'=> $req->nama_lengkap,
            'jabatan'=> $req->jabatan,
            'testimoni'=> $req->testimoni,
            'foto'=> $req -> file('foto')->store('foto'),
            
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('datatestimoni');
    }

    function hapus($item){
        Testimoni::where('id',$item)->delete();
        return redirect('datatestimoni');
    }

    function edit($item){
        $data['testimonis']=Testimoni::find($item);
        $data['action']= url('datatestimoni/update').'/'.$data['testimonis']->id;
        // $data['tombol']='update';
        return view('formtestimoni',$data);
    }

    function update(Request $req){
        Testimoni::where('id',$req->id)->update([
            'nama_lengkap'=> $req->nama_lengkap,
            'jabatan'=> $req->jabatan,
            'testimoni'=> $req->testimoni,
            'foto'=> $req -> file('foto')->store('foto'),
        ]);
        // Toastr::success('Anggota berhasil diedit', 'Berhasil');
        return redirect('datatestimoni');
    }
}
