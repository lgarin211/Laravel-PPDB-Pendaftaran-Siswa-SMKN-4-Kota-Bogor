<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@if (empty(Auth::user()))
    <script type="text/javascript">
        window.location.replace('{{ url('/admin') }}')
    </script>
@else
    @extends('voyager::master')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('/admin/c_view') }}" class="btn btn-success col-12">Unduh</a>
                </div>
            </div>
            @php
                $lw = DB::table('inwepon')->get();
                $keybow = [];
                // dd($lw[0]);
                // foreach ($lw[0] as $key2 => $value) {
                //     $key2 = str_replace('DU_FULLNANE', 'NAMA LENGKAP', $key2);
                //     $key2 = str_replace('KANDUNG', ' ', $key2);
                //     $key2 = str_replace('KANDUNG', ' ', $key2);
                //     $key2 = str_replace('ASAL', 'MILA', $key2);
                //     $key2 = str_replace('SEKOLAH', 'MIPA', $key2);
                //     $key2 = str_replace('DU_', ' ', $key2);
                //     $key2 = str_replace('DK_', ' ', $key2);
                //     $key2 = str_replace('DO_', ' ', $key2);
                //     $key2 = str_replace('BW_', ' ', $key2);
                //     $key2 = str_replace('AL_', ' ', $key2);
                //     $key2 = str_replace('DM_', ' ', $key2);
                //     $key2 = str_replace('CC_', ' ', $key2);
                //     $key2 = str_replace('DP_', ' ', $key2);
                //     $key2 = str_replace('SS_', ' ', $key2);
                //     $key2 = str_replace('DD_', ' ', $key2);
                //     $key2 = str_replace('MILA', 'ASAL', $key2);
                //     $key2 = str_replace('MIPA', 'SEKOLAH', $key2);
                //     $key2 = str_replace('NOMOR UJIAN ASAL SEKOLAH', 'NOMOR UJIAN SEKOLAH', $key2);
                //     $key2 = str_replace('_', ' ', $key2);
                //     $key2 = str_replace('TINGG BERSAMA', 'TINGGAL BERSAMA', $key2);
                //     $key2 = str_replace('JRS', 'JARAK RUMAH KE SEKOLAH', $key2);
                //     $key2 = str_replace('JRS KM', 'JARAK RUMAH KE SEKOLAH DALAM KM', $key2);
                //     $keybow[] = $key2;
                // }
            @endphp
            <div class="card text-center table-responsive">
                <table class="table display text-center" id="vz">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NAMA</th>
                            <th>NISN</th>
                            <th>ASAL SEKOLAH</th>
                            <th>JURUSAN</th>
                            {{-- <th>PROFILE</th> --}}
                            <th>AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lw as $data)
                            <tr>
                                <td> {{ $data->id }}</td>
                                <td> {{ $data->name }}</td>
                                <td> {{ $data->NISN }}</td>
                                <td> {{ $data->ASAL_SEKOLAH }}</td>
                                <td> {{ $data->Kejuruan }}</td>
                                {{-- <td> <img src="{{ url('storage/'.$data->PAS_POTO) }}" style="width: 100px;"></td> --}}
                                <td><a href="{{ url('/admin/fasw?id=' . $data->AUTH_ID) }}" class="btn btn-primary">LIHAT</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#vz').DataTable();
        });
    </script>
@endif
