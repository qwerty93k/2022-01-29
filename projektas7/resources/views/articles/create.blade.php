@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Article</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('article.store')}}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" required autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="excerpt" class="col-md-4 col-form-label text-md-end">Excerpt</label>
    
                                <div class="col-md-6">
                                    <input id="excerpt" type="text" class="form-control" name="excerpt" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Category</label>
    
                                <div class="col-md-6">
                                    <input id="category_id" type="number" class="form-control" name="category_id" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Image</label>
    
                                <div class="col-md-6">
                                    <input id="image_id" type="number" class="form-control" name="image_id" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="author" class="col-md-4 col-form-label text-md-end">Author</label>
    
                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" required autofocus>
    
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection