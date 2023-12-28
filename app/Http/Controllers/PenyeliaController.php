<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PenyeliaController extends Controller
{
    public function index_pendirian(){
        $user = Auth::user();
        $permohonans = PerizinanPendirian::paginate(10);

        return view('penyelia.tracking.perizinanPendirian.index', compact('user','permohonans'));
    }
    public function index_penyelenggaraan(){
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::paginate(10);

        return view('penyelia.tracking.perizinanPenyelenggaraan.index', compact('user','permohonans'));
    }


    // Pendirian
    public function dokumen_valid_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.sedangDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.checkingBerkas.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenSesuai.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_sesuai_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenTidakSesuai.index',compact('permohonans','user'));
    }

    // Penyelenggaraan
    public function dokumen_valid_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenValid.index',compact('permohonans','user'));
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.sedangDisurvey.index',compact('permohonans','user'));
    }

    public function checking_berkas_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.index',compact('permohonans','user'));
    }

    public function dokumen_sesuai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenSesuai.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_sesuai_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenTidakSesuai.index',compact('permohonans','user'));
    }


    public function edit_dokumen_valid_pendirian($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('penyelia.tracking.perizinanPendirian.dokumenValid.edit',compact('permohonans','user'));
    }

    public function edit_checking_berkas_pendirian($id)
    {

        $permohonans = PerizinanPendirian::where('id',$id)->first();

        if($permohonans->tipe_dokumen == 'TK')
        {
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPendirian.checkingBerkas.editTk',compact('permohonans','user'));
        }
        else{
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPendirian.checkingBerkas.editSd',compact('permohonans','user'));
        }
    }

    public function edit_dokumen_valid_penyelenggaraan($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenValid.edit',compact('permohonans','user'));
    }

    public function edit_checking_berkas_penyelenggaraan($id)
    {
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        if($permohonans->tipe_dokumen == 'SD/SMP/SMA')
        {
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editSd',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Universitas/PT'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editUniv',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Lembaga Pelatihan Profesional'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editLPP',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Lembaga Pendidikan Non Pemerintah'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editLPNP',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Pusat Pembelajaran Online'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editPPO',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Lembaga Pendidikan Tinggi Swasta'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editLPTS',compact('permohonans','user'));
        }
        elseif($permohonans->tipe_dokumen == 'Pendidikan Khusus dan Lembaga Pelatihan Keterampilan'){
            $user = Auth::user();
            return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.editPKLPK',compact('permohonans','user'));
        }
    }


      public function createPenyelia(Request $request){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->telepon = $request->telepon;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);

        $newUser->assignRole('penyelia');

        $newUser->save();



        return redirect()->route('admin')->with('sukses_dikirim','Account Operator Berhasil dibuat');
    }

}

