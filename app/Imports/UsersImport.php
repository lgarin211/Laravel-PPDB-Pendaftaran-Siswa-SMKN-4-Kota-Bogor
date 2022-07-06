<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    public function model(array $row)
    {      
        $ram = array('\'','`','`', '"',',' , ';', '<', '>' );
        foreach ($row as $key => $wl) {
            $row[$key]=str_replace( $ram,'', $wl);
        }
        if ($row[0]!='Nomor Pendaftaran'){ 
            $data=[
                'reg_number'=> $row[0],
                'NISN' => $row[1], 
                'NIK' => $row[4],
                'tgl_lahir' => $row[2],
                'NO_KK' => $row[3],
                'name' => $row[5],
                'Kejuruan' => $row[7],
                'JDP' => $row[8],
                'ASAL_SEKOLAH' => $row[6],
                'role_id' => 2,
                'email' => $row[1].'@smkn4bogor.sch.id',
                'avatar' => 'users/default.png',
                'password' => hash::make('@SISWASMKN4BOGOR'),
            ];
            $daw=DB::table('users')->insert($data);
        }
    }
}
