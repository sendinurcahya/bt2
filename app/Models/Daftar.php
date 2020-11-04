<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['nama','kontak','asal_tempat','jenis_kelamin','tujuan','deskripsi'];
}
