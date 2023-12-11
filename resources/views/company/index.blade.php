@extends('layout')
@section('title', 'Companies')
@section('content')
<a class="btn btn-primary" role="button" href="{{ route('companies.create') }}">Create company</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Detailansicht</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{$company->id}}</th>
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td><a type="button" class="btn btn-info" href="{{ route('companies.show', $company->id) }}">Info</a></td>
                <td><a type="button" class="btn btn-warning" href="{{ route('companies.edit', $company->id) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
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
