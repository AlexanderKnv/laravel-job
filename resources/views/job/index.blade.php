@extends('layout')
@section('title', 'Jobs')
@section('content')
<a class="btn btn-primary" role="button" href="{{ route('jobs.create') }}">Create job</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Category title</th>
        <th scope="col">Company name</th>

        <th scope="col">Detailansicht</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobs as $job)
            <tr>
                <th scope="row">{{$job->id}}</th>
                <td>{{$job->title}}</td>
                <td>{{$job->description}}</td>
                <td>
                    @foreach($categories as $category)
                    {{ $category->id == $job->category_id ? $category->title : '' }}
                    @endforeach
                </td>
                <td>
                    @foreach($companies as $company)
                    {{ $company->id == $job->company_id ? $company->name : '' }}
                    @endforeach
                </td>

                <td><a type="button" class="btn btn-info" href="{{ route('jobs.show', $job->id) }}">Info</a></td>
                <td><a type="button" class="btn btn-warning" href="{{ route('jobs.edit', $job->id) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('jobs.destroy', $job->id) }}">
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
