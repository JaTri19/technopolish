<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class KepalaDinasController extends Controller
{
    public function index_pendirian(){
        $user = Auth::user();
        $permohonans = PerizinanPendirian::paginate(10);

        $lastSevenDays = PerizinanPendirian::where('updated_at','>=',now()->subDays(7))->get();

        // dd($lastSevenDays);


        return view('kepalaDinas.tracking.perizinanPendirian.index', compact('user','permohonans','lastSevenDays'));
    }
    public function index_penyelenggaraan(){
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::paginate(10);
        return view('kepalaDinas.tracking.PerizinanPenyelenggaraan.index', compact('user','permohonans'));
    }


    public function notifikasi_pendirian(){
        $user = Auth::user();
        $lastSevenDays = PerizinanPendirian::where('updated_at','<=',now()->subDays(7))->get();

        return view('kepalaDinas.notifikasi.pendirian',compact('user','lastSevenDays'));
    }
    public function notifikasi_penyelenggaraan(){
        $user = Auth::user();
        $lastSevenDays = PerizinanPenyelenggaraan::where('updated_at','<=',now()->subDays(7))->get();

        return view('kepalaDinas.notifikasi.penyelenggaraan',compact('user','lastSevenDays'));
    }

    public function ttd_kepalaDinas_pendirian()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('kepalaDinas.tracking.perizinanPendirian.ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_pendirian(){
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('kepalaDinas.tracking.perizinanPendirian.permohonanSelesai.index',compact('permohonans','user'));
    }

    public function ttd_kepalaDinas_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('kepalaDinas.tracking.PerizinanPenyelenggaraan.ttdKepalaDinas.index',compact('permohonans','user'));
    }

    public function permohonan_selesai_penyelenggaraan(){
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Permohonan Selesai'
        ])->get();

        return view('kepalaDinas.tracking.perizinanPenyelenggaraan.permohonanSelesai.index',compact('permohonans','user'));

    }



    public function edit_ttd_kepalaDinas_pendirian($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('kepalaDinas.tracking.perizinanPendirian.ttdKepalaDinas.edit',compact('permohonans','user'));
    }

    public function edit_ttd_kepalaDinas_penyelenggaraan($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('kepalaDinas.tracking.perizinanPenyelenggaraan.ttdKepalaDinas.edit',compact('permohonans','user'));
    }

     public function createKepalaDinas(Request $request){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->telepon = $request->telepon;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);

        $newUser->assignRole('kepala-dinas');

        $newUser->save();



        return redirect()->route('admin')->with('sukses_dikirim','Account Operator Berhasil dibuat');
    }


}
