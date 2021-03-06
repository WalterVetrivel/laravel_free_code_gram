@extends('layouts.app')

@section('content')
<div class="container">
	<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
		@csrf
		@method('PATCH')

		<div class="row d-flex justify-content-center">
			<div class="col-8">
				<div class="row">
					<h3>Edit Profile</h3>
				</div>

				<div class="form-group row">
					<label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

					<input 
						id="title" 
						type="text" 
						class="form-control @error('title') is-invalid @enderror" 
						name="title" value="{{ old('title') ?? $user->profile->title }}" 
						required 
						autocomplete="title" 
						autofocus
					>

					@error('title')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group row">
					<label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>

					<input 
						id="description" 
						type="text" 
						class="form-control @error('description') is-invalid @enderror" 
						name="description" 
						value="{{ old('description') ?? $user->profile->description }}"
						autocomplete="description" 
						autofocus
					>

					@error('description')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group row">
					<label for="url" class="col-md-4 col-form-label">{{ __('URL') }}</label>

					<input 
						id="url" 
						type="text" 
						class="form-control @error('url') is-invalid @enderror" 
						name="url" 
						value="{{ old('url') ?? $user->profile->url }}"
						autocomplete="url" 
						autofocus
					>

					@error('url')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="row">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="file-addon">{{ __('Profile Image') }}</span>
						</div>

						<div class="custom-file">
							<input type="file" class="custom-file-input" id="image" name="image" aria-describedby="file-addon">
							<label class="custom-file-label" for="image">Choose image</label>
						</div>
					</div>

					@error('image')
					<span class="invalid-feedback" role="alert" style="display:block!important">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="row">
					<button class="btn btn-primary">Save Profile</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection