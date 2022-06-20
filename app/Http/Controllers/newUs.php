<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class newUs extends Controller
{
    public function owq(Request $request)
    {   

        // dd(Auth::user(),$request);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function basl()
    {
        if (!empty($_GET['id'])) {
            $users = DB::table('users')
            ->join('DATA_UMUM', 'users.id', '=', 'DATA_UMUM.AUTH_ID')
            ->join('DATA_KHUSUS', 'users.id', '=', 'DATA_KHUSUS.AUTH_ID')
            ->join('DATA_ORANGTUA', 'users.id', '=', 'DATA_ORANGTUA.AUTH_ID')
            ->join('DATA_BEASISWA', 'users.id', '=', 'DATA_BEASISWA.AUTH_ID')
            ->join('DATA_ALAMAT', 'users.id', '=', 'DATA_ALAMAT.AUTH_ID')
            ->join('CITA_CITA', 'users.id', '=', 'CITA_CITA.AUTH_ID')
            ->join('DATA_COVID', 'users.id', '=', 'DATA_COVID.AUTH_ID')
            ->join('DATA_MEDIS', 'users.id', '=', 'DATA_MEDIS.AUTH_ID')
            ->join('DATA_PRESTASI', 'users.id', '=', 'DATA_PRESTASI.AUTH_ID')
            ->join('DATA_SENSUS_SEKOLAH_ASAL', 'users.id', '=', 'DATA_SENSUS_SEKOLAH_ASAL.AUTH_ID')
            ->join('DATA_SENSUS_UMUM', 'users.id', '=', 'DATA_SENSUS_UMUM.AUTH_ID')
            ->select('*')
            ->where('users.id',  $_GET['id'])
            // ->where('users.id',  Auth::user()->id)
            ->get();

            dd($users);


            $users = DB::table('allstanonedatas')
                ->where('NISN', '=', $_GET['id'])
                ->first();
            $data=['users'=>$users];
            if (!empty($users)) {
                return view('printpdf',$data);
            } else {
                return redirect()->route('/');
            }
            die;
        }
        return back();
    }

    public function import(Request $request)
    {
        // dd($request->ezl,request()->file('ezl'));
        if (!empty($_POST)) {
            Excel::import(new UsersImport, request()->file('ezl'));
            dd('stop');
            // return redirect('/')->with('success', 'All good!');
        }else{
            return view('exel/import1');
        }

    }
}
