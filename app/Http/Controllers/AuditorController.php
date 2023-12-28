<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuditorController extends Controller
{
    public function index_pendirian(){
        $user = Auth::user();

        return view('auditor.tracking.perizinanPendirian.index', compact('user'));
    }

    public function index_penyelenggaraan(){
        $user = Auth::user();

        return view('auditor.tracking.PerizinanPenyelenggaraan.index', compact('user'));
    }

    // Monitoring Pendirian
    public function checking_berkas_operator_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.1_checkingBerkasOperator.index',compact('permohonans','user'));
    }

    public function dokumen_valid_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.2_dokumenValid.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_valid_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.3_dokumenTidakValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.4_sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.5_telahDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_verifikator_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.6_checkingBerkasVerifikator.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.7_dokumenSesuai.index',compact('permohonans','user'));
    }

    public function tolak_dokumen_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.8_tolakDokumen.index',compact('permohonans','user'));
    }

    public function ttd_kepala_dinas_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.9_ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('auditor.tracking.perizinanPendirian.10_permohonanSelesai.index',compact('permohonans','user'));
    }

    // End Monitoring Pendirian

    // Monitoring Penyelenggaraan
    public function checking_berkas_operator_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.1_checkingBerkasOperator.index',compact('permohonans','user'));
    }

    public function dokumen_valid_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.2_dokumenValid.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_valid_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.3_dokumenTidakValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.4_sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.5_telahDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_verifikator_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.6_checkingBerkasVerifikator.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.7_dokumenSesuai.index',compact('permohonans','user'));
    }

    public function tolak_dokumen_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.8_tolakDokumen.index',compact('permohonans','user'));
    }

    public function ttd_kepala_dinas_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.9_ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('auditor.tracking.PerizinanPenyelenggaraan.10_permohonanSelesai.index',compact('permohonans','user'));
    }

    // End Monitioring Penyelenggaraan


     public function createAuditor(Request $request){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->telepon = $request->telepon;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);

        $newUser->assignRole('auditor');

        $newUser->save();



        return redirect()->route('admin')->with('sukses_dikirim','Account Operator Berhasil dibuat');
    }

}
