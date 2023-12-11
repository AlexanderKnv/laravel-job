@extends('layout')

@section('title', 'Companies '.$company->title)

@section('content')

<form method="POST" action="{{ route('companies.update', $company->id) }}">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Name" value="{{$company->name}}" aria-label="Name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="col">
            <input name="address" type="text" class="form-control" placeholder="Address" value="{{$company->address}}" aria-label="Address">
            @error('address')
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
