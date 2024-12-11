@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Posts</h1>
                        <a href="{{route('backend.posts.create')}}" class="btn btn-primary float-end" >Create Post</a>
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
                                <form action="{{route('backend.posts.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                        <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="" name="title">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                        </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-select form-select-sm" aria-label="category_id" name="category_id">
                                            <option selected>Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                                        </div>
                                    </div>
                                   
                                    <button class="w-100 btn btn-primary" type="submit">Save</button>
                                    </div>
                                    
                                </form>
                                </div>
                                </table>
                         
                            </div> 
                        </div>
                    </div>
@endsection