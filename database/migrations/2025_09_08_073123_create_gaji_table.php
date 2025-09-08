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
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->integer("Pegawai_id");
            $table->integer("Jumlah_gaji");
            $table->integer("Jumlah_lembur");
            $table->integer("Potongan");
            $table->integer("Gaji_diterima");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaji');
    }
};
