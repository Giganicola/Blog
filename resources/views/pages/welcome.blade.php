@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to the blog</h1>
              <p class="lead">Thank you for visiting</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>  

    <div class="row"> 
        <div class="col-md-8">  
            <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem quo autem magnam voluptate in consequatur similique, impedit porro nam ullam reprehenderit dicta adipisci nulla saepe quos, earum rerum minima.</p>
            <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>  

            <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem quo autem magnam voluptate in consequatur similique, impedit porro nam ullam reprehenderit dicta adipisci nulla saepe quos, earum rerum minima.</p>
            <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem quo autem magnam voluptate in consequatur similique, impedit porro nam ullam reprehenderit dicta adipisci nulla saepe quos, earum rerum minima.</p>
            <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
            <h3>Post title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quidem quo autem magnam voluptate in consequatur similique, impedit porro nam ullam reprehenderit dicta adipisci nulla saepe quos, earum rerum minima.</p>
            <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection