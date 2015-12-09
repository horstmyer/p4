@extends('layouts.master')


@section('title')
    Your Profile
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('intro')
<div class="output">
    <h2>Your Profile</h2>
    <div>
        {{ $user->name}}<br />
    </div>
    @if(sizeof($pets) == 0)
      No pets
    @else
      @foreach($pets as $pet)
        <div>
          <h2>{{ $pet->petName }}</h2>
          <p>{{ $pet->breed }}</p>
        </div>
     @endforeach
   @endif
</div>

@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
