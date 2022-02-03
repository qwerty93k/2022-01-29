@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Article</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('articles.update', [$article])}}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value={{$article->title}} required autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="excerpt" class="col-md-4 col-form-label text-md-end">Excerpt</label>
    
                                <div class="col-md-6">
                                    <input id="excerpt" type="text" class="form-control" name="excerpt" value={{$article->excerpt}} required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value={{$article->description}} required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Category</label>
    
                                <div class="col-md-6">
                                    {{-- <input id="category_id" type="number" class="form-control" name="category_id" value={{$article->category_id}} required autofocus> --}}
                                    <select name="category_id" class="form-control">
                                        @foreach ($select_values as $articlecategory)
                                            <option value="{{$articlecategory->id}}">{{$articlecategory->title}}</option>                    
                                        @endforeach
                                    </select>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Image</label>
    
                                <div class="col-md-6">
                                    <input id="image_id" type="number" class="form-control" name="image_id" value={{$article->image_id}} required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="author" class="col-md-4 col-form-label text-md-end">Author</label>
    
                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" value={{$article->author}} required autofocus>
    
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <a class="btn btn-secondary" href="{{route('articles.index', [$article])}}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection