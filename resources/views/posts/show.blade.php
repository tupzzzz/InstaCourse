@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row justify-content-center d-flex" style="padding-top: 15vh;">

    <div class="col-6">

      <img src="/storage/{{ $post->image }}" class="w-100">

    </div>

    <div class="col-4">

      <div class="d-flex align-items-center p-2">
        <div class="pr-3">

          <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;"></img>

        </div>

        <div class="d-flex">

          <div class="font-weight-bold">
            <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color: black;">{{ $post->user->username }}</a>
            <span class="pl-1 pr-1">•</span>
            <a style="font-size: 13px; text-decoration: none;" href="">Follow</a>
          </div>

        </div>        

      </div>

      <hr>

      <p class="p-2">
        <span class="font-weight-bold p-2">
          <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color: black;">{{ $post->user->username }}</a>
        </span>{{ $post->caption }}
      </p>

    </div>

  </div>

</div>
@endsection
