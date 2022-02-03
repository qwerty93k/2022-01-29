@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Articles</div>
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
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->excerpt}}</td>
                                <td>{{$article->description}}</td>
                                <td>{{$article->article_category->title}}</td>
                                <td>{{$article->image_id}}</td>
                                <td>{{$article->author}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('articles.edit', [$article])}}">Edit</a>
                                    <a class="btn btn-secondary" href="{{route('articles.show', [$article])}}">Show</a>
                                    <form method="post" action="{{route('articles.destroy', [$article])}}">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection