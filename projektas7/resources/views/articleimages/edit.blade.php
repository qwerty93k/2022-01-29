@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Article Image</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('articleimages.update', [$articleimage])}}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="alt" class="col-md-4 col-form-label text-md-end">Alt</label>
    
                                <div class="col-md-6">
                                    <input id="alt" type="text" class="form-control" name="alt" value="{{$articleimage->alt}}" required autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="src" class="col-md-4 col-form-label text-md-end">File</label>
    
                                <div class="col-md-6">
                                    <input id="src" type="file" class="form-control" name="src" value="{{$articleimage->src}}" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="width" class="col-md-4 col-form-label text-md-end">Width</label>
    
                                <div class="col-md-6">
                                    <input id="width" type="number" min="0" max="200" step="10" name="width" class="form-control" value="{{$articleimage->width}}" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="height" class="col-md-4 col-form-label text-md-end">Height</label>
    
                                <div class="col-md-6">
                                    <input id="height" type="number" min="0" max="200" step="10" name="height" class="form-control" value="{{$articleimage->height}}" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="class" class="col-md-4 col-form-label text-md-end">Class</label>
    
                                <div class="col-md-6">
                                    <input id="class" type="class" class="form-control" name="class" value="{{$articleimage->class}}" required autofocus>
    
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <a class="btn btn-secondary" href="{{route('articleimages.index', [$articleimage])}}">Back</a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection