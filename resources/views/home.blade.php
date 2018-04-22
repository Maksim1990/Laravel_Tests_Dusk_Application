@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
                <div>
                    <span>
        <a href="{{URL::to('posts/create')}}" class="btn btn-warning">Create Post</a>
    </span>
                    <span>
        <a href="{{URL::to('posts')}}" class="btn btn-success">All Posts</a>
    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
