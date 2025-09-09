<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai=DB::table('pegawai')->get();
        return view('pegawai',['pegawai'=>$pegawai]);
    }

    public function tambah() {
        return view('tambahpegawai');
    }
    public function store(Request $request) {
        DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }
}
