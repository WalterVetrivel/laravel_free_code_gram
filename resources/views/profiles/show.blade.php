@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="Profile Picture" class="rounded-circle w-75">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center mb-3">
                    <h3 class="p-0 m-0 mr-2">
                        {{$user->username}}
                    </h1>
                    <button class="btn btn-primary btn-sm">Follow</button>
                </div>
                <div>
                    @can('update', $user->profile)
                        <a href="{{route('post.create')}}" class="btn btn-primary">Add Post</a>
                        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="pr-5"><strong>{{ $user->posts()->count() }}</strong> posts</div>
                <div class="pr-5"><strong>30.8k</strong> followers</div>
                <div class="pr-5"><strong>231</strong> following</div>
            </div>
            <div class="font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                <a href="https://{{$user->profile->url}}" target="_blank" rel="noopener noreferrer">
                    {{$user->profile->url}}
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" alt="Image" class="w-100 img-fluid">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection