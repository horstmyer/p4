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
        <a href='/profile/delete/{{$pets->id}}'><img src="/images/delete.png" width="100" height="40" alt=""/></a>
    </p>
</div>
@stop
@section('body')

@stop
