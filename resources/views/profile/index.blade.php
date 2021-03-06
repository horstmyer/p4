
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
       <h3>If your pet is missing, please use the "Missing" link below the pet.</h3>
       <h3>Print the flyer, add where and when your pet went missing and distribute.</h3>
    </div>
    @if(sizeof($pets) == 0)
    <h3>Add your pet below!</h3>
    @else
      @foreach($pets as $pet)
      <div class="p1">
        <h3>{{ $pet->petName }}</h3>
            <p><img src='{{ $pet->photo }}' width="200px" height="200px">
          <p>{{ $pet->breed }}</p>
          <p><a href='/profile/edit/{{$pet->id}}'>Edit</a> |
          <a href='/profile/confirm-delete/{{$pet->id}}'>Delete</a><br> </p>
          <p/><a href='/missing/{{ $pet->id }}' target='_blank'>Missing</a></p>
        </div>
     @endforeach
   @endif
</div>
@stop
@section('buttons')
<div>@if(sizeof($pets) <= 3)
  <h3>Add a pet <a href="profile/addpet"><img src="/images/here.png" width="100" height="40" alt="Add Pet"/></a><br /><br />Limit 4 pets.</h3>
@else
  <h3>You have reached the maximum number of pets!</h3>
@endif</div>
@stop
@section('body')

@stop
