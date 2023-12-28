<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PerizinanPendirianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nama' => ['required','string'],
            'email' => ['required','string'],
            'contact' => ['required'],
            'tipe_dokumen' => ['required'],
            'status_dokumen' => ['required'],
            'longtitude' => ['required'],
            'latitude' => ['required'],
            'lokasi' => ['required'],

            // Validate File Untuk Pendirian TK
            'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'ktp' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_domisili' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'pengurus' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_mendirikan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_tanah' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_pbh' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_perubahanPBH' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_rip' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_psp' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sukas_perizinan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sk_izinOperasional' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_sehat' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_kerja' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
             //End Validate File Untuk Pendirian TK

        ];



        return $rules;
    }
}
