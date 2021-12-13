<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasrtmhs;

class siswaController extends Controller
{
    public function create(Request $request)
    {
        datasrtmhs::create([
            'tujuansurat' => $request->tujuansurat,
            'Tanggalpelaksa' => $request->Tanggalpelaksa,
            'lokasikegi' => $request->lokasikegi,
            'alamatmitra'  => $request->alamatmitra,
            'namamitra' => $request->namamitra,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/skmhs');



    }

}
