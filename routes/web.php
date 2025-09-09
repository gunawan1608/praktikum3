<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\LemburController;

Route::get('/', function () {
    return view('index');
});

Route::get('pegawai',[PegawaiController::class, 'index']);
Route::get('golongan',[GolonganController::class, 'index']);
Route::get('gaji',[GajiController::class, 'index']);
Route::get('lembur',[LemburController::class, 'index']);
