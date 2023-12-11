@extends('layout')

@section('title', 'Companies '.$company->name)

@section('content')
    <table class="table">
        <tbody>
                <tr>
                    <td>ID</th>
                    <td>{{$company->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$company->name}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$company->address}}</td>
                </tr>
        </tbody>
    </table>
    <a type="button" class="btn btn-warning" href="{{ route('companies.edit', $company->id) }}">Edit</a>
@endsection
