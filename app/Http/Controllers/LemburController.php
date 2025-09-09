<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LemburController extends Controller
{
    public function index(){
        $lembur=DB::table('lembur')->get();
        return view('lembur',['lembur'=>$lembur]);
    }

    public function tambah() {
        return view('tambahlembur');
    }
    public function store(Request $request) {
        DB::table('lembur')->insert([
            'Pegawai_id' => $request->id_pegawai,
            'Bulan_lembur' => $request->bulan_lembur,
            'Jumlah_lembur' => $request->jlembur,
        ]);

        return redirect('/lembur');
    }

    public function edit($id){
        $lembur = DB::table('lembur')->where('id', $id)->get();
        return view('editlembur',['lembur'=>$lembur]);
    }
    public function update(Request $request){
        DB::table('lembur')->where('id', $request->id)->update([
            'Pegawai_id' => $request->id_pegawai,
            'Jumlah_lembur' => $request->jlembur,
            'Bulan_lembur' => $request->bulan_lembur,
        ]);

        return redirect('/lembur');
    }
}
