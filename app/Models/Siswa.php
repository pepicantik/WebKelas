<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'tgl_lahir',
        'tempat_lahir',
        'hobi',
        'image',
        'motivasi',
        'sosmed'
    ];
}
