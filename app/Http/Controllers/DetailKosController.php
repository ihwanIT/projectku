<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailKosController extends Controller
{
    public function index()
    {
        return view('kos_Tampil');
    }
}
