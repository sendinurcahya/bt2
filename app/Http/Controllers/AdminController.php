<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $daftar = \App\Models\Daftar::all();
        return view('admin', compact('daftar'));
    }
}
