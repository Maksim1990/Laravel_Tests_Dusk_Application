@extends('layouts.app')
@section('content')
    <h1>All posts</h1>
    <span>
        <a href="{{URL::to('posts/create')}}" class="btn btn-warning">Create Post</a>
    </span>
    <span>
        <a href="{{URL::to('posts')}}" class="btn btn-success">All Posts</a>
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
            @if(count($users)>0)
                @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{ URL::to('users/' . $user->id) }}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
                @endforeach
            @else
                <tr>
                    <td><p>No users found</p></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>


@endsection

