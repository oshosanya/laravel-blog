@extends('admin.layout.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 col-xs-3 pull-right">
			<a href="/admin/post/create" class="btn btn-primary">Add New</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<table class="table">
				<thead>
					<tr>
						<td>ID</td>
						<td>Title</td>
						<td>Category</td>
						<td>Tags</td>
						<td>Created At</td>
						<td>Updated At</td>
					</tr>
				</thead>
				<tbody>
					@foreach($post as $p)
					<tr>
						<td>{{ $p->id }}</td>
						<td>{{ $p->title }}</td>
						<td>{{ $p->category->name }}</td>
						<td>{{ $p->tags }}</td>
						<td>{{ $p->created_at }}</td>
						<td>{{ $p->updated_at }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection