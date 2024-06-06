<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::get()->first();
        $experience = Experience::get()->last();
        $education = Education::get();
        $elast =Education::get()->last();
        $setting = Setting::GET()->last();
        return view('home.index', compact('profile', 'experience', 'education', 'setting', 'elast'));
    }
}
