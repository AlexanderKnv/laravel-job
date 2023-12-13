@extends('layout')

@section('title', 'Users '.$user->name)

@section('content')
    <table class="table">
        <tbody>
                <tr>
                    <td>ID</th>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{$user->role == 0 ? 'Admin' : 'Reader'}}</td>
                </tr>
        </tbody>
    </table>
    <a type="button" class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a>
@endsection
