@extends('main')

@section('title', '| All Categories')

@section('content')

  <div class="row">
      
    <div class="col-md-8">
        <h1>Tags</h1>
         <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $tags as $tag )
                <tr>
                    <th>{{ $tag->id }}</th>
                    <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                </tr>
                @endforeach
            </tbody>           
         </table>
    </div>
    
    <div class="col-md-3">
        <div class="well">
            <h2>New Tag</h2>
            {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                <br>
                {{ Form::submit('Create new tag', ['class' => 'btn btn-primary btn-block']) }}
            {!! Form::close() !!}
        </div>
    </div>
    
  </div>

@stop