@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Create</h1>
@stop

@section('content')
<div class="container">

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        
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
        <input type="file"  name="path">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Date</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="date">
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Title</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="category">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">link</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="link">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop