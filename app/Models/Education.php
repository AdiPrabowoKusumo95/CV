<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = "educations";
    protected $fillable = ['lulusan', 'nama_sekolah', 'jurusan', 'tahun_awal', 'tahun_akhir', 'gpa'];
}
