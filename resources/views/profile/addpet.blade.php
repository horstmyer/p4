
@extends('layouts.master')


@section('title')
    Your Profile
@stop


@section('head')
@stop

@section('intro')
<div class="output">
	<form method="POST" action="/profile/addpet">
		{!! csrf_field() !!}
			<div class="regform">
    			<p>Pet Name <input type="text" name="petName" value=""></p>
      			<p>Breed <input type="text" name="breed"></p>
      			<p>Photo URL <input type="url" name="photo" value=""></p>
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
@stop


@section('body')

@stop
