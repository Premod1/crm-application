@extends('layouts.master')

@section('title', 'project dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Project</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Update Project</li>
    </ol>
    <div class="row">
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label  class="form-label">Project Name</label>
                <input type="text" value="{{ $project->project_name }}" name="project_name" class="form-control">
            </div>
            <div class="form-group">
                <label  class="form-label">Project Description</label>
                <textarea class="form-control"  name="project_description" id="exampleFormControlTextarea1" rows="10">{{ $project->project_description }}</textarea>
            </div>
            <div class="form-group mt-3 mb-3">
                <select class="form-select" name="Assign_user" aria-label="Default select example">
                    <option value="" selected>Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $project->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>



            <div class="form-group mt-3 mb-3">
                <select class="form-select" name="Assign_client" aria-label="Default select example">
                    <option value="" selected>Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $project->client_id == $client->id ? 'selected' : '' }}>
                            {{ $client->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label  class="form-label">Deadline</label>
                <input type="date" value="{{ $project->deadline }}" name="deadline" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="formFile" class="form-label">Project file</label>
                <input class="form-control" name="file_path" type="file" id="formFile">
                @if ($project->file_path)
                    <p>Current File: {{ $project->file_path }}</p>

                @else
                    <p>No file uploaded.</p>
                @endif
            </div>


              <br />
              <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary " value="save">Update</button>
              </div>
        </form>
    </div>
</div>
@endsection




