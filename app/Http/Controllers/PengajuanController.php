<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class PengajuanController extends Controller
{
    //
    function show (){
        $data ['pengajuans'] = Pengajuan::all();
        return view ('datapengajuan',$data);
    }
    function tampil(){
        $data['pengajuans'] = Pengajuan::all();
        return view ('landingpage',$data);
    }
   
    function add(){
        $data=[
            'action'=>url('/datapengajuan/create'),
            'tombol'=>'simpan',
            'pengajuans'=>(object)[
                'nama_lengkap'=>'',
                'tanggal_lahir'=>'',
                'alamat'=>'',
                'email'=>'',
                'kontak'=>'',
                'persyaratan'=>'',
                'tanggal_pengajuan'=>'',
                // 'jenis_kelamin'=>'',
            ],
        ];
        return view('formpengajuan',$data);
    }
    function create(Request $req){
        Pengajuan::create([
                'nama_lengkap'=> $req->nama_lengkap,
                'tanggal_lahir'=> $req->tanggal_lahir,
                'alamat'=> $req->alamat,
                'email'=> $req->email,
                'kontak'=> $req->kontak,
                'persyaratan'=> $req -> file('persyaratan')->store('persyaratan'),
                'tanggal_pengajuan'=> $req->tanggal_pengajuan,
                // 'jenis_kelamin'=> $req->jenis_kelamin,
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('datapengajuan');
    }

    function hapus($item){
        Pengajuan::where('id',$item)->delete();
        return redirect('datapengajuan');
    }

    function edit($item){
        $data['pengajuans']=Pengajuan::find($item);
        $data['action']= url('datapengajuan/update').'/'.$data['pengajuans']->id;
        // $data['tombol']='update';
        return view('formpengajuan',$data);
    }

    function update(Request $req){
        // $this->validate($req ,[
        //     'id' => 'required|numeric',
        //     'judul' => 'required|string|max:50',
        //     'foto' => 'mimes:jpg,png'
        // ]);
        Pengajuan::where('id',$req->id)->update([
                'nama_lengkap'=> $req->nama_lengkap,
                'tanggal_lahir'=> $req->tanggal_lahir,
                'alamat'=> $req->alamat,
                'email'=> $req->email,
                'kontak'=> $req->kontak,
                'persyaratan'=> $req -> file('persyaratan')->store('persyaratan'),
                'tanggal_pengajuan'=> $req->tanggal_pengajuan,
                // 'jenis_kelamin'=> $req->jenis_kelamin,
        ]);
        // Toastr::success('Anggota berhasil diedit', 'Berhasil');
        return redirect('datapengajuan');
    }
}
