<!DOCTYPE html>
<html>

<head>
    <title>Surat Izin Terbit</title>



</head>

<style>
    table tr td {
        font-size: 13px;
    }

    tr .text {
        text-align: justify;
    }

    tr .yth {
        text-align: left;

    }

    tr .dikeluarkan {
        text-align: left;
    }

    .data-diri {
        width: 900px;
    }

    .ttd-kepalaDinas {
        text-align: center;
    }

    .ttd-walikota {
        text-align: center;
    }

    .center font {
        text-align: center;
    }

    td .center font {
        text-align: center;
    }

    td font {
        text-align: center;
    }

    .row .items-1 {
        text-align: center;
        justify-content: center;
    }

    .row .items-2 {
        text-align: center;
        justify-content: center;
    }

    .row .items-3 {
        text-align: center;
        justify-content: center;
    }
</style>

<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="items-1">
                    <font size="2"><b>LAMPIRAN</b></h4>
                </div>
                <div class="items-2">
                    <font size="2"><b>PENGUMUMAN BERSAMA</b></font>
                </div>
                <div class="items-3">
                    <font size="2"><b>DINAS PERIZINAN KOTA SURABAYA</b></font>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="items-1">

                    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(url('/images/ttd/garuda.jpg'))) }}"

                        width="120" height="100">

                    <br>
                </div>
                <div class="items-2">
                    <font size="3"><b>PEMERINTAH REPUBLIK INDONESIA</b></font>
                </div><br>
                <div class="items-3">
                    <font size="5"><b>IZIN PENDIRIAN</b></font><br>
                </div>
            </div>
        </div>





        <br>
        <table>
            <tr>
                <td class="text" width="500">Lembaga Pemerintahan Peraturan Pemerintah (PP) No.66/2010 tentang
                    Perubahan atas PP
                    No.17/2010 tentang Pengelolaan dan Penyelenggaraan Pendidikan. Pasal 182 ayat 1 dijelaskan bahwa
                    pembangunan sekolah swasta wajib mendapatkan izin pemerintah, maka dari itu surat ini dibuat untuk
                    memberikan <b>Izin Pendirian Pendidikan {{ $perizinan->tipe_dokumen }}</b>, yang tertera pemohon
                    dibawah ini : </td>
            </tr>
        </table>
        <br>

        <div class="data-diri">
            <table>
                <tr>
                    <td>Nama Pemohon</td>
                    <td width="500">: {{ $perizinan->nama }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td width="500">: {{ $perizinan->email }}</td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td width="500">: {{ $perizinan->telepon }}</td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td width="500">: {{ $perizinan->lokasi }}</td>
                </tr>
                <tr>
                    <td>Perizinan </td>
                    <td width="500">: Pendirian {{ $perizinan->tipe_dokumen }}</td>
                </tr>

                <tr>
                    <td>Luas Lahan </td>
                    <td width="500">: {{ $perizinan->luas_lahan }} Meter</td>
                </tr>
                <tr>
                    <td>Luas Bangunan </td>
                    <td width="500">: {{ $perizinan->luas_bangunan }} Meter</td>
                </tr>
            </table>
        </div>
        <br>

        <table>
            <tr>
                <td class="text" width="625">Surat Izin ini berlaku selama pemohon melakukan kegiatan operasional
                    sesuai ketentuan
                    perundangan-undangan yang telah berlaku</td>
            </tr>
        </table>
        <br>

        <table>
            <tr>
                <td class="dikeluarkan" width="625">Dikeluarkan Tanggal : {{ $perizinan->updated_at }}</td>
            </tr>
        </table>
        <br>

        <table>
            <tr>
                <td class="ttd-kepalaDinas" width="300">Kepala Dinas Perizinan kota Surabaya
                    <br>

                    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(url('/images/ttd/ttd-kepala-dinas.jpg'))) }}"

                        width="90" height="90"><br>
                    <b>Prof Dr Samsul Huda,. SPD,MP,D</b>
                </td>


            </tr>

        </table>

    </center>

</body>

</html>
