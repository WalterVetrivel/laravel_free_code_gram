@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{route('post.store')}}" enctype="multipart/form-data" method="POST">
		@csrf

		<div class="row d-flex justify-content-center">
			<div class="col-8">
				<div class="row">
					<h3>Add new post</h3>
				</div>

				<div class="form-group row">
					<label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

					<input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

					@error('caption')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="row">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="file-addon">{{ __('Post Image') }}</span>
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
					<button class="btn btn-primary">Add new post</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection