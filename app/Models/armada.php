<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armada extends Model
{
    use HasFactory;
    protected $fillable = ['id','merk','nopol','thn_beli','deskripsi','jenis_kendaraan_id','kapasitas_kursi','rating'];
}

