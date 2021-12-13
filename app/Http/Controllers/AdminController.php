<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     
    public function dashadmin()
    {
        return view('dashadmin');
    }

    public function buatsrtadmin()
    {
        return view('buatsrtadmin');
    }

    public function arsipadmin()
    {
        return view('arsipadmin');
    }
    public function profileadm()
    {
        return view('profileadm');
    }
    public function ksdosen()
    {
        return view('ksdosen');
    }
    public function ksmhs()
    {
        return view('ksmhs');
    }
}
