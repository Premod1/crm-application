@extends('layouts.usermaster')

@section('title', 'user dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Projects</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">All Projects</li>
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

                </tr>
            </thead>
            <tbody>
                @foreach ($project as $projectData)
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

                        <!-- Add other columns here as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
