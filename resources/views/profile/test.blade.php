@extends('layouts.master')


@section('title')
    Your Profile
@stop


@section('head')
@stop


@section('intro')
<div class="output">
    <div>
       <h2>Hi {{ $user->name }}! Here you can delete this pet: </h2>
    </div>
  
</div>

@stop

@section('body')

@stop
