@extends('layouts.front')
@section('content')

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">A Blog</h1>
                    <p class="lead mb-0">My next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                  @if($feature_post)
                       <img class="card-img-top" src="{{ $feature_post->image }}"  class="w-75 h-75" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$feature_post->created_at }}</div>
                            <h2 class="card-title">{{$feature_post->title }}</h2>
                            <p class="card-text">{{$feature_post->description}}</p>
                            <a class="btn btn-primary" href="{{ route('post',$feature_post->id) }}">Read more →</a>
                        </div>
                    </div>
                @endif
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{$post->image}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->timestamp}}</div>
                                    <h2 class="card-title h4">{{$post->title}}</h2>
                                    <p class="card-text">{{$post->description}}</p>
                                    <a class="btn btn-primary" href="{{route('post',$post->id)}}">Read more →</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{$posts->links()}}
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    Side widget
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
@endsection    