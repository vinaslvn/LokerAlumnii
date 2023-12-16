<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    //
    function show(){
        return view('dashboardalumni');
    }
    function tampil(){
        $data['alumnis']=Alumni::all();
        return view('dataalumni',$data);
    }
    function registeralumni(){
        return view('registeralumni');
    }


    function daftaralumni(Request $req){

        $validate = $this->validate($req,[
            'nis' => '',
            'nama_lengkap' => '',
            'email' => '',
            'password' => '',
            'tahun_lulus' => '',
            'foto' => ''
        ]);
        $validate['password'] = bcrypt($req->password);

        Alumni::create($validate);
        return redirect('/loginalumni');
    }

    // function hapus($item){
    //     Alumni::where('nis',$item)->delete();
    //     return redirect('dataalumni');
    // }
    // function logout(){
    //     Auth::logout();
    //     return redirect('/');
    // }
}



