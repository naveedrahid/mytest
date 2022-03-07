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
                        
                    <h2>
                        {{$post_row->post_title}}
                    </h2>
                    <p class="lead">
                        by <a href="index.php">{{$post_row->post_author}}</a><br>
                        <small>Category</small> {{ $post_row->category->cat_title }}
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post_row->created_at}}</p>
                    <hr>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>{{$post_row->post_content}}</p>
            </div>

 
 
            @endsection