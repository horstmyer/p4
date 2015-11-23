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
<h2>Your Profile</h2>
<form method="POST" action="/auth/register">
    	Name
        <input type="text" name="name" value="{{ old('name') }}"><br />
        Email
        <input type="email" name="email" value="{{ old('email') }}"><br />
        Password
        <input type="password" name="password"><br />
        Confirm Password
        <input type="password" name="password_confirmation"><br />
        <br />
        Address
        <input type="text" name="address" value="{{ old('name') }}"><br />
        Phone
        <input type="text" name="Phone" value="{{ old('name') }}"><br /><br />
        <h2>Your Pets</h2>
        <h3>Pet1</h3>Name
        <input type="text" name="p1name" value="{{ old('name') }}">
        Breed
        <input type="text" name="p1breed" value="{{ old('name') }}">
        Upload Photo
        <input type="file" name="p1photo" value="{{ old('name') }}">
        Status:&nbsp;&nbsp;
        Home<input type="radio" name="home" value="Home" checked>
        Missing<input type="radio" name="missing" value="Missing">
      	<h3>Pet2</h3>Name
        <input type="text" name="p2name" value="{{ old('name') }}">
        Breed
        <input type="text" name="p2breed" value="{{ old('name') }}">
        Upload Photo
        <input type="file" name="p2photo" value="{{ old('name') }}">
        Status:&nbsp;&nbsp;
        Home<input type="radio" name="home" value="Home" checked>
        Missing<input type="radio" name="missing" value="Missing">
        <h3>Pet3</h3>Name
        <input type="text" name="p3name" value="{{ old('name') }}">
        Breed
        <input type="text" name="p3breed" value="{{ old('name') }}">
        Upload Photo
        <input type="file" name="p3photo" value="{{ old('name') }}">
        Status:&nbsp;&nbsp;
        Home<input type="radio" name="home" value="Home" checked>
        Missing<input type="radio" name="missing" value="Missing">
        <h3>Pet4</h3>Name
        <input type="text" name="p1name" value="{{ old('name') }}">
        Breed
        <input type="text" name="p1breed" value="{{ old('name') }}">
        Upload Photo
        <input type="file" name="p1photo" value="{{ old('name') }}">
        Status:&nbsp;&nbsp;
        Home<input type="radio" name="home" value="Home" checked>
        Missing<input type="radio" name="missing" value="Missing"> <br /><br />
        <button type="submit">Submit</button>
</form>
@stop
