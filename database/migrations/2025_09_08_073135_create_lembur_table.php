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
        Schema::create('lembur', function (Blueprint $table) {
            $table->id();
            $table->integer("Pegawai_id");
            $table->string("Bulan_lembur");
            $table->integer("Jumlah_lembur");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembur');
    }
};
