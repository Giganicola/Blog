@extends('main')

@section('title', '| View Post')

@section('content')

  <h1>{{ $post->title }}</h1>

  <div class="row">
    <div class="col-md-8">
        <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <label>Url:</label>
                <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
            </dl>
          
            <dl class="dl-horizontal">
                <label>Created at:</label>
                <p>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</p>
            </dl>
          
            <dl class="dl-horizontal">
                <label>Last updated:</label>
                <p>{{  date('M j, Y H:i', strtotime($post->updated_at ))}}</p>
            </dl>
            <hr>
            
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE' ])  !!}
                    
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    
                    {!! Form::close() !!}
                </div>
            </div>
          
            <div class="row">
                <div class="col-sm-12">
                    <hr>
                    {!! Html::linkRoute('posts.index', 'Show all Posts', array(), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
            </div>          
          
        </div>
    </div>
  </div>

@endsection