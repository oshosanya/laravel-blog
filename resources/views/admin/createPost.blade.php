@extends('admin.layout.layout')
@section('content')
<div class="container">
	<form method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-6">
				<label>Title: </label>
				<input type="text" name="postTitle" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Content: </label>
				<textarea class="form-control" name="postContent"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Category: </label>
				<select class="form-control" name="postCategory">
					@foreach($category as $c)
					<option value="{{ $c->id }}">{{ $c->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Tags: </label>
				<input type="text" name="postTags" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection