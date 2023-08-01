@extends('layouts.master')

@section('title', 'project dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">View Project</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> View Project</li>
    </ol>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Assign User</th>
                    <th>Assign Client</th>
                    <th>Deadline</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $projectData)
                    <tr>
                        <td>{{ $projectData->id }}</td>
                        <td>{{ $projectData->project_name }}</td>
                        <td>{{ $projectData->project_description }}</td>
                        <td>{{ $projectData->Assign_user }}</td>
                        <td>{{ $projectData->Assign_client }}</td>
                        <td>{{ $projectData->deadline }}</td>
                        <td>
                            @if($projectData->file_path)
                            <a href="{{ asset('files/' . $projectData->file_path) }}" download>Download File</a>
                        @else
                            No file uploaded
                        @endif
                        </td>

                        <td>
                            <div>
                                <a href="{{ route('client.edit', $projectData->id) }}" class="btn btn-primary"> Edit</a>
                                <a href="{{ route('client.delete', $projectData->id) }}" class="btn btn-danger"> Delete</a>
                            </div>

                        </td>
                        <!-- Add other columns here as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
