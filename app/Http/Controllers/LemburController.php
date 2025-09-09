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
}
