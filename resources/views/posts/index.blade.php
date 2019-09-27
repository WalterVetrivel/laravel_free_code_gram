@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($posts as $post)
	<div class="row d-flex justify-content-center">
		<div class="col-8">
			<a href="/p/{{$post->id}}">
				<img src="/storage/{{$post->image}}" alt="Image" class="w-100 img-fluid">
			</a>
		</div>

		<div class="col-8 py-3">
			<div>
				<div class="d-flex align-items-center mb-3">
					<img src="{{$post->user->profile->profileImage()}}" alt="{{$post->user->username}}" class="w-25 rounded-circle img-fluid mr-2" style="max-width: 3rem">

					<p class="m-0 p-0 font-weight-bold mr-2">
						<a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
					</p>

					@if(auth()->user())
					<follow-component user-id="{{$post->user->id}}" follows="true"></follow-component>
					@endif
				</div>

				<hr>

				<p>
					<span class="m-0 p-0 font-weight-bold">
						<a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
					</span>
					{{$post->caption}}
				</p>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection