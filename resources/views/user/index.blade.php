@extends('layout')
@section('title', 'Users')
@section('content')
<a class="btn btn-primary" role="button" href="{{ route('users.create') }}">Create user</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Password</th>

        <th scope="col">Detailansicht</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

                <td><a type="button" class="btn btn-info" href="{{ route('users.show', $user->id) }}">Info</a></td>
                <td><a type="button" class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                            <div class="col">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <a href="{{ url('/') }}">Home</a>
@endsection
