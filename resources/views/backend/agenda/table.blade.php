@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="text-center m-2">
        <h1>Agenda</h1>
    </div>

    <livewire:calendar />

</div>
@stop

