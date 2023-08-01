@extends('layouts.master')

@section('title', 'user dashboard')


@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Create User</li>
    </ol>
    <div class="row">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label  class="form-label">User Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label  class="form-label">User Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br />
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary " value="save">Save</button>
            </div>

        </form>
    </div>
</div>
@endsection
