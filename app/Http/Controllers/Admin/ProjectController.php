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
        $projects = Project::all();
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

        // Handle file upload if a file is provided
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filePath = $file->store('project_files'); // Store the file in the 'project_files' directory.
            $project->file_path = $filePath;
        }

        $project->save();

        // Redirect to the project index page or show a success message
        return redirect()->route('project')->with('success', 'project add successfully');

    }
}
