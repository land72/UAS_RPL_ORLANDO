<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratketerangan extends Model
{
    protected $table = "suratketerangandosen";
    protected $fillable = ['nik', 'jurusan','fakultas', 'tanggallahir', 'alamat', 'keterangan'];
}
