@extends('layouts.master')

@section('title', 'user dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">View User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> View User</li>
    </ol>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $userData)
                    <tr>
                        <td>{{ $userData->id }}</td>
                        <td>{{ $userData->name }}</td>
                        <td>{{ $userData->email }}</td>
                        <td>
                            <div>
                                <a href="{{ route('client.edit', $userData->id) }}" class="btn btn-primary"> Edit</a>
                                <a href="{{ route('client.delete', $userData->id) }}" class="btn btn-danger"> Delete</a>
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
