<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function data_pemohon()
    {
        $user = Auth::user();
        return view('pemohon.account.index',compact('user'));

    }

    public function edit_data_pemohon($id)
    {
        $user = Auth::user();

        return view('pemohon.account.edit', compact('user'));
    }


    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'nik' => 'required'
        ]);

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->pekerjaan = $request->pekerjaan;
        $user->telepon = $request->telepon;
        $user->nik = $request->nik;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->domisili = $request->domisili;
        $user->kode_pos = $request->kode_pos;
        $user->kota = $request->kota;
        $user->kecamatan = $request->kecamatan;
        $user->kelurahan = $request->kelurahan;




        $user->update($request->all());

        return back()->with('success','data berhasil diupdate');
    }


}
