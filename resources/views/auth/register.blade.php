@extends('layouts.master')


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop

@section('intro')
<h1>Register Your Pet</h1>
<h2>Please Enter Your Information</h2>
<div>
<form method="POST" action="/auth/register">
	{!! csrf_field() !!}
	<div class="regform">
    	<p>Name <input type="text" name="name" value="">
        Email <input type="email" name="email" value="{{ old('email') }}"></p>
        <p>Password <input type="password" name="password"></p>
        <p>Confirm Password <input type="password" name="password_confirmation"></p>
        <p>Address <input name="address" type="text" value="" size="50"></p>
        <p>Phone <input type="text" name="Phone" value=""></p><br /><br />
        <hr/>
  	</div>
    <div>
        <h1>Your Pets</h1>
        <div class="p1">
        	<h3>Pet1</h3>
           		<p>Name <input type="text" name="p1name" value=""></p>
        		<p>Breed <input type="text" name="p1breed" value=""></p>
        		<p>Photo <input type="file" name="p1photo" value=""></p>
        		<p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
        </div>
        <div class="p2">
        	<h3>Pet2</h3>
           		<p>Name <input type="text" name="p1name" value=""></p>
        		<p>Breed <input type="text" name="p1breed" value=""></p>
        		<p>Photo <input type="file" name="p1photo" value=""></p>
        		<p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
        </div>
        <div class="p3">
        	<h3>Pet3</h3>
           		<p>Name <input type="text" name="p1name" value=""></p>
        		<p>Breed <input type="text" name="p1breed" value=""></p>
        		<p>Photo <input type="file" name="p1photo" value=""></p>
        		<p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
        </div>
        <div class="p4">
        	<h3>Pet4</h3>
           		<p>Name <input type="text" name="p1name" value=""></p>
        		<p>Breed <input type="text" name="p1breed" value=""></p>
        		<p>Photo <input type="file" name="p1photo" value=""></p>
        		<p>Status:&nbsp;&nbsp; Home<input type="radio" name="home" value="Home" checked> Missing<input type="radio" name="missing" value="Missing"></p>
        </div>

        </div><br /><br />
        <button type="submit">Register</button>
</form>
</div>
@stop
