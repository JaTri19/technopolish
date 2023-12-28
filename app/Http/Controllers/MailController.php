<?php

namespace App\Http\Controllers;

use App\Models\PerizinanPendirian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Dompdf\Dompdf;

class MailController extends Controller
{
    public function send_attach_gmail($id, Request $request)
    {
        $data = array('name' => 'jarwo');
            $permohonans = PerizinanPendirian::where(['id' =>$id])->get();

            $dompdf = new Dompdf();
            $view = view('walikota.perizinanPendirian.tracking.izinTerbit.izinTerbitPdf',compact('permohonans'));
            $dompdf->loadHTML($view);
            $dompdf->render();

        $emailPemohon = $permohonans->email;

        Mail::send(['file' => 'mail'], $data, function ($message)use($dompdf,$emailPemohon) {
            $message->to($emailPemohon)->subject('Surat Izin Terbit');

            $message->attachData($dompdf->output(),'surat_izin_terbit.pdf');

            $message->from('eightech@company.com','EighTech');
        });

        return back()->with('success','Data Berhasil Dikirim ke Email');
    }
}
