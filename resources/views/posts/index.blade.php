@extends('layouts.app')
@section('content')
    <h1>All posts</h1>
    <span>
        <a href="{{URL::to('posts/create')}}" class="btn btn-warning">Create Post</a>
    </span>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Owner</th>
                <th>Description</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{ URL::to('users/' . $post->user->id) }}">{{$post->user ? $post->user->name : "No owner"}}</a></td>
                       <td><a href="{{ URL::to('posts/' . $post->id . '/edit') }}">{{$post->title}}</a></td>
                        <td>{!!$post->body!!}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
                @else
                <tr>
                    <td><p>No posts found</p></td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>


@endsection

