<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/theme_klass/logo/1599786225/70.png">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href=" https://printjs-4de6.kxcdn.com/print.min.css"> -->
    <title>Data Pendataran Ulang {{ $users->DU_FULLNANE }} ~ {{ $users->id }}</title>

    <style>
        * {
            text-transform: uppercase;
        }

        .container-all {
            margin: 10px;
        }

        .con {
            margin-bottom: 10px;
        }

        h5 {
            margin-bottom: 2px;
        }

        h6 {
            margin: 0;
            padding: 0;
        }

        .thin {
            margin-top: 10px;
            margin-bottom: -2px;
        }

        .thick {
            margin: 2px;
            padding: 0;
        }

        .bawah {
            margin: 0;
            padding-top: 2px;
        }

        .smk {
            height: 100px;
            width: 100px;
            position: absolute;
            right: 2%;
            top: 1%;
        }

        .bogor {
            height: 110px;
            width: 90px;
            position: absolute;
            left: 2%;
            top: 0%;
        }

        @media print {
            page-break-after: auto;
        }

        .judul {
            padding-top: 40px;

        }

        table {
            border-spacing: 0;
            table-layout: fixed;
            width: 100%;
        }

        tr:first-of-type {
            background: white;
        }

        td:nth-child(odd) {
            font-weight: normal;
        }

        th,td {
            padding: 5px;
            width: 25%;
        }

        @media only screen and (max-width: 600px) {
            header {
                display: none;
            }

        }
    </style>
</head>

<body class="container">
    <header>
        <div class="con">
            <h5 style="text-align: center; font-weight: normal">PEMERINTAH DAERAH PROVINSI JAWA BARAT<br>
                DINAS PENDIDIKAN<br>
                <span style="font-weight: bold">CABANG DINAS PENDIDKAN WILAYAH II</span><br>
                <span style="font-weight: bold">SEKOLAH MENENGAH KEJURUAN (SMK) NEGERI 4 KOTA BOGOR</span><br>
            </h5>
            <h6 style="text-align: center">Jl. Raya Tajur Kp. Buntar Rt.02/08 Kel. Muarasari Kec. Bogor Selatan Telp.
                02517547381<br>
                E-mail : smkn4@smkn4bogor.sch.id Web: www.smkn4bogor.sch.id
            </h6>
            <h5 class="bawah" style="text-align: center; font-weight: normal">
                KOTA BOGOR - 16137
            </h5>
            <img class="smk"
                src="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/core_admin/logo/0x200/1599786225/LOGO%20SMKN%204.png">
            <img class="bogor" src="https://upload.wikimedia.org/wikipedia/commons/0/07/West_Java_coa.png">
            <hr class="thin" style="border-top: 1.2px solid black">
            <hr class="thick " style="border-top: 4.5px solid black">
        </div>
    </header>
    <center>
        <div class="text-center" class="mb-2">
            <h3>FORMULIR DAFTAR ULANG TAHAP 2<br>
                PENERIMAAN PESERTA DIDIK BARU(PPDB) <br>
                SMK NEGERI 4 KOTA BOGOR<br>
                Tahun Pelajaran 2021/2022<br>
            </h3>
            <h4 class="text-center">
                Raport Umum
                {{-- <small>
                    Jalur ABK, KETM, Kondisi Tertentu, Perpindahan Tugas Orang Tua/Guru, Prestasi Kejuaraan,
                    Prestasi Raport Unggulan dan Prioritas Jarak.
                </small> --}}
            </h4>
        </div>
    </center>
    <style>
        .card {
            border: black solid 1px;
        }
    </style>
    <div class="text-right">
        <div class="card" style="width: 410px;">
            Nama Lengkap : {{ $users->DU_FULLNANE }}
        </div>
        <div class="card" style="width: 410px;">
            NISN : {{ $users->NISN }}
        </div>
        <div class="card" style="width: 410px;">
            Jalur Pendaftaran : edit
            {{-- {{$users->JARDAF}} --}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3 class="col-sm-12 judul">A. DATA DIRI</h3>
            <table>
                <tr>
                    <td>NAMA LENGKAP</td>
                    <td>: <strong>
                            @if (!empty($users->DU_FULLNANE))
                                @if ($users->DU_FULLNANE == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_FULLNANE }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>: <strong>
                            @if (!empty($users->DU_GENDER))
                                @if ($users->DU_GENDER == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_GENDER }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NIK/NO INDUK KELUARGA</td>
                    <td>: <strong>
                            @if (!empty($users->DK_NIK))
                                @if ($users->DK_NIK == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DK_NIK }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO KARTU KELUARGA</td>
                    <td>: <strong>
                            @if (!empty($users->DK_NO_KK))
                                @if ($users->DK_NO_KK == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DK_NO_KK }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TEMPAT LAHIR</td>
                    <td>: <strong>
                            @if (!empty($users->DU_TEMPAT_LAHIR))
                                @if ($users->DU_TEMPAT_LAHIR == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_TEMPAT_LAHIR }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td>: <strong>
                            @if (!empty($users->DU_AGAMA))
                                @if ($users->DU_AGAMA == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_AGAMA }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KEWARGANEGARAAN</td>
                    <td>: <strong>
                            @if (!empty($users->DU_KEWARGANEGARAAN))
                                @if ($users->DU_KEWARGANEGARAAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_KEWARGANEGARAAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if (!empty($users->Berkebutuhan_khusus))
                                @if ($users->Berkebutuhan_khusus == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->Berkebutuhan_khusus }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. REGISTRASI AKTA KELAHIRAN</td>
                    <td>: <strong>
                            @if (!empty($users->DK_NO_AKTA_KELAHIRAN))
                                @if ($users->DK_NO_AKTA_KELAHIRAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DK_NO_AKTA_KELAHIRAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>ANAK KE</td>
                    <td>: <strong>
                            @if (!empty($users->DU_ANAK_KE))
                                @if ($users->DU_ANAK_KE == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DU_ANAK_KE }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>

        </div>

        <!-- <hr> -->
        <div class="col-sm-6">
            <h3 class="col-sm-12 judul">B. ALAMAT</h3>
            <!-- <br> -->
            <table>
                <tr>
                    <td>JALAN</td>
                    <td>: <strong>
                            @if (!empty($users->AL_JALAN))
                                @if ($users->AL_JALAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_JALAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>RT/RW</td>
                    <td>: <strong>
                            @if (!empty($users->AL_RT_RW))
                                @if ($users->AL_RT_RW == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_RT_RW }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>DUSUN KAMPUNG</td>
                    <td>: <strong>
                            @if (!empty($users->AL_DUSUN))
                                @if ($users->AL_DUSUN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_DUSUN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>DESA/KELURAHAN</td>
                    <td>: <strong>
                            @if (!empty($users->AL_KELURAHAAN))
                                @if ($users->AL_KELURAHAAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_KELURAHAAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>: <strong>
                            @if (!empty($users->AL_KECAMATAN))
                                @if ($users->AL_KECAMATAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_KECAMATAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KODE POS</td>
                    <td>: <strong>
                            @if (!empty($users->AL_POS))
                                @if ($users->AL_POS == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_POS }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TINGGAL BERSAMA</td>
                    <td>: <strong>
                            @if (!empty($users->DD_TINGGAL_BERSAMA))
                                @if ($users->DD_TINGGAL_BERSAMA == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_TINGGAL_BERSAMA }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TRANSPORTASI YANG DIGUNAKAN</td>
                    <td>: <strong>
                            @if (!empty($users->DD_TRANSPORTASI))
                                @if ($users->DD_TRANSPO == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_TRANSPO }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TELP. RUMAH</td>
                    <td>: <strong>
                            @if (!empty($users->DD_KONTAK_RUMAH))
                                @if ($users->DD_KONTAK_RUMAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_KONTAK_RUMAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. HP</td>
                    <td>: <strong>
                            @if (!empty($users->DD_KONTAK_PRIBADI))
                                @if ($users->DD_KONTAK_PRIBADI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_KONTAK_PRIBADI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td>: <strong>
                            @if (!empty($users->DD_EMAIL_PRIBADI))
                                @if ($users->DD_EMAIL_PRIBADI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_EMAIL_PRIBADI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENERIMA KPS/KKS</td>
                    <td>: <strong>
                            @if (!empty($users->BW_SPESIAL_CARD))
                                @if ($users->BW_SPESIAL_CARD == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->BW_SPESIAL_CARD }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>
        </div>

        <!-- <hr> -->
        <div class="col-sm-6">
            <h3 class="col-sm-12 judul">C. DATA ORANGTUA</h3>
            <!-- <br> -->
            <table>
                <tr>
                    <td>NAMA AYAH KANDUNG</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NAMA_AYAH_KANDUNG))
                                @if ($users->DO_NAMA_AYAH_KANDUNG == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NAMA_AYAH_KANDUNG }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NIK AYAH KANDUNG</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NIK_AYAH_KANDUNG))
                                @if ($users->DO_NIK_AYAH_KANDUNG == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NIK_AYAH_KANDUNG }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if (!empty($users->DO_TAHUN_LAHIR_AYAH))
                                @if ($users->DO_TAHUN_LAHIR_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_TAHUN_LAHIR_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENDIDIKAN_AYAH))
                                @if ($users->DO_PENDIDIKAN_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENDIDIKAN_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PEKERJAAN_AYAH))
                                @if ($users->DO_PEKERJAAN_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PEKERJAAN_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENGHASILAN_AYAH))
                                @if ($users->DO_PENGHASILAN_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENGHASILAN_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if (!empty($users->DO_BERKEBUTUHAN_KHUSUS_AYAH))
                                @if ($users->DO_BERKEBUTUHAN_KHUSUS_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_BERKEBUTUHAN_KHUSUS_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NOMOR_TELEPON_AYAH))
                                @if ($users->DO_NOMOR_TELEPON_AYAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NOMOR_TELEPON_AYAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NAMA IBU KANDUNG</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NAMA_IBU_KANDUNG))
                                @if ($users->DO_NAMA_IBU_KANDUNG == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NAMA_IBU_KANDUNG }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NIK IBU KANDUNG</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NIK_IBU_KANDUNG))
                                @if ($users->DO_NIK_IBU_KANDUNG == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NIK_IBU_KANDUNG }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if (!empty($users->DO_TAHUN_LAHIR_IBU))
                                @if ($users->DO_TAHUN_LAHIR_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_TAHUN_LAHIR_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENDIDIKAN_IBU))
                                @if ($users->DO_PENDIDIKAN_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENDIDIKAN_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PEKERJAAN_IBU))
                                @if ($users->DO_PEKERJAAN_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PEKERJAAN_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENGHASILAN_IBU))
                                @if ($users->DO_PENGHASILAN_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENGHASILAN_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if (!empty($users->DO_BERKEBUTUHAN_KHUSUS_IBU))
                                @if ($users->DO_BERKEBUTUHAN_KHUSUS_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_BERKEBUTUHAN_KHUSUS_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NOMOR_TELEPON_IBU))
                                @if ($users->DO_NOMOR_TELEPON_IBU == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NOMOR_TELEPON_IBU }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NAMA WALI</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NAMA_WALI))
                                @if ($users->DO_NAMA_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NAMA_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NIK WALI</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NIK_WALI))
                                @if ($users->DO_NIK_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NIK_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if (!empty($users->DO_TAHUN_LAHIR_WALI))
                                @if ($users->DO_TAHUN_LAHIR_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_TAHUN_LAHIR_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENDIDIKAN_WALI))
                                @if ($users->DO_PENDIDIKAN_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENDIDIKAN_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PEKERJAAN_WALI))
                                @if ($users->DO_PEKERJAAN_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PEKERJAAN_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if (!empty($users->DO_PENGHASILAN_WALI))
                                @if ($users->DO_PENGHASILAN_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_PENGHASILAN_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if (!empty($users->DO_BERKEBUTUHAN_KHUSUS_WALI))
                                @if ($users->DO_BERKEBUTUHAN_KHUSUS_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_BERKEBUTUHAN_KHUSUS_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if (!empty($users->DO_NOMOR_TELEPON_WALI))
                                @if ($users->DO_NOMOR_TELEPON_WALI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DO_NOMOR_TELEPON_WALI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>

        </div>
        <!-- <hr> -->
        <div class="col-sm-6">
            <!-- <br> -->
            <h3 class="col-sm-12 judul">D. ADDITIONAL DATA 1</h3>
            <table>
                <tr>
                    <td>TINGGI BADAN</td>
                    <td>: <strong>
                            @if (!empty($users->DM_TINNGI_BADAN))
                                @if ($users->DM_TINNGI_BADAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DM_TINNGI_BADAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>BERAT BADAN</td>
                    <td>: <strong>
                            @if (!empty($users->DM_BERAT_BADAN))
                                @if ($users->DM_BERAT_BADAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DM_BERAT_BADAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>JARAK RUMAH KE SEKOLAH</td>
                    <td>: <strong>
                            @if (!empty($users->DD_JRS))
                                @if ($users->DD_JRS == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_JRS }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>SEBUTKAN DALAM KILOMETER</td>
                    <td>: <strong>
                            @if (!empty($users->DD_JRS_KM))
                                @if ($users->DD_JRS_KM == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_JRS_KM }} KM
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>WAKTU TEMPUH KE SEKOLAH</td>
                    <td>: <strong>
                            @if (!empty($users->DD_WAKTU_TEMPUH))
                                @if ($users->DD_WAKTU_TEMPUH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DD_WAKTU_TEMPUH }} MENIT
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>JUMLAH SAUDARA KANDUNG</td>
                    <td>: <strong>
                            @if (!empty($users->JSK))
                                @if ($users->JSK == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->JSK }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                    </td>
                </tr>
            </table>

        </div>
        <!-- <hr> -->
        <div class="col-sm-6">
            <!-- <br> -->
            <h3 class="col-sm-12 judul">E. PRESTASI</h3>

            <table>
                <tr>
                    <td>JENIS PRESTASI</td>
                    <td>: <strong>
                            @if (!empty($users->DP_PRESTASI_JENIS))
                                @if ($users->DP_PRESTASI_JENIS == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DP_PRESTASI_JENIS }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>TINGKAT PRESTASI</td>
                    <td>: <strong>
                            @if (!empty($users->DP_PRESTASI_TINGKAT))
                                @if ($users->DP_PRESTASI_TINGKAT == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DP_PRESTASI_TINGKAT }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>NAMA PRESTASI</td>
                    <td>: <strong>
                            @if (!empty($users->DP_PRESTASI_TITTLE))
                                @if ($users->DP_PRESTASI_TITTLE == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DP_PRESTASI_TITTLE }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TAHUN PRESTASI</td>
                    <td>: <strong>
                            @if (!empty($users->DP_PRESTASI_TAHUN))
                                @if ($users->DP_PRESTASI_TAHUN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DP_PRESTASI_TAHUN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>PENYELENGGARA</td>
                    <td>: <strong>
                            @if (!empty($users->DP_PRESTASI_PENYELENGGARAN))
                                @if ($users->DP_PRESTASI_PENYELENGGARAN == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DP_PRESTASI_PENYELENGGARAN }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>

            </table>
        </div>

        <!-- <hr> -->
        <div class="col-sm-6">

            <!-- <br> -->
            <h3 class="col-sm-12 judul">F. BEASISWA</h3>

            <table>
                <tr>
                    <td>JENIS BEASISWA</td>
                    <td>: <strong>
                            @if (!empty($users->BW_JENIS_BEASISWA))
                                @if ($users->BW_JENIS_BEASISWA == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->BW_JENIS_BEASISWA }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>KETERANGAN</td>
                    <td>: <strong>
                            @if (!empty($users->Keterangan))
                                @if ($users->Keterangan == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->Keterangan }}
                                @endif
                            @else
                                {{ '~Count' }}
                            @endif
                        </strong>
                        
                    </td>
                </tr>
                <tr>
                    <td>TAHUN MULAI </td>
                    <td>: <strong>
                            @if (!empty($users->BW_MULAI))
                                @if ($users->BW_MULAI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->BW_MULAI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TAHUN SELESAI</td>
                    <td>: <strong>
                            @if (!empty($users->BW_SELESAI))
                                @if ($users->BW_SELESAI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->BW_SELESAI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>


            </table>


        </div>

        <!-- <hr> -->
        <div class="col-sm-6">

            <!-- <br> -->
            <h3 class="col-sm-12 judul">G. ADDITIONAL II</h3>


            <table>
                <tr>
                    <td>PROVINSI</td>
                    <td>: <strong>
                            @if (!empty($users->AL_PROVINSI))
                                @if ($users->AL_PROVINSI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->AL_PROVINSI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>KOTA/KAB</td>
                    <td>: <strong>
                            @if (!empty($users->KOTA))
                                @if ($users->KOTA == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->KOTA }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                     </td>
                </tr>
                <tr>
                    <td>GOLONGAN DARAH </td>
                    <td>: <strong>
                            @if (!empty($users->GOLDARAH))
                                @if ($users->GOLDARAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->GOLDARAH }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>TANGGAL DITERIMA DISEKOLAH INI</td>
                    <td>: <strong>
                            @if (!empty($users->TGL_DITERIMA_DISEKOLAH_INI))
                                @if ($users->TGL_DITERIMA_DISEKOLAH_INI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->TGL_DITERIMA_DISEKOLAH_INI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>ASAL SEKOLAH (SMP/MTS)</td>
                    <td>: <strong>
                            @if (!empty($users->SS_ASAL_SEKOLAH))
                                @if ($users->SS_ASAL_SEKOLAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->SS_ASAL_SEKOLAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KOTA ATAU KABUPATEN ASAL SEKOLAH</td>
                    <td>: <strong>
                            @if (!empty($users->SS_KOTA_ASAL_SEKOLAH))
                                @if ($users->SS_KOTA_ASAL_SEKOLAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->SS_KOTA_ASAL_SEKOLAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KECAMATAN ASAL SEKOLAH </td>
                    <td>: <strong>
                            @if (!empty($users->SS_KEC_ASAL_SEKOLAH))
                                @if ($users->SS_KEC_ASAL_SEKOLAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->SS_KEC_ASAL_SEKOLAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. IJAZAH</td>
                    <td>: <strong>
                            @if (!empty($users->DK_NO_IJAZAH))
                                @if ($users->DK_NO_IJAZAH == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->DK_NO_IJAZAH }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>CITA~CITA</td>
                    <td>: <strong>
                            @if (!empty($users->CITA))
                                @if ($users->CITA == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->CITA }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO. PESERTA UJIAN SEKOLAH SMP</td>
                    <td>: <strong>
                            @if (!empty($users->nous))
                                @if ($users->nous == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->nous }}
                                @endif
                            @else
                                {{ '~COUNT' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>HOBI</td>
                    <td>: <strong>
                            @if (!empty($users->CC_HOBI))
                                @if ($users->CC_HOBI == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->CC_HOBI }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>: <strong>
                            @if (!empty($users->CC_KELAS))
                                @if ($users->CC_KELAS == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->CC_KELAS }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>Ekstrakurikuler Yang Di Minati</td>
                    <td>: <strong>
                            @if (!empty($users->ekskul))
                                @if ($users->ekskul == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->ekskul }}
                                @endif
                            @else
                                {{ '~' }}
                            @endif
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>NO INDUK SEKOLAH(NIS)</td>
                    <td>: <strong>
                            @if (!empty($users->NIS))
                                @if ($users->NIS == null)
                                    {{ '~' }}
                                @else
                                    {{ $users->NIS }}
                                @endif
                            @else
                                {{ '~ COUND' }}
                            @endif
                        </strong>
                    </td>
                </tr>



            </table>

        </div>


        <footer class="judul" style="padding-top: 50px">
            <table>
                <tr>
                    <td>Mengetahui/Menyetujui</td>
                    <td>Bogor, ......................................................... 2021</td>




                </tr>

                <tr>
                    <td>Orangtua Siswa/Wali</td>
                    <td>Siswa</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>materai 10,000</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>.........................................................</td>
                    <td>......................................................................</td>
                </tr>

            </table>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>
        window.print()
        setTimeout(() => {
            window.close()
        }, 100000);
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
