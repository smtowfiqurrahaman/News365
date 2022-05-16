@extends('layouts.app')
@section('title', 'X-News | Post')
@section('content')
<br><br><br><br>
{{-- <div class="row"> --}}
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">All Posts</h4>
				{{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" >
				<i class="fa fa-plus"></i>
				Add Post
				</button> --}}
				<a href="{{ route('post.create') }}" class="btn btn-primary btn-round ml-auto"><i class="fa fa-plus"></i> Add Post</a>
			</div>
		</div>
		<div class="card-body">

			<div class="table-responsive">
			<table id="add-row" class="display table table-striped table-hover">

					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Category</th>
							<th>Image</th>
							<th>Post</th>
							<th style="width: 10%">Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($posts as $key=>$post)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{Str::limit( $post->name,20) }}</td>
							<td>{{ $post->category->name }}</td> {{-- {{ $post->category }} --}}
							<td><img src="{{ asset('uploads/post/'.$post->image) }}" style="height:50px; width: auto;" alt=""></td>
							<td>{{Str::limit( $post->artical,20) }}</td>
							<td>
								<div class="form-button-action">
									<a href="{{ route('post.edit', $post->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
									<i class="fa fa-edit"></i>
									</a>


									<form action="{{route('post.destroy', $post->id)}}" id="delete-form-{{( $post->id) }}" method="POST">
										@csrf
										@method('DELETE')
									</form>


									<button onclick=" if(confirm('Are you sure to delete this Post??')){
										event.preventDefault();document.getElementById('delete-form-{{($post->id) }}').submit();
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