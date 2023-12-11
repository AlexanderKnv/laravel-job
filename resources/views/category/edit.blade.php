@extends('layout')

@section('title', 'Category '.$category->title)

@section('content')

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <input name="title" type="text" class="form-control" placeholder="Title" value="{{$category->title}}" aria-label="Title">
            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </div>
</form>

@endsection
