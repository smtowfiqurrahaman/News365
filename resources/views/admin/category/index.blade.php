@extends('layouts.app')
@section('title', 'X-News | Category')
@section('content')
<br><br><br><br>
{{-- <div class="row"> --}}
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">Create Category</h4>
				{{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" >
				<i class="fa fa-plus"></i>
				Add Post
				</button> --}}
				<a href="{{ route('category.create') }}" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i> Add Post</a>
			</div>
		</div>
		<div class="card-body">

			<div class="table-responsive">
			<table id="add-row" class="display table table-striped table-hover">

					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Slug</th>
							{{-- <th>Image</th> --}}
							{{-- <th>Post</th> --}}
							<th style="width: 10%">Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($categories as $key=>$category)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->slug }}</td>
							<td>
								<div class="form-button-action">
									<a href="{{ route('category.edit', $category->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
									<i class="fa fa-edit"></i>
									</a>


									<form action="{{route('category.destroy', $category->id)}}" id="delete-form-{{( $category->id) }}" method="POST">
										@csrf
										@method('DELETE')
									</form>

									<button onclick=" if(confirm('Are you sure to delete this category??')){
										event.preventDefault();document.getElementById('delete-form-{{( $category->id) }}').submit();
									} else{
										event.preventDefault();
									}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
									<i class="fa fa-times"></i>
									</button>

								</div>
							</td>
						</tr>
						@endforeach
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection