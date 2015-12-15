@extends('layouts.master')


@section('title')
    Your Profile
@stop


@section('login')
<div class="colr">
<h2>Hi {{ $user->name }}! </h2>
</div>
@stop


@section('intro')
<div class="output">
    <div>
       <h2>Here is your profile: </h2>
    </div>
    @if(sizeof($pets) == 0)
      No pets
    @else
      @foreach($pets as $pet)
      <div class="p1">
        <h3>{{ $pet->petName }}</h3>
            <p><img src='{{ $pet->photo }}' width="200px" height="200px">
          <p>{{ $pet->breed }}</p>
          <p><a href='/profile/edit/{{$pet->id}}'>Edit</a> |
          <a href='/profile/confirm-delete/{{$pet->id}}'>Delete</a><br> </p>
          <p/><a href='/missing{{$pet->id}}' target='_blank'>Missing</a></p>
        </div>
     @endforeach
   @endif
</div>
@stop
@section('buttons')
<div>@if(sizeof($pets) <= 3)
  <h3>Add more pets <a href="profile/addpet"><img src="/images/here.png" width="100" height="40" alt=""/></a><br /><br />Limit 4 pets.</h3>
@else
  <h3>You have reached the maximum number of pets!</h3>
@endif</div>
@stop
@section('body')

@stop
