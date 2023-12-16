<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Database;

class KontakController extends Controller
{
    //
    function show (){

        $data ['kontaks'] = Kontak::all();
        return view ('datakontak',$data);
    }
   
    function add(){
        $data=[
            'action'=>url('datakontak/create'),
            'tombol'=>'simpan',
            'kontaks'=>(object)[
                'nama_lengkap'=>'',
                'email'=>'',
                'no_tlp'=>'',
                'pesan'=>'',
            ],
        ];
        return view('landingpage',$data);
    }
    function create(Request $req){
        Kontak::create([
                'nama_lengkap'=> $req->nama_lengkap,
                'email'=> $req->email,
                'no_tlp'=> $req->no_tlp,
                'pesan'=> $req->pesan,
        ]);
        // Toastr::success('Anggota berhasil ditambahkan', 'Berhasil');
        return redirect('/datakontak');
    }

    function hapus($item){
        Kontak::where('id',$item)->delete();
        return redirect('datakontak');
    }
}
