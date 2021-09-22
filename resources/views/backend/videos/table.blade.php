@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="text-center m-2">
        <h1>Video</h1>
        <a href="{{ route('video.create') }}" class="btn btn-primary"> Create</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fixed Header Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>title</th>
                                <th>subtitle</th>
                                <th>link</th>
                                <th>photo</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->title }}</td>
                                    <td>{{ $e->subtitle }}</td>
                                    <td>{{ $e->category }}</td>
                                    <td>{{ $e->link }}</td>
                                    <td class="d-flex">
                                        <a href="/video/{{ $e->id }}/edit" class="btn btn-success">Edit</a>

                                        <form action="/video/{{ $e->id }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-danger ml-2" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


</div>
@stop
