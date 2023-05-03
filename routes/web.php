<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\RentalController;
use App\Models\Rental;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[PortoController::class,'index']);

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/postregister',[AuthController::class,'postregister']);

Route::get ('/login',[AuthController::class,"login"])->name("login");
Route::post('/postlogin',[AuthController::class,'postlogin']);

Route::get ('web/beranda',[DinamisController::class,"beranda"]);
Route::get ('web/profil',[DinamisController::class,"profil"]);
Route::get ('web/kontak',[DinamisController::class,"kontak"]);

Route::get ('/login',[AuthController::class,"login"])->name("login");
Route::get ('/register',[AuthController::class,"register"])->name("register");
Route::get ('/logout',[AuthController::class,"logout"]);


Route::get ('/dashboard',[AdminController::class,"dashboard"])->name("dashboard");

// report pdf
Route::get('/downloadpdf',[RentalController::class,'downloadpdf']);
Route::get('/rentalpdf',function() {
    $rental = Rental::with('pelanggan','pegawai','kendaraan')->get();
    return view('admin.rental.export', compact('rental'));
});
Route::get('rental/{rental}/cetakstruk',[RentalController::class,'cetakstruk']);
//cetakstruk

Route:: get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store']);
Route::get('/pelanggan/{id}/edit',[PelangganController::class,'edit']);
Route::post('/pelanggan/{id}/update',[PelangganController::class,'update']);
Route::get('/pelanggan/{id}/delete',[PelangganController::class,'destroy']);
Route::get('/pelanggan/search',[PelangganController::class,'search']);




Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai/create',[PegawaiController::class,'create']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/{id}/edit',[PegawaiController::class,'edit']);
Route::post('/pegawai/{id}/update',[PegawaiController::class,'update']);
Route::get('/pegawai/{id}/delete',[PegawaiController::class,'destroy']);
Route::get('/pegawai/search',[PegawaiController::class,'search']);

Route::get('/kendaraan',[KendaraanController::class,'index']);
Route::get('/kendaraan/create',[KendaraanController::class,'create']);
Route::post('/kendaraan/store',[KendaraanController::class,'store']);
Route::get('/kendaraan/{id}/edit',[KendaraanController::class,'edit']);
Route::post('/kendaraan/{id}/update',[KendaraanController::class,'update']);
Route::get('/kendaraan/{id}/delete',[KendaraanController::class,'destroy']);
Route::get('/kendaraan/search',[KendaraanController::class,'search']);

Route::get('/rental',[RentalController::class,'index']);
Route::get('/rental/create',[RentalController::class,'create']);
Route::post('/rental/store',[RentalController::class,'store']);
Route::get('/rental/{id}/edit',[RentalController::class,'edit']);
Route::post('/rental/{id}/update',[RentalController::class,'update']);
Route::get('/rental/{id}/delete',[RentalController::class,'destroy']);
Route::get('/rental/search',[RentalController::class,'search']);














// n-n
Route::get('/pelanggan/kendaraan',[PelangganController::class,'kendaraan']);

Route::get('/rental/pelanggan',[RentalController::class,'pelanggan']);