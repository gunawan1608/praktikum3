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
}
