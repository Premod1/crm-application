@extends('layouts.master')

@section('title', 'user dashboard')


@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Client</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Client</li>
    </ol>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $clientData)
                    <tr>
                        <td>{{ $clientData->id }}</td>
                        <td>{{ $clientData->name }}</td>
                        <td>{{ $clientData->email }}</td>
                        <td>{{ $clientData->phone }}</td>
                        <td>{{ $clientData->description }}</td>
                        <td>
                            <div>
                                <a href="{{ route('client.edit', $clientData->id) }}" class="btn btn-primary"> Edit</a>
                                <a href="{{ route('client.delete', $clientData->id) }}" class="btn btn-danger"> Delete</a>
                            </div>

                        </td>
                        <!-- Add other columns here as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>

            {{ $client->links('pagination::bootstrap-4') }}


    </div>
</div>
@endsection
