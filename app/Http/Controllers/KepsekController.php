<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function index()
    {
        $daftar = \App\Models\Daftar::where('tujuan', 'kepsek')->get();
        return view('kepsek', compact('daftar'));
    }
}
