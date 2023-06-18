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
        Schema::table('pekerjas', function (Blueprint $table) {
            $table->date('tanggal_lahir')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('gaji')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pekerjas', function (Blueprint $table) {
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('lokasi');
            $table->dropColumn('deskripsi');
            $table->dropColumn('gaji');
        });
    }
};
