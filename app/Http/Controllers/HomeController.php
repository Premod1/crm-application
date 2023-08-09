<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $loggedInUserEmail = Auth::user()->email;

        $project = Project::whereHas('assignedUser', function ($query) use ($loggedInUserEmail) {
            $query->where('email', $loggedInUserEmail);
        })->get();


        // $project = Project::all();
        return view('users.dashboard', compact('project'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');

    }
}
