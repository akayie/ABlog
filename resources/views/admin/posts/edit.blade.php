@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Edit Item</h1>
                        <a href="{{route('backend.posts.index')}}" class="btn btn-danger float-end" >Cancel</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.index')}}">Posts</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.create')}}">Edit Post</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Posts 
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                        <table class="table table-bordered">
                                        

                                        <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$post->title}}" id="title" placeholder="" name="title">
                                        @error('title')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="imageimage-tab" data-bs-toggle="tab" data-bs-target="#imageimage-tab-pane" type="button" role="tab" aria-controls="imageimage-tab-pane" aria-selected="true">Image</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                                <img src="{{$post->image}}" alt="" class="w-25 h-25 my-3">
                                                <input type="hidden" name="old_image" id="" value="{{$post->image}}">
                                            </div>
                                            <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                                            <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                                       
                                            </div>
                                        </div>
                                        
                                         @error('image')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="2" name="description">{{$post->description}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        
                                        <div class="col-md-12 mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-select form-select-sm @error('category_id') is-invalid @enderror" aria-label="category_id" name="category_id">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$post->category_id  == $category->id?'selected':''}}>{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                    
                                    </div>
                                   
                                    <button class="w-100 btn btn-warning" type="submit">Update</button>
                                    </div>
                                    
                                </form>
                                </div>
                                </table>
                         
                            </div> 
                        </div>
                    </div>

@endsection