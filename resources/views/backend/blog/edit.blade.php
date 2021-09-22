@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
        @method("put")

        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="path"
            value="{{ $blog->path }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">date</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="date"
            value="{{ $blog->date }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title"
            value="{{ $blog->title }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="category"
            value="{{ $blog->category }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="link"
            value="{{ $blog->link }}">
        </div>
                

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop
