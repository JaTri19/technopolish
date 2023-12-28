<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PerizinanPenyelenggaraan;
use App\Models\PerizinanPendirian;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request) {

        $verified = User::where($request->id)->get();
        $user = Auth::user();


        return view('pemohon.dashboard',compact('verified','user'));
    }


    public function index_admin() {
        $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('admin.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_dinas() {
       $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('dinas.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_walikota() {
      $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('walikota.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_kepalaDinas() {
        $user = Auth::user();

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $dokumenTidakValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $dokumenTidakValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $totalDokumenTidakValid = $dokumenTidakValidPendirian + $dokumenTidakValidPenyelenggaraan;

        $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('kepalaDinas.dashboard', [
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenValid' => $totalDokumenValid,
            'totalDokumenTidakValid' => $totalDokumenTidakValid,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user,
        ]);
    }

    public function index_penyelia() {
        $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('penyelia.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_surveyor() {
        $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('surveyor.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_auditor() {
       $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Ditolak'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;

         $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('auditor.dashboard', [
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user
        ]);
    }

    public function index_operator() {
        $user = Auth::user();

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $dokumenTidakValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $dokumenTidakValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $totalDokumenTidakValid = $dokumenTidakValidPendirian + $dokumenTidakValidPenyelenggaraan;

        $permohonanSelesaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();
        $permohonanSelesaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->count();

        $totalPermohonanSelesai = $permohonanSelesaiPendirian + $permohonanSelesaiPenyelenggaraan;

        $semuaPendirian = PerizinanPendirian::all()->count();
        $semuaPenyelenggaraan = PerizinanPenyelenggaraan::all()->count();

        return view('operator.dashboard', [
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenValid' => $totalDokumenValid,
            'totalDokumenTidakValid' => $totalDokumenTidakValid,
            'totalPermohonanSelesai' => $totalPermohonanSelesai,
            'semuaPendirian' => $semuaPendirian,
            'semuaPenyelenggaraan' => $semuaPenyelenggaraan,
            'user' => $user,
        ]);
    }

    public function index_pemohon() {
        $user = Auth::user();


        return view('pemohon.dashboard', compact('user'));
    }

    public function my_account($id) {
        $account = User::find($id)->get();

        return view('my_account.dashboard');
    }


}
