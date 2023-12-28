<x-mail::message>
    # Selamat! Surat Izin Terbit Telah Diterbitkan

    Halo {{ $perizinan->nama }},

    Terlampir adalah Surat Izin Terbit yang telah Anda ajukan.

    Maka dari itu, mohon cek kembali dokumen yang anda ajukan

    Detail Surat Izin:

    Nomor Surat: {{ $perizinan->id }}
    Nama Pemohon : {{ $perizinan->nama }}

    Silakan hubungi kami jika Anda memiliki pertanyaan lebih lanjut.
    Terima kasih.

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
