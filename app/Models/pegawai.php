<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = "Pegawai";
    protected $fillable =['email','password','namapegawai','alamatpegawai','no_tlpn'];
}
