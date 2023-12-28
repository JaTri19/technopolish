<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanPendirian extends Model
{
    use HasFactory;

    protected $table = "perizinan_pendirian";
    protected $guarded = [];
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'tipe_dokumen',
        'status_dokumen',
        'longtitude',
        'latitude',
        'lokasi',
        'dokumen_survey',
        'surat_permohonan',
        'ktp',
        'suket_domisili',
        'pengurus',
        'suket_mendirikan',
        'suket_tanah',
        'suket_pbh',
        'suket_perubahanPBH',
        'suket_rip',
        'suket_psp',
        'sukas_perizinan',
        'sk_izinOperasional',
        'sertif_bpjs_sehat',
        'sertif_bpjs_kerja',

        'denah',
        'gedung',
        'akta_pendirian',
        'surper_kades',
        'surper_camat',
        'surat_tanah',
        'patuh_aturan',
        'daftar_siswa',
        'daftar_TKK',
        'daftar_TKnK',
        'kurikulum',
        'sarpras',
        'sk_yayasan',
        'studi_layak',
        'luas_lahan',
        'luas_bangunan',
        'jumlah_sekolah',
        'geotag'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
