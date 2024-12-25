@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                        <div class="my-3">
                        <h1 class="mt-4 d-inline">Posts</h1>
                        <a href="{{route('backend.posts.create')}}" class="btn btn-primary float-end">Create Post</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.index')}}">Posts</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.create')}}">Create Post</a></li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Image</th>                                            <th>Category</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                           <th>Image</th>
                                            <th>Category</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$post->title}}</td>
                                            <td> {{$post->image}}</td>
                                            <td> {{$post->category_id}}</td>
                                            <td>
                                            <a href="{{route('backend.posts.edit',$post->id)}}"class="btn btn-sm btn-warning">Edit</a>
                                             <button type="button" class="btn btn-sm btn-danger delete" data-id="{{$post->id}}">Delete</button>
                                       </td>   
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$posts->links()}}
                            </div>
                         </div>
                    </div>
@endsection