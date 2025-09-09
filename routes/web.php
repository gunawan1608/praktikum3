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
Route::get('pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);
Route::get('golongan/tambah', [GolonganController::class, 'tambah']);
Route::post('golongan/store', [GolonganController::class, 'store']);
Route::get('gaji/tambah', [GajiController::class, 'tambah']);
Route::post('gaji/store', [GajiController::class, 'store']);
Route::get('lembur/tambah', [LemburController::class, 'tambah']);
Route::post('lembur/store', [LemburController::class, 'store']);