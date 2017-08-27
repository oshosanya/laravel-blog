@extends('admin.layout.layout')
@section('content')
<div class="container">
	<form method="post">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-6">
				<label>Category Name:</label>
				<input type="text" name="categoryName" class="form-control" required="required">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection