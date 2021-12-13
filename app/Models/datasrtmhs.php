<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasrtmhs extends Model
{
    protected $table = "datasrtmhs";
    protected $fillable = ['tujuansurat', 'Tanggalpelaksa','lokasikegi', 'alamatmitra', 'namamitra', 'keterangan'];
}
