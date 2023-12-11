@extends('layout')

@section('title', 'Category '.$category->title)

@section('content')
    <table class="table">
        <tbody>
                <tr>
                    <td>ID</th>
                    <td>{{$category->id}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$category->title}}</td>
                </tr>
        </tbody>
    </table>
    <a type="button" class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">Edit</a>
@endsection
