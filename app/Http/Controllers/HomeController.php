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
        $experience = Experience::get();
        $explast = Experience::get()->last();
        $educations = Education::get();
        $edlast = Education::get()->last();
        $setting = Setting::GET()->last();
        return view('home.index', compact('profile', 'experience', 'educations', 'setting', 'edlast', 'explast'));
    }
}
