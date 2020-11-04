<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use DB;
use Image;

class DaftarController extends Controller
{
    public function daftar()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {

        Daftar::create([
            'nama' => $request->get('nama'),
            'kontak' => $request->get('kontak'),
            'asal_tempat' => $request->get('asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'deskripsi' => $request->get('deskripsi'),
            'tujuan' => $request->get('tujuan'),
        ]);

        return redirect('/daftar');
         dd($request);
        return $imageName;
    }


    public function update($id, Request $request)
    {
        $guru = DB::table('guru')->where('id', $id)->update([
            'nama' => $request->get('nama'),
            'Kontak' => $request->get('Kontak'),
            'Asal_tempat' => $request->get('Asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Deskripsi' => $request->get('Dreskripsi'),
            'foto' => $request->get('foto'),
            'Keterangan' => $request->get('Keterangan'),

        ]);

        // return redirect('/Daftar-Guru');
    }

    public function delete($id) {
        $daftar = Daftar::find($id);
        $daftar->delete();

        return redirect('/home');
    }

}
