@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{$post->image}}" alt="Image" class="w-100 img-fluid">
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center mb-3">
					<img src="{{$post->user->profile->profileImage()}}" alt="{{$post->user->username}}" class="w-25 rounded-circle img-fluid mr-2" style="max-width: 3rem">
					<p class="m-0 p-0 font-weight-bold mr-2">
						<a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
					</p>
					<a href="#">Follow</a>
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
</div>
@endsection