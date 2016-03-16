<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Project;
use App\PersonalDetail;
use App\Education;
use App\Certification;
use App\Skill;
use App\Position;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['detail'] = PersonalDetail::first();
        $data['positions'] = Position::where('enable', true)->get();
        $data['projects'] = Project::where('enable', true)->get();
        $data['educations'] = Education::where('enable', true)->get();
        $data['skills'] = Skill::where('enable', true)->get();
        $data['certifications'] = Certification::where('enable', true)->get();
        return view('home', $data);
    }
}
