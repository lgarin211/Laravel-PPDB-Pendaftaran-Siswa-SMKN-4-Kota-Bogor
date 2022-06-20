{{-- @dump($users) --}}
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
    <title>Data Pendataran Ulang {{$users->Fullname}} ~ {{$users->id}}</title>

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

        th,
        td {
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
{{--                 <small>
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
            Nama Lengkap : {{$users->Fullname}}
        </div>
        <div class="card" style="width: 410px;">
            NISN : {{$users->NISN}}
        </div>
        <div class="card" style="width: 410px;">
            Jalur Pendaftaran : {{$users->JARDAF}}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <!-- <br> -->
            <h3 class="col-sm-12 judul">A. DATA DIRI</h3>
            <table>
                <tr>
                    <td>NAMA LENGKAP</td>
                    <td>: <strong>
                            @if(!empty($users->Fullname))
                            @if($users->Fullname=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Fullname}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
              x  </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>: <strong>
                            @if(!empty($users->Gender))
                            @if($users->Gender=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Gender}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NIK/NO INDUK KELUARGA</td>
                    <td>: <strong>
                            @if(!empty($users->NIK))
                            @if($users->NIK=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NIK}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO KARTU KELUARGA</td>
                    <td>: <strong>
                            @if(!empty($users->NO_KK))
                            @if($users->NO_KK=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NO_KK}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TEMPAT LAHIR</td>
                    <td>: <strong>
                            @if(!empty($users->TempatL))
                            @if($users->TempatL=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TempatL}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td>: <strong>
                            @if(!empty($users->Agama))
                            @if($users->Agama=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Agama}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KEWARGANEGARAAN</td>
                    <td>: <strong>
                            @if(!empty($users->Kewarganegaraan))
                            @if($users->Kewarganegaraan=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Kewarganegaraan}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if(!empty($users->Berkebutuhan_khusus))
                            @if($users->Berkebutuhan_khusus=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Berkebutuhan_khusus}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. REGISTRASI AKTA KELAHIRAN</td>
                    <td>: <strong>
                            @if(!empty($users->NRAL))
                            @if($users->NRAL=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NRAL}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>ANAK KE</td>
                    <td>: <strong>
                            @if(!empty($users->anak_ke))
                            @if($users->anak_ke=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->anak_ke}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->Jalan))
                            @if($users->Jalan=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Jalan}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>RT/RW</td>
                    <td>: <strong>
                            @if(!empty($users->RT_RW))
                            @if($users->RT_RW=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->RT_RW}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>DUSUN KAMPUNG</td>
                    <td>: <strong>
                            @if(!empty($users->Dusun))
                            @if($users->Dusun=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Dusun}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>DESA/KELURAHAN</td>
                    <td>: <strong>
                            @if(!empty($users->Kelurahan))
                            @if($users->Kelurahan=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Kelurahan}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KECAMATAN</td>
                    <td>: <strong>
                            @if(!empty($users->Kecamatan))
                            @if($users->Kecamatan=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Kecamatan}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KODE POS</td>
                    <td>: <strong>
                            @if(!empty($users->Pos))
                            @if($users->Pos=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Pos}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TINGGAL BERSAMA</td>
                    <td>: <strong>
                            @if(!empty($users->Tempat_Tinggal))
                            @if($users->Tempat_Tinggal=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Tempat_Tinggal}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TRANSPORTASI YANG DIGUNAKAN</td>
                    <td>: <strong>
                            @if(!empty($users->Tranporttasi))
                            @if($users->Tranporttasi=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Tranporttasi}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TELP. RUMAH</td>
                    <td>: <strong>
                            @if(!empty($users->TelpRumah))
                            @if($users->TelpRumah=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TelpRumah}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. HP</td>
                    <td>: <strong>
                            @if(!empty($users->TelpHP))
                            @if($users->TelpHP=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TelpHP}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td>: <strong>
                            @if(!empty($users->Email))
                            @if($users->Email=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Email}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENERIMA KPS/KKS</td>
                    <td>: <strong>
                            @if(!empty($users->spesialCard))
                            @if($users->spesialCard=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->spesialCard}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->NAMA_AYAH_KANDUNG))
                            @if($users->NAMA_AYAH_KANDUNG=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NAMA_AYAH_KANDUNG}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NIK AYAH KANDUNG</td>
                    <td>: <strong>
                            @if(!empty($users->NIK_AYAH_KANDUNG))
                            @if($users->NIK_AYAH_KANDUNG=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NIK_AYAH_KANDUNG}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if(!empty($users->TAHUN_LAHIR_AYAH))
                            @if($users->TAHUN_LAHIR_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TAHUN_LAHIR_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENDIDIKAN_AYAH))
                            @if($users->PENDIDIKAN_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENDIDIKAN_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if(!empty($users->PEKERJAAN_AYAH))
                            @if($users->PEKERJAAN_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PEKERJAAN_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENGHASILAN_AYAH))
                            @if($users->PENGHASILAN_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENGHASILAN_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if(!empty($users->BERKEBUTUHAN_KHUSUS_AYAH))
                            @if($users->BERKEBUTUHAN_KHUSUS_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->BERKEBUTUHAN_KHUSUS_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if(!empty($users->NOMOR_TELEPON_AYAH))
                            @if($users->NOMOR_TELEPON_AYAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NOMOR_TELEPON_AYAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NAMA IBU KANDUNG</td>
                    <td>: <strong>
                            @if(!empty($users->NAMA_IBU_KANDUNG))
                            @if($users->NAMA_IBU_KANDUNG=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NAMA_IBU_KANDUNG}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NIK IBU KANDUNG</td>
                    <td>: <strong>
                            @if(!empty($users->NIK_IBU_KANDUNG))
                            @if($users->NIK_IBU_KANDUNG=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NIK_IBU_KANDUNG}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if(!empty($users->TAHUN_LAHIR_IBU))
                            @if($users->TAHUN_LAHIR_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TAHUN_LAHIR_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENDIDIKAN_IBU))
                            @if($users->PENDIDIKAN_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENDIDIKAN_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if(!empty($users->PEKERJAAN_IBU))
                            @if($users->PEKERJAAN_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PEKERJAAN_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENGHASILAN_IBU))
                            @if($users->PENGHASILAN_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENGHASILAN_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if(!empty($users->BERKEBUTUHAN_KHUSUS_IBU))
                            @if($users->BERKEBUTUHAN_KHUSUS_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->BERKEBUTUHAN_KHUSUS_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if(!empty($users->NOMOR_TELEPON_IBU))
                            @if($users->NOMOR_TELEPON_IBU=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NOMOR_TELEPON_IBU}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NAMA WALI</td>
                    <td>: <strong>
                            @if(!empty($users->NAMA_WALI))
                            @if($users->NAMA_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NAMA_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NIK WALI</td>
                    <td>: <strong>
                            @if(!empty($users->NIK_WALI))
                            @if($users->NIK_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NIK_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TAHUN LAHIR</td>
                    <td>: <strong>
                            @if(!empty($users->TAHUN_LAHIR_WALI))
                            @if($users->TAHUN_LAHIR_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TAHUN_LAHIR_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENDIDIKAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENDIDIKAN_WALI))
                            @if($users->PENDIDIKAN_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENDIDIKAN_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PEKERJAAN</td>
                    <td>: <strong>
                            @if(!empty($users->PEKERJAAN_WALI))
                            @if($users->PEKERJAAN_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PEKERJAAN_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENGHASILAN</td>
                    <td>: <strong>
                            @if(!empty($users->PENGHASILAN_WALI))
                            @if($users->PENGHASILAN_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PENGHASILAN_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>BERKEBUTUHAN KHUSUS</td>
                    <td>: <strong>
                            @if(!empty($users->BERKEBUTUHAN_KHUSUS_WALI))
                            @if($users->BERKEBUTUHAN_KHUSUS_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->BERKEBUTUHAN_KHUSUS_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. TELP/HP</td>
                    <td>: <strong>
                            @if(!empty($users->NOMOR_TELEPON_WALI))
                            @if($users->NOMOR_TELEPON_WALI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NOMOR_TELEPON_WALI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->TINGGI_BADAN))
                            @if($users->TINGGI_BADAN=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TINGGI_BADAN}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>BERAT BADAN</td>
                    <td>: <strong>
                            @if(!empty($users->BERAT_BADAN))
                            @if($users->BERAT_BADAN=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->BERAT_BADAN}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>JARAK RUMAH KE SEKOLAH</td>
                    <td>: <strong>
                            @if(!empty($users->JRS))
                            @if($users->JRS=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->JRS}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>SEBUTKAN DALAM KILOMETER</td>
                    <td>: <strong>
                            @if(!empty($users->JRS_KM))
                            @if($users->JRS_KM=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->JRS_KM}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>WAKTU TEMPUH KE SEKOLAH</td>
                    <td>: <strong>
                            @if(!empty($users->WTS))
                            @if($users->WTS=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->WTS}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>JUMLAH SAUDARA KANDUNG</td>
                    <td>: <strong>
                            @if(!empty($users->JSK))
                            @if($users->JSK=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->JSK}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->PrestasiJenis))
                            @if($users->PrestasiJenis=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PrestasiJenis}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>TINGKAT PRESTASI</td>
                    <td>: <strong>
                            @if(!empty($users->Tinggkat))
                            @if($users->Tinggkat=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Tinggkat}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>NAMA PRESTASI</td>
                    <td>: <strong>
                            @if(!empty($users->Title))
                            @if($users->Title=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Title}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TAHUN PRESTASI</td>
                    <td>: <strong>
                            @if(!empty($users->Tahun))
                            @if($users->Tahun=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Tahun}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>PENYELENGGARA</td>
                    <td>: <strong>
                            @if(!empty($users->Penyelengara))
                            @if($users->Penyelengara=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Penyelengara}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->BeasiswaJenis))
                            @if($users->BeasiswaJenis=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->BeasiswaJenis}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>KETERANGAN</td>
                    <td>: <strong>
                            @if(!empty($users->Keterangan))
                            @if($users->Keterangan=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Keterangan}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>TAHUN MULAI </td>
                    <td>: <strong>
                            @if(!empty($users->Mulai))
                            @if($users->Mulai=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Mulai}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TAHUN SELESAI</td>
                    <td>: <strong>
                            @if(!empty($users->Selesai))
                            @if($users->Selesai=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->Selesai}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
                            @if(!empty($users->PROVINSI))
                            @if($users->PROVINSI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->PROVINSI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>KOTA/KAB</td>
                    <td>: <strong>
                            @if(!empty($users->KOTA))
                            @if($users->KOTA=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->KOTA}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong> </td>
                </tr>
                <tr>
                    <td>GOLONGAN DARAH </td>
                    <td>: <strong>
                            @if(!empty($users->GOLDARAH))
                            @if($users->GOLDARAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->GOLDARAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>TANGGAL DITERIMA DISEKOLAH INI</td>
                    <td>: <strong>
                            @if(!empty($users->TGL_DITERIMA_DISEKOLAH_INI))
                            @if($users->TGL_DITERIMA_DISEKOLAH_INI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->TGL_DITERIMA_DISEKOLAH_INI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>ASAL SEKOLAH (SMP/MTS)</td>
                    <td>: <strong>
                            @if(!empty($users->ASAL_SEKOLAH))
                            @if($users->ASAL_SEKOLAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->ASAL_SEKOLAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KOTA ATAU KABUPATEN ASAL SEKOLAH</td>
                    <td>: <strong>
                            @if(!empty($users->KOTA_ASAL_SEKOLAH))
                            @if($users->KOTA_ASAL_SEKOLAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->KOTA_ASAL_SEKOLAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KECAMATAN ASAL SEKOLAH </td>
                    <td>: <strong>
                            @if(!empty($users->KEC_ASAL_SEKOLAH))
                            @if($users->KEC_ASAL_SEKOLAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->KEC_ASAL_SEKOLAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. IJAZAH</td>
                    <td>: <strong>
                            @if(!empty($users->NOIJAZAH))
                            @if($users->NOIJAZAH=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NOIJAZAH}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>CITA~CITA</td>
                    <td>: <strong>
                            @if(!empty($users->CITA))
                            @if($users->CITA=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->CITA}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO. PESERTA UJIAN SEKOLAH SMP</td>
                    <td>: <strong>
                            @if(!empty($users->nous))
                            @if($users->nous=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->nous}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>HOBI</td>
                    <td>: <strong>
                            @if(!empty($users->HOBI))
                            @if($users->HOBI=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->HOBI}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>: <strong>
                            @if(!empty($users->KELAS))
                            @if($users->KELAS=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->KELAS}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>Ekstrakurikuler Yang Di Minati</td>
                    <td>: <strong>
                            @if(!empty($users->ekskul))
                            @if($users->ekskul=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->ekskul}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
                </tr>
                <tr>
                    <td>NO INDUK SEKOLAH(NIS)</td>
                    <td>: <strong>
                            @if(!empty($users->NIS))
                            @if($users->NIS=='PILIH')
                            {{'~'}}
                            @else
                            {{$users->NIS}}
                            @endif
                            @else
                            {{'~'}}
                            @endif
                        </strong></td>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
