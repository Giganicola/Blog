@extends('main')

@section('title', '| View Post')

@section('content')

  <h1>{{ $post->title }}</h1>

  <div class="row">
    <div class="col-md-8">
        <p class="lead">{!! $post->body !!}</p>
      
        <hr>
        
        <div class="tags">
          <label>Tags:</label>  
          @foreach ($post->tags as $tag)
              <span class="label label-default">{{ $tag->name }}</span>
          @endforeach
          <hr>
        </div>
      
        <div id="backend-comments" style="margin-top:50px;">
            <h3>Comments <small>{{ $post->comments()->count() }}</small></h3>
         
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th> 
                        <th>Comment</th>
                        <th width="70px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post->comments as $comment)  
                    <tr>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>
                            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <label>Url:</label>
                <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
            </dl>
          
            <dl class="dl-horizontal">
                <label>Category:</label>
                <p>{{ $post->category->name }}</p>
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