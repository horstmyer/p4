@extends('layouts.master')

@section('title')
    Delete Your Pet
@stop

@section('head')
@stop

@section('intro')
<div class="output">
    <h1>Delete Pet</h1>

    <p>
        Are you sure you want to delete <em>{{$pets->petName}}</em>?
    </p>

    <p>
        <a href='/profile/delete/{{$pets->id}}'>Yes...</a>
    </p>
</div>
@stop
@section('body')

@stop
