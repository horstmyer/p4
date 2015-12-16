@extends('layouts.master')

@section('title')
    Edit your Pet
@stop

@section('head')
@stop

@section('intro')
<div class="output">
    <h2>Edit Your Pet</h2>
    <p>If you prefer to email <script type="text/javascript">
  document.write("<a href=\"mail" + "to:" + new Array("doodledog1","gmail.com").join("@") + "\">" + "MSCC Pets" + "</" + "a>");
    </script> a photo, we can upload it for you!</p>
      <form method="post" action="/profile/edit">
        <div class="p1">
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <input type='hidden' value='{{ $pets->id }}' name='id'>
          <p>Name <input type="text" name="petName" value="{{ $pets->petName }}"></p>
          <p>Breed <input type="text" name="breed" value="{{ $pets->breed }}"></p>
          <img src='{{ $pets->photo }}' width="200" height="200">
          <p>Photo URL <input type="url" name="photo" value="{{ $pets->photo }}"></p>
          <button type="submit"><img src="/images/edit.png" width="100" height="40" alt="Edit"/></button>
        </div>
      </form>
</div>
@stop
