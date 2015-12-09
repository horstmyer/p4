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
<form method="POST" action="/register">
	{!! csrf_field() !!}
	<div class="regform">
    	<p>Name <input type="text" name="name" value="">
        Email <input type="email" name="email" value="{{ old('email') }}"></p>
        <p>Password <input type="password" name="password"></p>
        <p>Confirm Password <input type="password" name="password_confirmation"></p>
        <p>Address <input name="address" type="text" value="" size="50"></p>
        <p>Phone <input type="text" name="phone" value=""></p><br /><br />
        <hr/>
  	</div>
		@if(count($errors) > 0)
		<ul class='errors'>
		@foreach ($errors->all() as $error)
			<li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
		@endforeach
		</ul>
	@endif

        </div><br /><br />
        <button type="submit">Register</button>
</form>
</div>
@stop
