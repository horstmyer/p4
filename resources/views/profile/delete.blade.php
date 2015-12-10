@extends('layouts.master')

@section('title')
    Delete Pet
@stop


@section('intro')

    <h1>Delete Pet</h1>

    <p>
        Are you sure you want to delete <em>{{$pets->petName}}</em>?
    </p>

    <p>
        <a href='/profile/delete/{{$pets->id}}'>Yes...</a>
    </p>

@stop
