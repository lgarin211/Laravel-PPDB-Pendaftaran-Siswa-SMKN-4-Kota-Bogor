@if (empty(Auth::user()))
    <script type="text/javascript">
        window.location.replace('{{ url('/admin') }}')
    </script>
@elseif (empty($_GET['id']))
    @php
        $nwk = back();
    @endphp
    {{ back() }}
@else
    @extends('Master/master')
    @section('content')
        @php
            $nas = [];
        @endphp
        <div class="header-large-title">
            <h4 class="title text-center"> DATA SISWA </h4>
        </div>

        <ul class="listview image-listview flush transparent mt-3 mb-2">
            @php
                $fas = [
                    4 => [
                        'name' => 'DATA_UMUM',
                        'link' => 'data-umum',
                        'text' => 'DATA UMUM',
                    ],
                    1 => [
                        'name' => 'DATA_KHUSUS',
                        'link' => 'data-khusus',
                        'text' => 'DATA KHUSUS',
                    ],
                    2 => [
                        'name' => 'DATA_ORANGTUA',
                        'link' => 'data-orangtua',
                        'text' => 'DATA ORANG TUA',
                    ],
                    5 => [
                        'name' => 'DATA_ALAMAT',
                        'link' => 'data-alamat',
                        'text' => 'DATA ALAMAT',
                    ],
                    0 => [
                        'name' => 'CITA_CITA',
                        'link' => 'cita-cita',
                        'text' => 'CITA CITA',
                    ],
                    // 6 => [
                    //     'name' => 'DATA_COVID',
                    //     'link' => 'data-covid',
                    //     'text' => 'PROTOKOL COVID',
                    // ],
                    7 => [
                        'name' => 'DATA_MEDIS',
                        'link' => 'data-medis',
                        'text' => 'DATA MEDIS',
                    ],
                    9 => [
                        'name' => 'DATA_SENSUS_SEKOLAH_ASAL',
                        'link' => 'data-sensus-sekolah-asal',
                        'text' => 'SENSUS SEKOLAH ASAL',
                    ],
                    10 => [
                        'name' => 'DATA_SENSUS_UMUM',
                        'link' => 'data-sensus-umum',
                        'text' => 'SENSUS UMUM',
                    ],
                    3 => [
                        'name' => 'DATA_BEASISWA',
                        'link' => 'data-beasiswa',
                        'text' => 'DATA BEASISWA',
                    ],
                    8 => [
                        'name' => 'DATA_PRESTASI',
                        'link' => 'data-prestasi',
                        'text' => 'DATA PRESTASI',
                    ],
                ];
                $pawi = [
                    11 => [
                        'name' => 'DOKUMEN_PERSYARATAN',
                        'link' => 'dokumen-persyaratan',
                        'text' => 'UPLOAD DOKUMEN PERSYARATAN',
                    ],
                ];
            @endphp
            @foreach ($fas as $key => $item)
                @php
                    $table = DB::table($item['name'])->where('AUTH_ID', $_GET['id']);
                    $nas[$item['name']] = $table->first();
                @endphp
                @if ($table->count() == 0)
                    <li>
                        <a href="{{ url('/admin/' . $item['link'] . '/create') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="add-circle"></ion-icon>
                            </div>
                            <div class="in">
                                {{ $item['text'] }}
                            </div>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="#" data-toggle="modal" data-target="#case{{ $key }}" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="checkmark"></ion-icon>
                            </div>
                            <div class="in">
                                {{ $item['text'] }}
                            </div>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="case{{ $key }}" tabindex="-1"
                            aria-labelledby="case{{ $key }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="case{{ $key }}Label">{{ $item['text'] }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @php
                                            $id_pin = $nas[$item['name']]->id;
                                            $unset = ['AUTH_ID', 'id', 'created_at', 'updated_at'];
                                            $data = $nas[$item['name']];
                                            foreach ($data as $key => $value) {
                                                if (in_array($key, $unset)) {
                                                    unset($data->$key);
                                                }
                                            }
                                            // dump($data);
                                        @endphp
                                        <table class="table">
                                            <tbody>
                                                @foreach ($data as $key2 => $item2)
                                                    <tr>
                                                        <th scope="col" width="200px">
                                                            @if ($key2 == 'DU_FULLNANE')
                                                                @php
                                                                    $key2="NAMA LENGKAP";
                                                                @endphp
                                                            @elseif ($key2 == 'JSK')
                                                                @php
                                                                    $key2="JUMLAH SAUDARA KANDUNG";
                                                                @endphp
                                                            @elseif ($key2 == 'JRS')
                                                                @php
                                                                    $key2="JARAK RUMAH KE SEKOLAH";
                                                                @endphp
                                                            @elseif ($key2 == 'JRS_KM')
                                                                @php
                                                                    $key2="JARAK RUMAH KE SEKOLAH DALAM KILOMETER";
                                                                @endphp
                                                            @elseif ($key2 == 'BW_SPESIAL_CARD')
                                                                @php
                                                                    $key2="PENERIMA BANTUAN";
                                                                @endphp
                                                            @elseif ($key2 == 'BW_JENIS_BEASISWA')
                                                                @php
                                                                    $key2="JENIS BANTUAN";
                                                                @endphp
                                                            @elseif ($key2 == 'AL_RT_RW')
                                                                @php
                                                                    $key2="RT/RW";
                                                                @endphp
                                                            @elseif ($key2 == 'DP_PRESTASI_JENIS')
                                                                @php
                                                                    $key2="JENIS PRESTASI";
                                                                @endphp
                                                            @elseif ($key2 == 'DP_PRESTASI_TINGGKAT')
                                                                @php
                                                                    $key2="TINGKAT PRESTASI";
                                                                @endphp
                                                            @elseif ($key2 == 'DP_PRESTASI_TAHUN')
                                                                @php
                                                                    $key2="TAHUN PRESTASI";
                                                                @endphp
                                                            @elseif ($key2 == 'DP_PRESTASI_PENYELENGGARAN')
                                                                @php
                                                                    $key2="PENYELENGGARA";
                                                                @endphp
                                                            @elseif ($key2 == 'DP_PRESTASI_TITTLE')
                                                                @php
                                                                    $key2="NAMA PRESTASI";
                                                                @endphp
                                                            @elseif ($key2 == 'nous')
                                                                @php
                                                                    $key2="NOMOR UJIAN SEKOLAH SMP";
                                                                @endphp
                                                            @elseif ($key2 == 'Keterangan')
                                                                @php
                                                                    $key2="KETERANGAN";
                                                                @endphp
                                                            @endif
                                                            @php
                                                                $key2 = str_replace('KANDUNG', ' ', $key2);
                                                                $key2 = str_replace('ASAL', 'MILA', $key2);
                                                                $key2 = str_replace('SEKOLAH', 'MIPA', $key2);
                                                                $key2 = str_replace('DU_', ' ', $key2);
                                                                $key2 = str_replace('DK_', ' ', $key2);
                                                                $key2 = str_replace('DO_', ' ', $key2);
                                                                $key2 = str_replace('BW_', ' ', $key2);
                                                                $key2 = str_replace('AL_', ' ', $key2);
                                                                $key2 = str_replace('DM_', ' ', $key2);
                                                                $key2 = str_replace('CC_', ' ', $key2);
                                                                $key2 = str_replace('DP_', ' ', $key2);
                                                                $key2 = str_replace('SS_', ' ', $key2);
                                                                $key2 = str_replace('DD_', ' ', $key2);
                                                                $key2 = str_replace('MILA', 'ASAL', $key2);
                                                                $key2 = str_replace('MIPA', 'SEKOLAH', $key2);
                                                                $key2 = str_replace('NOMOR UJIAN ASAL SEKOLAH', 'NOMOR UJIAN SEKOLAH', $key2);
                                                                $key2 = str_replace('_', ' ', $key2);
                                                                $key2 = str_replace('TINGG BERSAMA', 'TINGGAL BERSAMA', $key2);
                                                                $key2 = str_replace('JRS', 'JARAK RUMAH KE SEKOLAH', $key2);
                                                                $key2 = str_replace('JRS KM', 'JARAK RUMAH KE SEKOLAH DALAM KM', $key2);
                                                            @endphp
                                                            {{ $key2 }}
                                                            </td>
                                                        <td scope="col">: {{ $item2 }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                        {{-- <a href="{{ url('/admin/' . $item['link'] . '/' . $id_pin . '/edit') }}"
                                            class="btn btn-warning">Edit</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                @endif
            @endforeach
            @php
                $pon = 0;
            @endphp
            @foreach ($pawi as $key => $item)
                @php
                    $table = DB::table($item['name'])->where('AUTH_ID', $_GET['id']);
                    $ran[$item['name']] = $table->first();
                @endphp
                @if ($table->count() == 0)
                    <li>
                        <a href="{{ url('/admin/' . $item['link'] . '/create') }}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="add-circle"></ion-icon>
                            </div>
                            <div class="in">
                                {{ $item['text'] }}
                            </div>
                        </a>
                    </li>
                    @php
                        $pon++;
                    @endphp
                @else
                    @php
                        $lawir = 0;
                        foreach ($ran[$item['name']] as $masu_key => $masu) {
                            if ($masu == '[]') {
                                $lawir++;
                            }
                        }
                        $pq3 = $ran[$item['name']];
                    @endphp
                    @if ($lawir == 0)
                        <li>
                            <a href="{{ url('/admin/' . $item['link'] . '/' . $pq3->id . '/edit') }}" class="item">
                                <div class="icon-box bg-success">
                                    <ion-icon name="checkmark"></ion-icon>
                                </div>
                                <div class="in">
                                    {{ $item['text'] }}
                                </div>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/admin/' . $item['link'] . '/' . $pq3->id . '/edit') }}" class="item">
                                <div class="icon-box bg-danger">
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    LENGKAPI {{ $item['text'] }}
                                </div>
                            </a>
                        </li>
                        @php
                            $pon++;
                        @endphp
                    @endif
                @endif
            @endforeach
            @foreach ($nas as $key => $item)
                @php
                    if ($item == null) {
                        $pon++;
                    }
                @endphp
            @endforeach

            {{-- @if ($pon == 0)
                <div class="text-center bg-danger col-12 card">
                    <p class="mt-3">
                        PASTIKAN SELURUH DATA PENDAFTARAN SUDAH DI ISI DENGAN LENGKAP (CEKLIS HIJAU)
                    </p>
                </div>
                <br>
                <div class="col-md-12">
                    <a href="pdf?id={{ $_GET['id'] }}" class="col-md-12 btn btn-success btn-lg">PRINT FORMULIR</a>
                </div>
            @endif --}}

        </ul>
    @endsection

    @section('c2')
        <div class="col-md-12">
            <div class="col-md-12 text-center">
                <div class="mb-2">
                    <img src="https://www.smkn4bogor.sch.id/wp-content/uploads/2020/07/logoSMKN4.jpg" alt="alt"
                        class="imaged square w200">
                </div>
                <h1 class="title">{!! Auth::user()->name !!}</h1>
                <div class="text mb-3">
                    Hallo {!! Auth::user()->name !!} harap periksa dan isi data ya .
                </div>
                <div class="row">
                    @foreach ($nas as $key => $bis)
                        @php
                            $datapin = $bis;
                            unset($datapin->id, $datapin->created_at, $datapin->updated_at, $datapin->id_user, $datapin->id_tipe_pendaftara);
                        @endphp
                        @empty($datapin)
                        @else
                            <table class="table text-left">
                                <tbody>
                                    @foreach ($datapin as $key => $element)
                                        <tr>
                                            <th width="200px">{!! strtoupper(str_replace('_', ' ', $key)) !!}</th>
                                            <td class="text-left">
                                                @if (strpos($key, 'foto') === 0)
                                                    <img src="{{ url('/storage/' . $element) }}" class="img-fluid"
                                                        style="max-height: 250px;">
                                                @else
                                                    <strong> {!! $element !!} </strong>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endempty
                    @endforeach
                </div>
                <!-- <a href="#" class="btn btn-primary col-12">Print data</a> -->
            </div>
        </div>
        <hr>
    @endsection
@endif
