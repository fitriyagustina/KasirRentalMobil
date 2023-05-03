<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = "Rental";
    protected $fillable =['id_pelanggan','id_pegawai','id_kendaraan','jaminan_sewa','tanggalpinjam','tanggalpengembalian'];

    public function pelanggan(){
        return $this->belongsTo('App\Models\Pelanggan','id_pelanggan');
    }

    public function pegawai(){
        return $this->belongsTo('App\Models\pegawai','id_pegawai');
    }

    public function kendaraan(){
        return $this->belongsTo('App\Models\Kendaraan','id_kendaraan');
    }
}
