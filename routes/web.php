<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newUs;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     dd(Auth::user()->id);
//     return view('scema/proses');
// });

Route::get('/home', function () {
    return view('scema/home');
});

Route::any('/import',[newUs::class,'import']);
Route::any('/pdf',[newUs::class,'basl']);

Route::get('/home', function () {
    return view('scema/home');
});

Route::get('/FAQ', function () {
    return view('scema/FAQ');
});

Route::get('/daftar', function () {
    return view('welcome2');
});

Route::get('/register', function () {
    return view('scema/register');
});

Route::post('/restination', function () {
    $data=array(
        'name'=>$_POST['nama'],
        'email'=>$_POST['email'],
        'role_id'=>2,
        'avatar'=>'users/default.png',
        'settings'=>'{"locale":"id"}',
        'created_at'=>date('Y-m-d'),
        'updated_at'=>date('Y-m-d'),
        'password'=>Hash::make($_POST['password'])        
    );

    DB::table('users')->insert($data);    
    return redirect('/admin');
});
    
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('scema/proses');
    });
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
