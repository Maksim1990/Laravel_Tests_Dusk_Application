@extends('layouts.app')
@section ('content')
    <div>
        <p >Create Post</p>

        {!! Form::open(['method'=>'POST','action'=>'PostController@store', 'files'=>true])!!}
        <div class="group-form">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control','id'=>'title']) !!}
        </div>

        <div class="group-form">
            {!! Form::label('body','Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control','id'=>'body']) !!}
        </div>



        {!! Form::submit('Create Post',['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::close() !!}

@stop
