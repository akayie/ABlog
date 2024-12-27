@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Items</h1>
                        <a href="{{route('backend.posts.create')}}" class="btn btn-primary float-end" >Create Item</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.index')}}">Items</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.posts.create')}}">Create Item</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts List
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.posts.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <table class="table table-bordered">
                                        

                                        <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" placeholder="" name="title">
                                        @error('title')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                       
                                         @error('image')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                                                        
                                        <div class="col-md-12 mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-select form-select-sm @error('category_id') is-invalid @enderror" value="{{old('category_id')}}" aria-label="category_id" name="category_id">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{old('category_id') == $category->id?'selected':''}}>{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="2" name="description">{{old('description')}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
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