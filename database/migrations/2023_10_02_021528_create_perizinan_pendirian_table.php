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
        Schema::create('perizinan_pendirian', function (Blueprint $table) {
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
            // PerizinanpPendirianTK
            $table->string('surat_permohonan')->nullable();
            $table->string('ktp')->nullable();
            $table->string('suket_domisili')->nullable();
            $table->string('pengurus')->nullable();
            $table->string('suket_mendirikan')->nullable();
            $table->string('suket_tanah')->nullable();
            $table->string('suket_pbh')->nullable();
            $table->string('suket_perubahanPBH')->nullable();
            $table->string('suket_rip')->nullable();
            $table->string('suket_psp')->nullable();
            $table->string('sukas_perizinan')->nullable();
            $table->string('sk_izinOperasional')->nullable();
            $table->string('sertif_bpjs_sehat')->nullable();
            $table->string('sertif_bpjs_kerja')->nullable();
            // End Pendirian TK

            // PendirianSD/SMP/SMA

            // End Pendirian SD
            $table->string('denah')->nullable();
            $table->string('gedung')->nullable();
            $table->string('akta_pendirian')->nullable();
            $table->string('surper_kades')->nullable();
            $table->string('surper_camat')->nullable();
            $table->string('surat_tanah')->nullable();
            $table->string('patuh_aturan')->nullable();
            $table->string('daftar_siswa')->nullable();
            $table->string('daftar_TKK')->nullable();
            $table->string('daftar_TKnK')->nullable();
            $table->string('kurikulum')->nullable();
            $table->string('sarpras')->nullable();
            $table->string('sk_yayasan')->nullable();
            $table->string('studi_layak')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan_pendirian');
    }
};
