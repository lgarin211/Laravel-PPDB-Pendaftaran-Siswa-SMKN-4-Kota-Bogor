<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersNotEComplatedata implements FromView
{

    public function view(): View
    {
        return view('exel/belum_d_ulang');
    }
}
