<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class PerusahaanController extends Controller
{
    //
    function show (){
        $data ['perusahaans'] = Perusahaan::all();
        return view ('dataperusahaan',$data);
    }
    function view (){
        $data ['perusahaans'] = Perusahaan::all();
        return view ('formperusahaan',$data);
    }
    // function tampil(){
    //     $data['perusahaan'] = Perusahaan::all();
    //     return view ('landingpage',$data);
    // }
    function add(){
        $data=[
            'action'=>url('/dataperusahaan/create'),
            'tombol'=>'simpan',
            'perusahaans'=>(object)[
                'nama_perusahaan'=>'',
                'foto'=>'',
                'deskripsi'=>''
            ],
        ];
        return view('formperusahaan',$data);
    }
    function create(Request $req){
        Perusahaan::create([
            'nama_perusahaan'=> $req -> nama_perusahaan,
            'foto'=> $req -> file('foto')->store('foto'),
            'deskripsi'=>$req->deskripsi,
                
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('dataperusahaan');
    }

    function hapus($item){
        Perusahaan::where('id',$item)->delete();
        return redirect('dataperusahaan');
    }

    function edit($item){
        $data['perusahaans']=Perusahaan::find($item);
        $data['action']= url('dataperusahaan/update').'/'.$data['perusahaans']->id;
        // $data['tombol']='update';
        return view('formperusahaan',$data);
    }

    function update(Request $req){
        Perusahaan::where('id',$req->id)->update([
            'nama_perusahaan'=> $req -> nama_perusahaan,
            'foto'=> $req -> file('foto')->store('foto'),
            'deskripsi'=> $req -> deskripsi,
        ]);
        // Toastr::success('Anggota berhasil diedit', 'Berhasil');
        return redirect('dataperusahaan');
    }
}
