@extends('layouts.master')


@section('title')
    Sign Up
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('intro')
<div class="output">
    <h2>Edit Your Information</h2>
    <p>Please edit your details:</p>
    <form method="POST" action="/register">
<div class="regform">
    <p>Name <input type="text" name="name" value="">
      Email <input type="email" name="email" value="{{ old('email') }}"></p>
      <p>Password <input type="password" name="password"></p>
      <!--<p>Confirm Password <input type="password" name="password_confirmation"></p>-->
      <p>Address <input name="address" type="text" value="" size="50"></p>
      <p>Phone <input type="text" name="phone" value=""></p><br /><br />
      <button type="submit">Register</button>
  </div>
  </form>
  </div>
  <hr />
  <div>
  <form method="POST" action="/addpet">
    <h1>Your Pets</h1>
    <div class="p1">
      <h3>Pet1</h3>
          <p>Name <input type="text" name="p1name" value=""></p>
        <p>Breed <input type="text" name="p1breed" value=""></p>
        <p>Photo <input type="file" name="p1photo" value=""></p>
        <p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
            <button type="submit">Add Pet</button>
    </div>
    </form>
    <form method="POST" action="/addpet">
    <div class="p2">
      <h3>Pet2</h3>
          <p>Name <input type="text" name="p1name" value=""></p>
        <p>Breed <input type="text" name="p1breed" value=""></p>
        <p>Photo <input type="file" name="p1photo" value=""></p>
        <p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
            <button type="submit">Add Pet</button>
    </div>
    </form>
    <form method="POST" action="/addpet">
    <div class="p3">
      <h3>Pet3</h3>
              <p>Name <input type="text" name="p1name" value=""></p>
        <p>Breed <input type="text" name="p1breed" value=""></p>
        <p>Photo <input type="file" name="p1photo" value=""></p>
        <p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
            <button type="submit">Add Pet</button>
    </div>
    </form>
    <form method="POST" action="/addpet">
    <div class="p4">
      <h3>Pet4</h3>
          <p>Name <input type="text" name="p1name" value=""></p>
        <p>Breed <input type="text" name="p1breed" value=""></p>
        <p>Photo <input type="file" name="p1photo" value=""></p>
        <p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
    </div>

    </div><br /><br />
    <button type="submit">Add Pet</button>
</form>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
