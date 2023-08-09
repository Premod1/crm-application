<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.project.index',compact('projects'));
    }
    public function create()
    {
        $clients = Client::all();
        $users = User::all();
        return view('admin.project.create', ['clients'=>$clients,'users'=>$users]);
    }
    public function store(Request $request)
    {

        $project = new Project();
        $project->project_name = $request->input('project_name');
        $project->project_description = $request->input('project_description');
        $project->Assign_user = $request->input('Assign_user');
        $project->Assign_client = $request->input('Assign_client');
        $project->deadline = $request->input('deadline');
        $project->user_id = $request->input('Assign_user');
        $project->client_id = $request->input('Assign_client');


        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filename = time() . '.' . $file->extension();
            $file->move(public_path('files'), $filename);
            $project->file_path = $filename;
        }


        $project->save();

        // Redirect to the project index page or show a success message
        return redirect()->route('project')->with('success', 'project add successfully');

    }
}
