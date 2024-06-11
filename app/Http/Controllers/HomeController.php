<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Setting;
use App\Models\Certification;
use App\Models\Skill;
use Illuminate\Http\Request;

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
        $certifications = Certification::get();
        $skills = Skill::get();
        return view('home.index', compact('profile', 'experience', 'educations', 'setting', 'edlast', 'explast', 'certifications', 'skills'));
    }
}
