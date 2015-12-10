@extends('layouts.master')

@section('title')
    Edit your Pet
@stop

@section('head')
@stop

@section('intro')
<div class="output">
    <h2>Edit Your Pet</h2>
      <form method="post" action="/profile/edit">
        <div class="p1">
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <input type='hidden' value='{{ $pets->id }}' name='id'>
          <p>Name <input type="text" name="petName" value="{{ $pets->petName }}"></p>
          <p>Breed <input type="text" name="breed" value="{{ $pets->breed }}"></p>
          <img src='{{ $pets->photo }}' width="200px" height="200px">
          <p>Photo <input type="file" name="photo" value="{{ $pets->photo }}"></p>
          <button type="submit">Edit Pet</button>
        </div>
      </form>
</div>
@stop
