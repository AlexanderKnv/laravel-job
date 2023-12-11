@extends('layout')

@section('title', 'Companies')

@section('content')

<form method="POST" action="{{ route('companies.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col">
            <input name="address" type="text" class="form-control" placeholder="Address" aria-label="Address">
            @error('address')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
</form>

@endsection
