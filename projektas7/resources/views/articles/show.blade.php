@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Article Title</th>
                            <th>Excerpt</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Author Image</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->excerpt}}</td>
                                <td>{{$article->description}}</td>
                                <td>{{$article->category_id}}</td>
                                <td>{{$article->image_id}}</td>
                                <td>{{$article->author}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('articles.edit', [$article])}}">Edit</a>
                                    <form method="post" action="{{route('articles.destroy', [$article])}}">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                    <a class="btn btn-secondary" href="{{route('articles.index', [$article])}}">Back</a>
                                </td>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection