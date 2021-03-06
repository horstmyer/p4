@extends('layouts.master')

@section('head')
@stop


@section('login')
<div class="colr">
    <h2><img src="/images/paws.gif" width="25" height="22" alt="Dog Paws"/>Sign In<img src="images/paws.gif" width="25" height="22" alt="Dog Paws"/></h2>
    <form method="POST" action="/login">
    {!! csrf_field() !!}
    <p>Email <input type="email" name="email" ><br />
      Password <input type="password" name="password" id="password" size="15">
      Remember Me<input type="checkbox" name="remember">
      <button type="submit">Login</button></p>
    </form>
</div>
@stop

@section('intro')
      <h1>Register Your Pets!</h1>
      <div class="coll">
        <p><img src="/images/pups.gif" width="210" height="140" alt="Puppies"/> Welcome to the MSCC website for registration of your pets!</p>
    <p>Nothing is more stressful and frightening than when your dog or cat goes missing.  This is your CHILD that is missing!  They are likely in the neighborhood, but you want to get them back fast.</p>
    <img class="imgr" src="images/cats.png" width="200" height="150" alt="Cats"/>
    <p>Our website will begin with Phase One and we will offer registration for your pets and notices of missing pets on the home page. Also, when you register your pet as missing, you can generate a PDF that can be downloaded and copied for distribution.  You can email us if you see any of the pets below.</p>
    <p>Phase Two is very exciting!  When you register your pet here, we can help you get your pet home as quickly as possible by providing an additional tool that will aid in your search.  When you report your pet as missing on this website, we immediately send an email to all subscribers that contains a photo of your pet and your contact information. </P>
    <p>Thank you and check back often for future enhancements!</p>
      </div>
@stop

@section ('buttons')
<div class="output">
@if($pets->count() == 0)
  No pets
@else
  @foreach($pets as $pet)
  <div class="misspet">
    <h2>MISSING</h2>
    <h3>{{ $pet->petName }}</h3>
        <p><img src='{{ $pet->photo }}' width="200" height="200" alt="Pet"></p>
      <p>{{ $pet->breed }}</p>
      <p>Seen {{ $pet->petName }}?<br />  Email Us:
        <script type="text/javascript"> document.write("<a href=\"mail" + "to:" + new Array("doodledog1","gmail.com").join("@") + "\">" + "MSCC Pets" + "</" + "a>");
      </script></p>
  </div>
 @endforeach
@endif
</div>
@stop
