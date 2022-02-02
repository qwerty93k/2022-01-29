@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Categories</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($articlecategories as $articlecategory)
                            <tr>
                                <td>{{$articlecategory->id}}</td>
                                <td>{{$articlecategory->title}}</td>
                                <td>{{$articlecategory->description}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('articlecategories.edit', [$articlecategory])}}">Edit</a>
                                    <a class="btn btn-secondary" href="{{route('articlecategories.show', [$articlecategory])}}">Show</a>
                                    <form method="post" action="{{route('articlecategories.destroy', [$articlecategory])}}">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        <a class="btn btn-secondary" href="{{route('articlecategories.index', [$articlecategory])}}">Back</a>
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