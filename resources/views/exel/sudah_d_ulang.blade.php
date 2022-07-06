@php
$lw = DB::table('inwepon')->get();
$keybow=[];
foreach ($lw[0] as $key2 => $value) {
        $key2 = str_replace('DU_FULLNANE', 'NAMA LENGKAP', $key2);
        $key2 = str_replace('KANDUNG', ' ', $key2);
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
        $keybow[]=$key2;
}
@endphp

<table>
    <thead>
    <tr>
        @foreach ($keybow as $item)
            <th>{{$item}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($lw as $data)
        <tr>
            @foreach ($data as $field)
                <td>`{{ $field }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
{{-- @dd('aw') --}}