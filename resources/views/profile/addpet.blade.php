
@extends('layouts.master')


@section('title')
    Your Profile
@stop

@section('login')
<div class="colr">
<h2>Hi {{ $user->name }}! </h2>
</div>
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
       <p>Please provide a link(URL) to a photo for your pet.</p>
       <p>If you prefer to email <script type="text/javascript">
     document.write("<a href=\"mail" + "to:" + new Array("doodledog1","gmail.com").join("@") + "\">" + "MSCC Pets" + "</" + "a>");
       </script> a photo, we can upload it for you!</p>
       @if(count($errors) > 0)
					<ul class='errors'>
					@foreach ($errors->all() as $error)
						<li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
					@endforeach
					</ul>
	  	@endif
  		<p><button type="submit"><img src="/images/submit.png" width="100" height="40" alt=""/></button></p>
    </div>
	</form>

</div>
@stop
@section('buttons')
<h3>Hi {{ $user->name }}! </h3>
@stop


@section('body')

@stop
