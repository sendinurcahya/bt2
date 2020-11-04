<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuController extends Controller
{
    public function index()
    {
        $daftar = \App\Models\Daftar::where('tujuan', 'tu')->get();
        return view('tu', compact('daftar'));
    }
}
