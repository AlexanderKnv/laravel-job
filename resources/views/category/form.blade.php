@extends('layout')

@section('title', 'Categories')

@section('content')

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Title">
            @error('title')
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
