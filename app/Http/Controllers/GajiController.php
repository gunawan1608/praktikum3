<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GajiController extends Controller
{
    public function index(){
        $gaji=DB::table('gaji')->get();
        return view('gaji',['gaji'=>$gaji]);
    }

    public function tambah() {
        return view('tambahgaji');
    }
    public function store(Request $request) {
        DB::table('gaji')->insert([
            'Pegawai_id' => $request->id_pegawai,
            'Jumlah_gaji' => $request->gaji,
            'Jumlah_lembur' => $request->jlembur,
            'Potongan' => $request->potongan,
            'Gaji_diterima' => $request->gaji_diterima
        ]);

        return redirect('/gaji');
    }

    public function edit($id){
        $gaji = DB::table('gaji')->where('id', $id)->get();
        return view('editgaji',['gaji'=>$gaji]);
    }
    public function update(Request $request){
        DB::table('gaji')->where('id', $request->id)->update([
            'Pegawai_id' => $request->id_pegawai,
            'Jumlah_gaji' => $request->gaji,
            'Jumlah_lembur' => $request->jlembur,
            'Potongan' => $request->potongan,
            'Gaji_diterima' => $request->gaji_diterima
        ]);

        return redirect('/gaji');
    }
}
