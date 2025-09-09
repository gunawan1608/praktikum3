<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    public function index(){
        $golongan=DB::table('golongan')->get();
        return view('golongan',['golongan'=>$golongan]);
    }

    public function tambah() {
        return view('tambahgolongan');
    }
    public function store(Request $request) {
        DB::table('golongan')->insert([
            'Golongan_nama' => $request->namagol,
            'Gaji_pokok' => $request->gaji,
            'Tunjangan_keluarga' => $request->tkeluarga,
            'Tunjangan_transport' => $request->ttransport,
            'Tunjangan_makan' => $request->tmakan
        ]);

        return redirect('/golongan');
    }
}
