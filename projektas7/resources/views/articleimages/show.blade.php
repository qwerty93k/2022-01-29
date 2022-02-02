@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article Image</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Alt</th>
                            <th>Image</th>
                            <th>Width</th>
                            <th>Height</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                            <tr>
                                <td>{{$articleimage->id}}</td>
                                <td>{{$articleimage->alt}}</td>
                                <td>{{$articleimage->src}}</td>
                                <td>{{$articleimage->width}}</td>
                                <td>{{$articleimage->height}}</td>
                                <td>{{$articleimage->class}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('articleimages.edit', [$articleimage])}}">Edit</a>
                                    <form method="post" action="{{route('articleimages.destroy', [$articleimage])}}">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                    <a class="btn btn-secondary" href="{{route('articleimages.index', [$articleimage])}}">Back</a>
                                </td>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection