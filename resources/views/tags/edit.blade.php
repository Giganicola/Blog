@extends('main')

@section('title', '| Edit Tag')

@section('content')

    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
        {{ Form::label('name', 'Title:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        <br>
        {{ Form::submit('Save changes', ['class' => 'btn btn-success']) }}
        {{ Form::submit('Cancel', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@stop