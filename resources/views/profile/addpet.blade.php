@extends('layouts.master')


@section('title')
    Your Profile
@stop


@section('head')
@stop

@section('intro')
<form method="POST" action="/profile/addpet">
	{!! csrf_field() !!}
	<div class="regform">
    	<p>Pet Name <input type="text" name="petName" value="">
      <p>Breed <input type="text" name="breed"></p>
      <p>Photo <input type="file" name="photo" value=""></p>
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
  <button type="submit">Add your Pet</button>
</form>

@stop


@section('body')

@stop
