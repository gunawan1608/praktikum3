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
}
