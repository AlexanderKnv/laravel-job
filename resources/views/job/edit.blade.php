@extends('layout')

@section('title', 'Jobs '.$job->title)

@section('content')

<form method="POST" action="{{ route('jobs.update', $job->id) }}">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <input name="title" type="text" class="form-control" placeholder="Title" value="{{$job->title}}" aria-label="Title">
            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col">
            <input name="description" type="text" class="form-control" placeholder="Description" value="{{$job->description}}" aria-label="Description">
            @error('description')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="mt-4">
        <label for="category_id">Select category</label>
        <select class="form-select" aria-label="Select category" name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{ $category->id == $job->category_id ? 'selected' : '' }}>{{$category->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="company_id">Select company</label>
        <select class="form-select" aria-label="Select company" name="company_id">
            @foreach($companies as $company)
                <option value="{{$company->id}}" {{ $company->id == $job->company_id ? 'selected' : '' }}>{{$company->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </div>
</form>

@endsection
