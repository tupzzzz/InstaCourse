@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline" style="margin-bottom: -0.5vh;">
            <div class="d-flex align-items-baseline pb-3">

              <h4>{{$user->username}}</h4>

                @if(auth()->user() == true)
                    @if(auth()->user()->id != $user->id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                @endif
                @if(auth()->user() != true)
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                @endif
            </div>


              @can('update', $user->profile)
               <a  class="btn btn-primary" href="/p/create">+ Post</a>
              @endcan
           </div>
           @can('update', $user->profile)
           <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
           @endcan
           <div class="d-flex">
               <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
               <div class="pr-5"><strong>{{ $followerCount }}</strong> followers</div>
               <div><strong>{{ $followingCount }}</strong> following</div>
           </div>
           <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
           <div>{{$user->profile->description}}</div>
           <div><a href="{{$user->profile->url}}" target="_blank" style="color: #00376b; text-decoration: none;"><strong>{{$user->profile->url}}</strong></a></div>
       </div>
   </div>

   <div class="row pt-5">

      @foreach($user->posts as $post)
       <div class="col-4 pb-4">
           <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
       </div>
       @endforeach
   </div>
</div>
@endsection
