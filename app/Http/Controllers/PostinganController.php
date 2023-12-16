<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class PostinganController extends Controller
{
    //
    function show (){
        $data ['postingans'] = Postingan::all();
        return view ('datapostingan',$data);
    }
    function view (){
        $data ['postingans'] = Postingan::all();
        return view ('formpostingan',$data);
    }
    function tampil(){
        $data['postingans'] = Postingan::all();
        return view ('landingpage',$data);
    }
    function add(){
        $data=[
            'action'=>url('/datapostingan/create'),
            'tombol'=>'simpan',
            'postingans'=>(object)[
                'nama_perusahaan'=>'',
                'bidang_usaha'=>'',
                'alamat'=>'',
                'deskripsi'=>'',
                'email'=>'',
                'kontak'=>'',
                'status'=>'',
                'foto'=>''
            ],
        ];
        return view('formpostingan',$data);
    }
    function create(Request $req){
        Postingan::create([
                'nama_perusahaan'=> $req->nama_perusahaan,
                'bidang_usaha'=> $req->bidang_usaha,
                'alamat'=> $req->alamat,
                'deskripsi'=> $req->deskripsi,
                'email'=> $req->email,
                'kontak'=> $req->kontak,
                'status'=> $req->status,
                'foto'=> $req -> file('foto')->store('foto'),
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('datapostingan');
    }

    function hapus($item){
        Postingan::where('id',$item)->delete();
        return redirect('datapostingan');
    }

    function edit($item){
        $data['postingans']=Postingan::find($item);
        $data['action']= url('datapostingan/update').'/'.$data['postingans']->id;
        // $data['tombol']='update';
        return view('formpostingan',$data);
    }

    function update(Request $req){
        Postingan::where('id',$req->id)->update([
            'nama_perusahaan'=> $req->nama_perusahaan,
            'bidang_usaha'=> $req->bidang_usaha,
            'alamat'=> $req->alamat,
            'deskripsi'=> $req->deskripsi,
            'email'=> $req->email,
            'kontak'=> $req->kontak,
            'status'=> $req->status,
            'foto'=> $req -> file('foto')->store('foto'),
        ]);
        // Toastr::success('Anggota berhasil diedit', 'Berhasil');
        return redirect('datapostingan');
    }
}
