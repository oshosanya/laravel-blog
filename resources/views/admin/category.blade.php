@extends('admin.layout.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 col-xs-3 pull-right">
			<a href="/admin/category/create" class="btn btn-primary">Add New</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<table class="table">
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Created At</td>
						<td>Updated At</td>
					</tr>
				</thead>
				<tbody>
					@foreach($category as $c)
					<tr>
						<td>{{ $c->id }}</td>
						<td>{{ $c->name }}</td>
						<td>{{ $c->created_at }}</td>
						<td>{{ $c->updated_at }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection