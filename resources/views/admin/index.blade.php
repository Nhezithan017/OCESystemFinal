@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
        <button type="button" class="btn btn-sucess" href="{{ route('register') }}">+ Add User</button>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $u)
                    <tr>
                    <td>{{ $u->name}}<td>
                        <td>{{ $u->email}}</td>
                        <td>{{ $u->end_user}}</td>
                        <td><button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button></td>
                 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection