@extends('layouts.master')

@section('head')
	Please Register
@stop

@section('intro')
<div class="output">
	<h2>Please Enter Your Information</h2>
	<div>
	<form method="POST" action="/register">
		{!! csrf_field() !!}
			<div class="regform">
    			<p>Name <input type="text" name="name" value="{{ old('name') }}"></p>
        		<p>Email <input type="email" name="email" value="{{ old('email') }}"></p>
        		<p>Password <input type="password" name="password"></p>
        		<p>Confirm Password <input type="password" name="password_confirmation"></p>
        		<p>Address <input name="address" type="text" size="50" value="{{ old('address') }}"></p>
        		<p>Phone <input type="text" name="phone" value="{{ old('phone') }}"></p>
				@if(count($errors) > 0)
					<ul class='errors'>
						@foreach ($errors->all() as $error)
							<li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
						@endforeach
					</ul>
				@endif
    			<button type="submit"><img src="/images/submit.png" width="100" height="40" alt=""/></button>
                </div>
	</form>
</div>
</div>
@stop
@section('body')
@stop
