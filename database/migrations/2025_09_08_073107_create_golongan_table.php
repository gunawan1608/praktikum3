<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('golongan', function (Blueprint $table) {
            $table->id();
            $table->string("Golongan_nama");
            $table->integer("Gaji_pokok");
            $table->integer("Tunjangan_keluarga");
            $table->integer("Tunjangan_transport");
            $table->integer("Tunjangan_makan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golongan');
    }
};
