<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\pelanggan;
use App\Models\kendaraan;
use App\Models\Rental;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function dashboard(){
      $pegawai = pegawai::count();
      $pelanggan = pelanggan::count();
      $kendaraan = kendaraan::count();
      $rental = rental::count();
      $groupRental = Rental::all()->groupBy(function($val) {
        return Carbon::parse($val->tanggalpinjam)->format('F');
      });
      // dd($groupRental);
      return view ('admin.dashboard', compact('pegawai','pelanggan','kendaraan','rental','groupRental'));
    }
}