<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

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
