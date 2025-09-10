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

        return redirect('/golongan')->with('success', 'Data golongan berhasil ditambahkan!');
    }

    public function edit($id){
        $golongan = DB::table('golongan')->where('id', $id)->get();
        return view('editgolongan',['golongan'=>$golongan]);
    }
    public function update(Request $request){
        DB::table('golongan')->where('id', $request->id)->update([
            'Golongan_nama' => $request->namagol,
            'Gaji_pokok' => $request->gaji,
            'Tunjangan_keluarga' => $request->tkeluarga,
            'Tunjangan_transport' => $request->ttransport,
            'Tunjangan_makan' => $request->tmakan
        ]);

        return redirect('/golongan')->with('success', 'Data golongan berhasil diperbarui!');
    }

    public function hapus($id){
        DB::table('golongan')->where('id', $id)->delete();
        return redirect('/golongan')->with('success', 'Data golongan berhasil dihapus!');
    }
}
