<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasrtmhs;


class MahasiswaController extends Controller
{
    public function dashmhs()
    {
        return view('dashmhs');
    }

    public function buatsrtmhs()
    {
        return view('buatsrtmhs');
    }

    public function arsipmhs()
    {
        return view('arsipmhs');
    }
    public function profilemhs()
    {
        return view('profilemhs');
    }
    public function smmhs()
    {
        return view('smmhs');
    }
    public function skmhs()
    {
        return view('skmhs');
    }

    public function create(Request $request)
    {
        createsrtmhs::create([
            'jenissurat' => $request->jenissurat,
            'Tanggalpelaksa' => $request->Tanggalpelaksa,
            'lokasikegi' => $request->lokasikegi,
            'namamitra' => $request->namamitra,
            'keterangan' => $request->$keterangan,
            'alamatmitra'  =>$request->$alamatmitra
        ]);
        return redirect('/skmhs');



    }


    public function index()
{
        $createsrtmhs = SuratPersonalia::all();

        return view('index',compact('createsrtmhs'));

}
public function edit($id)
{
    $createsrtmhs = SuratPersonalia::findOrFail($id);

        return view('edit', compact('createsrtmhs'));
}
}
