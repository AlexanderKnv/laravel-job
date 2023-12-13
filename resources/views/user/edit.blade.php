@extends('layout')

@section('title', 'Users '.$user->name)

@section('content')

<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Name" value="{{$user->name}}" aria-label="Name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col">
            <input name="email" type="email" class="form-control" placeholder="E-Mail" value="{{$user->email}}" aria-label="E-Mail">
            @error('email')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mt-4">
            <label for="role">Select role</label>
            <select class="form-select" aria-label="Select role" name="role">
                @foreach($roles as $id => $role)
                    <option value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>{{$role}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </div>
</form>

@endsection
