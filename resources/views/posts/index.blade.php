@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">

            <div class="col-7 offset-3 py-3">
                <div class="d-flex align-items-center">
                    <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color: black; margin-left: 3%; font-weight: bold;"><img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 30px;"></img></a>
                    <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color: black; margin-left: 3%; font-weight: bold;">{{ $post->user->username }}</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-7 offset-3">

                <img src="/storage/{{ $post->image }}" class="w-100">

            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-7 offset-3">


                <div>

                    <p class="p-2">
                        <span class="font-weight-bold p-2">
                            <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color: black;">{{ $post->user->username }}</a>
                        </span>{{ $post->caption }}
                    </p>
                    <hr>

                </div>

            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection
