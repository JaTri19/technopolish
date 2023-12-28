<?php

namespace App\Http\Controllers;

use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Storage;

class PerizinanPenyelenggaraanController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'tipe_dokumen' => 'required',
            'status_dokumen' => 'required',
            'longtitude' => 'required',
            'latitude' => 'required',

            // Validate File Untuk Pendirian TK
            'doc_pendirian' => 'mimes:pdf|max:300', //Maks = 300Kb
            'identitas_pemilik' => 'mimes:pdf|max:300', //Maks = 300Kb
            'identitas_pengajar' => 'mimes:pdf|max:300',
            'kualifikasi_pengajar' => 'mimes:pdf|max:300',
            'kurikulum' => 'mimes:pdf|max:300',
            'doc_keuangan' => 'mimes:pdf|max:300',
            'surat_otorisasi' => 'mimes:pdf|max:300',
            'program_akademik' => 'mimes:pdf|max:300',
            'sarpras' => 'mimes:pdf|max:300',
             //End Validate File Untuk Pendirian TK

        ]);

        // POST Form Umum
        $permohonan = New PerizinanPenyelenggaraan;
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;
        // END POST Form Umum
        $permohonan->user()->associate(Auth::user());

        // REQUEST FILE Perizinan Penyelenggaraan
        if($req->file())
        {


        if($req->hasFile('doc_pendirian')){
            $doc_pendirian = $req->file('doc_pendirian');
            $extension = $doc_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_pendirian->move(storage_path('app/public/perizinanPenyelenggaraan/doc_pendirian',date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->doc_pendirian = date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pemilik')){
            $identitas_pemilik = $req->file('identitas_pemilik');
            $extension = $identitas_pemilik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pemilik->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pemilik',date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pemilik = date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pengajar')){
            $identitas_pengajar = $req->file('identitas_pengajar');
            $extension = $identitas_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pengajar',date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pengajar = date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kualifikasi_pengajar')){
            $kualifikasi_pengajar = $req->file('kualifikasi_pengajar');
            $extension = $kualifikasi_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kualifikasi_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/kualifikasi_pengajar',date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->kualifikasi_pengajar = date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPenyelenggaraan/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('doc_keuangan')){
            $doc_keuangan = $req->file('doc_keuangan');
            $extension = $doc_keuangan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_keuangan->move(storage_path('app/public/perizinanPenyelenggaraan/doc_keuangan',date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName()),$fotoName);
            $permohonan->doc_keuangan = date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName();
        }

        if($req->hasFile('surat_otorisasi')){
            $surat_otorisasi = $req->file('surat_otorisasi');
            $extension = $surat_otorisasi->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_otorisasi->move(storage_path('app/public/perizinanPenyelenggaraan/surat_otorisasi',date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName()),$fotoName);
            $permohonan->surat_otorisasi = date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName();
        }

        if($req->hasFile('program_akademik')){
            $program_akademik = $req->file('program_akademik');
            $extension = $program_akademik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $program_akademik->move(storage_path('app/public/perizinanPenyelenggaraan/program_akademik',date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName()),$fotoName);
            $permohonan->program_akademik = date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPenyelenggaraan/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }
        }
        //  END REQUEST FILE PerizinanPenyelenggaraan


        $permohonan->save();

    return redirect()->route('permohonan.penyelenggaraan')->with('sukses_dikirim','Dokumen Anda Berhasil Dikirim');
    }
    public function update(Request $req)
    {

        // POST Form Umum
        $permohonan = PerizinanPenyelenggaraan::find($req->id);
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;
        // END POST Form Umum


        // REQUEST FILE Perizinan Penyelenggaraan
        if($req->file())
        {

        if($req->hasFile('dokumen_survey')){
            $dokumen_survey = $req->file('dokumen_survey');
            $extension = $dokumen_survey->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $dokumen_survey->move(storage_path('app/public/perizinanPenyelenggaraan/dokumen_survey',date('YmdHis').".".$req->file('dokumen_survey')->getClientOriginalName()),$fotoName);
            $permohonan->dokumen_survey = date('YmdHis').".".$req->file('dokumen_survey')->getClientOriginalName();
        }

        if($req->hasFile('doc_pendirian')){
            $doc_pendirian = $req->file('doc_pendirian');
            $extension = $doc_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_pendirian->move(storage_path('app/public/perizinanPenyelenggaraan/doc_pendirian',date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->doc_pendirian = date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pemilik')){
            $identitas_pemilik = $req->file('identitas_pemilik');
            $extension = $identitas_pemilik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pemilik->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pemilik',date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pemilik = date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pengajar')){
            $identitas_pengajar = $req->file('identitas_pengajar');
            $extension = $identitas_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pengajar',date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pengajar = date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kualifikasi_pengajar')){
            $kualifikasi_pengajar = $req->file('kualifikasi_pengajar');
            $extension = $kualifikasi_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kualifikasi_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/kualifikasi_pengajar',date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->kualifikasi_pengajar = date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPenyelenggaraan/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('doc_keuangan')){
            $doc_keuangan = $req->file('doc_keuangan');
            $extension = $doc_keuangan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_keuangan->move(storage_path('app/public/perizinanPenyelenggaraan/doc_keuangan',date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName()),$fotoName);
            $permohonan->doc_keuangan = date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName();
        }

        if($req->hasFile('surat_otorisasi')){
            $surat_otorisasi = $req->file('surat_otorisasi');
            $extension = $surat_otorisasi->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_otorisasi->move(storage_path('app/public/perizinanPenyelenggaraan/surat_otorisasi',date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName()),$fotoName);
            $permohonan->surat_otorisasi = date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName();
        }

        if($req->hasFile('program_akademik')){
            $program_akademik = $req->file('program_akademik');
            $extension = $program_akademik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $program_akademik->move(storage_path('app/public/perizinanPenyelenggaraan/program_akademik',date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName()),$fotoName);
            $permohonan->program_akademik = date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPenyelenggaraan/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }
        }
        //  END REQUEST FILE PerizinanPenyelenggaraan


        $permohonan->save();

        return back()->with('sukses_dikirim', 'data berhasil dikirim');
    }

    public function update_status_dokumen(Request $req)
    {
        $permohonan = PerizinanPenyelenggaraan::find($req->id);

        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->save();
        return back()->with('sukses_dikirim','Permohonan Berhasil');
    }

    public function update_hasil_survey(Request $req){
        $req->validate([
            'luas_lahan' => 'required',
            'luas_bangunan' => 'required',
            'jumlah_sekolah' => 'required',
            'geotag' => 'required|mimes:png,jpg|max:300',

        ]);
        $permohonan = PerizinanPenyelenggaraan::find($req->id);

        $permohonan->status_dokumen = $req->status_dokumen;

        $permohonan->luas_lahan = $req->luas_lahan;
        $permohonan->luas_bangunan = $req->luas_bangunan;
        $permohonan->jumlah_sekolah = $req->jumlah_sekolah;

        if($req->hasFile('geotag')){
            $geotag = $req->file('geotag');
            $extension = $geotag->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $geotag->move(storage_path('app/public/perizinanPenyelenggaraan/geotag',date('YmdHis').".".$req->file('geotag')->getClientOriginalName()),$fotoName);
            $permohonan->geotag = date('YmdHis').".".$req->file('geotag')->getClientOriginalName();
        }

        $permohonan->save();

        return redirect()->route('surveyor')->with('sukses_dikirim','Data Berhasil Diupdate');

    }

   public function permohonan_selesai(Request $req){
        $permohonan = PerizinanPenyelenggaraan::find($req->id);



        $imgGaruda = public_path('QRCode/garuda.jpg');
        $jadiGaruda = base64_decode($imgGaruda);

        $ttdKepalaDinas = public_path('QRCode/ttd-kepala-dinas.jpg');
        $jadiTTD = base64_decode($ttdKepalaDinas);
        $emailPemohon = $permohonan->email;


        // Convert HTML TO PDF
        $data = array('name' => 'jarwo');
            $dompdf = new Dompdf();
            $view = view('kepalaDinas.tracking.perizinanPendirian.izinTerbitPdf',compact('permohonan','jadiGaruda','jadiTTD'));
            $dompdf->loadHTML($view);
            $dompdf->render();
            $output = $dompdf->output();
        // Save To storage
            $filename = date('YmdHis').'.'."surat_izin_terbit.pdf";
            Storage::put('public/perizinanPendirian/surat_terbit/'.$filename,$output);

        // Save To Database
            $permohonan->surat_terbit = $filename.$req->surat_terbit;
            $permohonan->status_dokumen = $req->status_dokumen;
            $permohonan->save();

            // Kirim Email Beserta file Attach
        Mail::send(['file' => 'mail'], $data, function ($message)use($dompdf,$emailPemohon) {
            $message->to($emailPemohon)->subject('Surat Izin Terbit');

            $message->attachData($dompdf->output(),'surat_izin_terbit.pdf');

            $message->from('eightech@company.com','EighTech');
        });

        return redirect()->route('kepala-dinas')->with('sukses_dikirim','Permohonan Selesai, Surat Izin Terbit Telah DIkirim');
    }


}
