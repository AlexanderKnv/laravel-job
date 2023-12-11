@extends('layout')
@section('title', 'Categories')
@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('categories.create') }}">Create category</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Detailansicht</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->title}}</td>
                <td><a type="button" class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Info</a></td>
                <td><a type="button" class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
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
