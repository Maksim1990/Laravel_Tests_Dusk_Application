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
                <th>Owner</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{ URL::to('users/' . $post->user->id . '/edit') }}">{{$post->user ? $post->user->name : "No owner"}}</a></td>
                        <td><a href="{{ URL::to('posts/' . $post->id . '/edit') }}">{{$post->title}}</a></td>
                        <td>{!!$post->body!!}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
            </tbody>
        </table>
    </div>


@endsection

