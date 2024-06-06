<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nama', 'tgl_lahir', 'telpon', 'alamat', 'usia', 'deskripsi', 'email', 'twitter_link', 'facebook_link', 'instagram_link', 'linkedin_link'
    ] ;
    use HasFactory;


}
