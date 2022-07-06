<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\UsersImport;
use App\Exports\UsersEComplatedata;
use App\Exports\UsersNotEComplatedata;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class newUs extends Controller
{
    public function home(Type $var = null)
    {
        if (empty(Auth::user()->id)) {
                return view('scema/home');
        }else{
                return redirect('/dashboard');
        }
    }

    public function kaj(Type $var = null)
    {
        if (empty($_GET['id'])) {
                return back();
        }else{
                return view('scemakadmin/proses');
        }
    }

    public function owq(Request $request)
    {   
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

    public function c_view()
    {   
        $data['users']=DB::table('inwepon')->get();
        // dd($data);
        return view('tdf/list',$data);
    }
    public function c_ex2()
    {   
        return Excel::download(new UsersNotEComplatedata, 'Data Belum Lengkap Per '.date('Y-m-d-hisHHISS').'.xlsx');
    }
    public function c_ex()
    {
        return Excel::download(new UsersEComplatedata, 'Data Lengkap Per '.date('Y-m-d-hisHHISS').'.xlsx');
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
            // ->join('DATA_COVID', 'users.id', '=', 'DATA_COVID.AUTH_ID')
            ->join('DATA_MEDIS', 'users.id', '=', 'DATA_MEDIS.AUTH_ID')
            ->join('DATA_PRESTASI', 'users.id', '=', 'DATA_PRESTASI.AUTH_ID')
            ->join('DATA_SENSUS_SEKOLAH_ASAL', 'users.id', '=', 'DATA_SENSUS_SEKOLAH_ASAL.AUTH_ID')
            ->join('DATA_SENSUS_UMUM', 'users.id', '=', 'DATA_SENSUS_UMUM.AUTH_ID')
            ->where('users.id',  $_GET['id'])
            ->first();

            // dd($users);
            $data=['users'=>$users];
            if (!empty($users)) {
                return view('PDFp',$data);
            } else {
                return redirect('/');
            }
            die;
        }
        return back();
    }

    public function import(Request $request)
    {
        // dd($request->ezl,request()->file('ezl'));
        if (Auth::user()->role_id!=1) {
            return redirect('/admin');
        }
        if (!empty($_POST)) {
            Excel::import(new UsersImport, request()->file('ezl'));
            dd('stop');
            // return redirect('/')->with('success', 'All good!');
        }else{
            return view('exel/import1');
        }

    }
}
