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
        Schema::create('perizinan_penyelenggaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('telepon');
            $table->string('tipe_dokumen');
            $table->string('status_dokumen');
            $table->string('longtitude');
            $table->string('latitude');
            $table->string('lokasi')->nullable();
            $table->string('dokumen_survey')->nullable();
            $table->string('surat_terbit')->nullable();
            // file
            $table->string('doc_pendirian')->nullable();
            $table->string('identitas_pemilik')->nullable();
            $table->string('identitas_pengajar')->nullable();
            $table->string('kualifikasi_pengajar')->nullable();
            $table->string('kurikulum')->nullable();
            $table->string('doc_keuangan')->nullable();
            $table->string('surat_otorisasi')->nullable();
            $table->string('program_akademik')->nullable();
            $table->string('sarpras')->nullable();
            // end file



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan_penyelenggaraan');
    }


};
