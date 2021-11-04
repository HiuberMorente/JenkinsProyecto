<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PacienteController;

=======
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\LoginApi;
use App\Http\Middleware\Authenticate;
>>>>>>> 71a799d (update)

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function(){
    return view('login.index');
});

Route::post('login', [LoginApi::class, 'login']);
Route::post('logout', [LoginApi::class, 'logout']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 71a799d (update)
Route::resource('paciente',PacienteController::class);
