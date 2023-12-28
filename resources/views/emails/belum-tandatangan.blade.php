<x-mail::message>
    # Dokumen Belum Ditandatangani

    Halo
    Kepala Dinas,

    Mohon perhatian bahwa dokumen dengan id **{{ $id }}** atas nama pemohon **{{ $name }}** belum
    ditandatangani. Harap melakukan pengecekan dan memberikan tanda tangan jika sesuai.

    Terima kasih.

    <x-mail::button :url="''">
        Click Untuk Tandatangan
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
