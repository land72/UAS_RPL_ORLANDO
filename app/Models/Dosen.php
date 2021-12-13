<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "surattugasdosen";
    protected $fillable = ['nik', 'tujuansurat','namamitra', 'Tanggalpelaksanaan', 'lokasikegiatan', 'keterangan'];
}
