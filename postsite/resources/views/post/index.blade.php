@extends('layout.master')
@section('content')
    


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                @if (count($posts) > 0)
                    @foreach ($posts as $key => $singlepost)
                        
                    <h2>
                        <a href="{{route('post_detail', ['post_id' => $singlepost->post_id])}}">{{$singlepost->post_title}}</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">{{$singlepost->post_author}}</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$singlepost->created_at}}</p>
                    <hr>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>{{$singlepost->post_content}}</p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    
                    @endforeach
                @endif
                    <hr>
                    
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="previous">
                            <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

 
 
            @endsection