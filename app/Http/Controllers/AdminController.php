<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;


class AdminController extends Controller
{
    public function informasiAkun(){
        $user = Auth::user();
        $allAccount = User::all();

        return view('admin.informasiAkun.index',compact('allAccount','user'));
    }

  // Arsip dan History
    public function arsip_pendirian(){
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai',

        ])->get();

        return view('admin.arsip.pendirian.index',compact('user','permohonans'));

    }

    public function arsip_penyelenggaraan(){
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai',
        ])->get();

        return view('admin.arsip.penyelenggaraan.index',compact('user','permohonans'));

    }

    public function persyaratan_pendirian(){
        $user = Auth::user();

        return view('admin.persyaratan.pendirian',compact('user'));
    }
    public function persyaratan_penyelenggaraan(){
        $user = Auth::user();

        return view('admin.persyaratan.penyelenggaraan',compact('user'));
    }





    public function index_pendirian(){
        $user = Auth::user();

        return view('admin.tracking.perizinanPendirian.index', compact('user'));
    }

    public function index_penyelenggaraan(){
        $user = Auth::user();

        return view('admin.tracking.perizinanPenyelenggaraan.index', compact('user'));
    }


    // Monitoring Pendirian
    public function checking_berkas_operator_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('admin.tracking.perizinanPendirian.1_checkingBerkasOperator.index',compact('permohonans','user'));
    }

    public function dokumen_valid_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('admin.tracking.perizinanPendirian.2_dokumenValid.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_valid_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('admin.tracking.perizinanPendirian.3_dokumenTidakValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('admin.tracking.perizinanPendirian.4_sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('admin.tracking.perizinanPendirian.5_telahDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_verifikator_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('admin.tracking.perizinanPendirian.6_checkingBerkasVerifikator.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('admin.tracking.perizinanPendirian.7_dokumenSesuai.index',compact('permohonans','user'));
    }

    public function tolak_dokumen_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->get();

        return view('admin.tracking.perizinanPendirian.8_tolakDokumen.index',compact('permohonans','user'));
    }

    public function ttd_kepala_dinas_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('admin.tracking.perizinanPendirian.9_ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('admin.tracking.perizinanPendirian.10_permohonanSelesai.index',compact('permohonans','user'));
    }

    // End Monitoring Pendirian



    // Monitoring Penyelenggaraan
    public function checking_berkas_operator_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.1_checkingBerkasOperator.index',compact('permohonans','user'));
    }

    public function dokumen_valid_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.2_dokumenValid.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_valid_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.3_dokumenTidakValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.4_sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.5_telahDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_verifikator_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.6_checkingBerkasVerifikator.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.7_dokumenSesuai.index',compact('permohonans','user'));
    }

    public function tolak_dokumen_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.8_tolakDokumen.index',compact('permohonans','user'));
    }

    public function ttd_kepala_dinas_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.9_ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('admin.tracking.perizinanPenyelenggaraan.10_permohonanSelesai.index',compact('permohonans','user'));
    }

    // End Monitioring Penyelenggaraan






    // Create PerizinanPendirian
    public function create_tk()
    {

        return view('admin.perizinanPendirian.createTk');
    }

    public function create_sd()
    {

        return view('admin.perizinanPendirian.createSd');
    }

    // Perizinan Penyelenggaraan
    public function create_sd_smp()
    {

        return view('admin.perizinanPenyelenggaraan.sd-smp.create');
    }

    public function create_lpnp()
    {
        return view('admin.perizinanPenyelenggaraan.lpnp.create');
    }

    public function create_lpp()
    {
        return view('admin.perizinanPenyelenggaraan.lpp.create');
    }

    public function create_lpts()
    {
        return view('admin.perizinanPenyelenggaraan.lpts.create');
    }

    public function create_pklpk()
    {
                return view('admin.perizinanPenyelenggaraan.pklpk.create');
    }

    public function create_ppo()
    {
                return view('admin.perizinanPenyelenggaraan.ppo.create');

    }

    public function create_ptn_univ()
    {
                return view('admin.perizinanPenyelenggaraan.ptn-univ.create');
    }



}

