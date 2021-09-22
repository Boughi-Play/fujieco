@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit</h1>
@stop

@section('content')
    <form action="/video/{{ $video->id }}" method="POST" enctype="multipart/form-data">
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
            <label for="exampleInputPassword1">Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title"
            value="{{ $video->title }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Subtitle</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="subtitle"
            value="{{ $video->subtitle }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="category"
            value="{{ $video->category }}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="link"
            value="{{ $video->link }}">
        </div>
                

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @stop
