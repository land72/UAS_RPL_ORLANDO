<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{

    public function dashdosen()
    {
        return view('dashdosen');
    }

    public function buatsurattugasdosen()
    {
        return view('buatsurattugasdosen');
    }
    public function buatsuratketerangandosen()
    {
        return view('buatsuratketerangandosen');
    }

    public function arsipdosen()
    {
        return view('arsipdosen');
    }
    public function profiledosen()
    {
        return view('profiledosen');
    }
    public function smdosen()
    {
        return view('smdosen');
    }
    public function skdosen()
    {
        return view('skdosen');
    }
    public function create(Request $request)
    {
        Dosen::create([
            'nik' => $request->nik,
            'tujuansurat' => $request->tujuansurat,
            'namamitra' => $request->namamitra,
            'Tanggalpelaksanaan' => $request->Tanggalpelaksanaan,
            'lokasikegiatan'  => $request->lokasikegiatan,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/buatsurattugasdosen');

}

}
