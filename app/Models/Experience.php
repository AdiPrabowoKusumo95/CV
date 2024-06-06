<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'jabatan', 'nama_pt', 'deskripsi', 'tgl_mulai', 'tgl_akhir'
    ];
}
