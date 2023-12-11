@extends('layout')

@section('title', 'Jobs '.$job->name)

@section('content')
    <table class="table">
        <tbody>
                <tr>
                    <td>ID</th>
                    <td>{{$job->id}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$job->title}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$job->description}}</td>
                </tr>
        </tbody>
    </table>
    <a type="button" class="btn btn-warning" href="{{ route('jobs.edit', $job->id) }}">Edit</a>
@endsection
