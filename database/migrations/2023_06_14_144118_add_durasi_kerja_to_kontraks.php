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
        Schema::table('kontraks', function (Blueprint $table) {
            $table->string('durasi_kerja')->nullable();
            $table->string('jam_kerja')->nullable();
            $table->string('catatan_khusus')->nullable();
            $table->integer('gaji')->nullable();
            $table->string('nama_pekerja')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kontraks', function (Blueprint $table) {
            $table->dropColumn('durasi_kerja');
            $table->dropColumn('jam_kerja');
            $table->dropColumn('catatan_khusus');
        });
    }
};
