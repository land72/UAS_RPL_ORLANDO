<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratketerangan;

class suratketeranganController extends Controller
{
    public function create(Request $request)
{
    suratketerangan::create([
        'nik' => $request->nik,
        'jurusan' => $request->jurusan,
        'fakultas' => $request->fakultas,
        'tanggallahir' => $request->tanggallahir,
        'alamat'  => $request->alamat,
        'keterangan' => $request->keterangan
    ]);
    return redirect('/buatsuratketerangandosen');

}
}
