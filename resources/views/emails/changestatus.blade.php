<x-mail::message>
    # {{ $perizinan->status_dokumen }}

    Halo {{ $perizinan->nama }},

    Kami ingin memberitahukan bahwa status dokumen permohonan Anda telah berubah menjadi:
    **{{ $perizinan->status_dokumen }}**.

    Maka dari itu, mohon cek kembali dokumen yang anda ajukan

    <x-mail::button :url="''">
        Click
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
