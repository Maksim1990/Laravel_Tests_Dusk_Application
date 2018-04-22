@extends('layouts.app')
@section('content')
    <h1>All posts</h1>
    <span>
        <a href="{{URL::to('posts/create')}}" class="btn btn-warning">Create Post</a>
    </span>
    <span>
        <a href="{{URL::to('posts')}}" class="btn btn-success">All Posts</a>
    </span>
    <span>
        <a href="{{URL::to('users')}}" class="btn btn-info">All Users</a>
    </span>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection

