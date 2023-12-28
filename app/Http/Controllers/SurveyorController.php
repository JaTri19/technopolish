<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SurveyorController extends Controller
{

    public function index_pendirian(){
        $user = Auth::user();
        $permohonans = PerizinanPendirian::paginate(10);

        return view('surveyor.tracking.perizinanPendirian.index', compact('user','permohonans'));
    }

    public function index_penyelenggaraan(){
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::paginate(10);

        return view('surveyor.tracking.PerizinanPenyelenggaraan.index', compact('user','permohonans'));
    }

    public function sedang_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPendirian.sedangDisurvey.index',compact('permohonans','user'));;
    }

    public function telah_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPendirian.telahDisurvey.index',compact('permohonans','user'));;
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.tracking.PerizinanPenyelenggaraan.sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.tracking.PerizinanPenyelenggaraan.telahDisurvey.index',compact('permohonans','user'));
    }

    public function edit_sedang_disurvey_pendirian($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('surveyor.tracking.perizinanPendirian.sedangDisurvey.edit',compact('permohonans','user'));
    }

    public function edit_sedang_disurvey_penyelenggaraan($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('surveyor.tracking.PerizinanPenyelenggaraan.sedangDisurvey.edit',compact('permohonans','user'));
    }

    public function createSurveyor(Request $request){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->telepon = $request->telepon;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);

        $newUser->assignRole('surveyor');

        $newUser->save();



        return redirect()->route('admin')->with('sukses_dikirim','Account Operator Berhasil dibuat');
    }

}
