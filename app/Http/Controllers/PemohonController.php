<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Perizinan;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PemohonController extends Controller
{


    public function persyaratan_pendirian(){
        $user = Auth::user();

        return view('pemohon.persyaratan.pendirian',compact('user'));
    }
    public function persyaratan_penyelenggaraan(){
        $user = Auth::user();

        return view('pemohon.persyaratan.penyelenggaraan',compact('user'));
    }


    // Index
    public function permohonan_pendirian(){
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.index', compact('user'));
    }

    public function berhasil_pendirian(){
        $user = Auth::user();


        $berhasil = PerizinanPendirian::latest()->limit(1)->get();

        return view('pemohon.permohonan.perizinanPendirian.berhasil', compact('user','berhasil'));
    }



    public function permohonan_penyelenggaraan(){
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPenyelenggaraan.index', compact('user'));
    }

     public function berhasil_penyelenggaraan(){
        $user = Auth::user();
        $berhasil = PerizinanPenyelenggaraan::latest()->limit(1)->get();

        return view('pemohon.permohonan.perizinanPenyelenggaraan.berhasil', compact('user','berhasil'));
    }





    // Create view for Perizinan Pendirian
    public function create_tk()
    {
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.tk.createTk', compact('user'));
    }

    public function create_sd()
    {
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.sd.createSd',compact('user'));
    }

    // End Create view for Perizinan Pendirian


    // Create View for Perizinan Penyelenggaraan
    public function create_sd_smp()
    {
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPenyelenggaraan.sd-smp.create',compact('user'));
    }

    public function create_ptn_univ()
    {
        $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.ptn-univ.create',compact('user'));
    }

    public function create_lpp()
    {
        $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.lpp.create',compact('user'));
    }

    public function create_lpnp()
    {
        $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.lpnp.create',compact('user'));
    }

    public function create_ppo()
    {
         $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.ppo.create',compact('user'));
    }

    public function create_lpts()
    {
         $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.lpts.create',compact('user'));
    }

    public function create_pklpk()
    {
         $user = Auth::user();
        return view('pemohon.permohonan.perizinanPenyelenggaraan.pklpk.create',compact('user'));
    }
    //  End Create view for Perizinan Penyelenggaraan



    // Show Tracking


    public function tracking()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::find(Auth::user());

        return view('pemohon.tracking.tracking',compact('permohonans','user'));
    }



    public function show($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('pemohon.tracking.show',[
            'permohonans' => $permohonans,
            'user' => $user,
        ]);
    }

    public function show_penyelenggaraan($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('pemohon.tracking.show_penyelenggaraan',[
            'user' => $user,
            'permohonans' => $permohonans,
        ]);
    }

    // Arsip dan History
    public function arsip_pendirian(){
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'user_id' => $user->id,
            'status_dokumen' => 'Permohonan Selesai',

        ])->get();

        return view('pemohon.arsip.pendirian.index',compact('user','permohonans'));

    }

    public function arsip_penyelenggaraan(){
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'user_id' => $user->id,
            'status_dokumen' => 'Permohonan Selesai',
        ])->get();

        return view('pemohon.arsip.penyelenggaraan.index',compact('user','permohonans'));

    }
    // End Arsip dan History


}
