<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $user = User::where('id', '=', $user)->get()->first();
        if($user->role_id == 1)
        {
            $student = $user->student;
            $courses = $student->courses;
        }
        else if($user->role_id == 2)
        {
            $teacher = $user->teacher;
            $courses = $teacher->courses;
        }
        return view('home', [
            'courses' => $courses
        ]);
    }
}
