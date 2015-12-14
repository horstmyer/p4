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
            <p><img src='{{ $pet->photo }}' width="200px" height="200px"></p>
          <p>{{ $pet->breed }}</p>
          <a href='/profile/edit/{{$pet->id}}'>Edit</a> |
              <a href='/profile/confirm-delete/{{$pet->id}}'>Delete</a><br>
      </div>
     @endforeach
   @endif
</div>
@stop
@section('buttons')

@stop
@section('body')

@stop
