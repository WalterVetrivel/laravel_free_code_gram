@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-3 p-5">
            <img src="https://instagram.fcbr1-1.fna.fbcdn.net/vp/513a93ee83379b411df3f50ba198dc82/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fcbr1-1.fna.fbcdn.net" alt="Profile Picture" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1>
                    {{$user->username}}
                </h1>
                <div>
                    <a href="{{route('post.create')}}" class="btn btn-primary">Add Post</a>
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
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