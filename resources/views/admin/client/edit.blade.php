@extends('layouts.master')

@section('title', 'Client Dashboard')


@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Client</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Edit Client</li>
    </ol>
    <div class="row">

        <form action="{{ route('client.store') }}" method="POST">
            @csrf
        <div class="form-group">
            <label  class="form-label">name</label>
            <input type="text" value="{{ $client->name }}" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label  class="form-label">Email</label>
            <input type="email" value="{{ $client->email }}" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label  class="form-label">Phone Number</label>
            <input type="number" value="{{ $client->phone }}" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label  class="form-label">Description</label>
            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="10">{{ $client->description }}</textarea>
        </div>
        <br />
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary " value="save">Update</button>
        </div>


    </form>

    </div>
</div>
@endsection
