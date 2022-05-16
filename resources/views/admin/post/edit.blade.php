@extends('layouts.app')
@section('title', 'X-News | Post')
@section('content')
@push('js')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endpush
<div class="row pt-5 pl-3 justify-content-center">
	<div class="col-md-12 col-lg-10 pt-5">
	   <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title"><b>Create Post</b></h4>
						  <a href="{{ route('post.index') }}" class="btn btn-primary btn-round ml-auto"><i class="fa fa-arrow-left"></i> Back</a>
			</div>
				</div>
				<div class="card-body">
					<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="form-group">
								<label>Title</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Text" required="required" value="{{ $post->name }}">
							</div>
						</div>
						
						{{-- Category --}}
						<div class="col-md-6 col-lg-4 pt-3">
							<label>Category</label>
							<div class="form-group form-group-default">
								
								<select class="form-control" name='category'>
										@foreach($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
										@endforeach
									</select>
							</div>
						</div>
						{{-- input Image --}}
						<div class="col-md-6 col-lg-4">
							<div class="form-group">
								<label>Input Image</label>
								<input type="file" class="form-control-file" name="image"><br>
								<img src="{{ asset('uploads/post/'.$post->image) }}" style="height:70px; width: auto;" alt="">
							</div>
						</div>
				{{-- Post Area --}}
					<div class="col-md-6 col-lg-12">
						<div class="form-group">
							<label>Post Your Artical</label>
							  <textarea class="form-control" name="artical" rows="3" placeholder="Enter Your Post">{{$post->artical}}</textarea>
						</div>
						<div class="card-action">
							<button class="btn btn-primary btn-round" type="submit">Update</button>
						{{-- 	<button class="btn btn-danger">Cancel</button> --}}
						</div>
					</div>
					</div>
				</form>
				</div>

			</div>
		</form>
	</div>
</div>
{{-- <div class="card-action">
	<button class="btn btn-success">Submit</button>
	<button class="btn btn-danger">Cancel</button>
</div> --}}
</div>
</div>
</div>

@push('js')
<script>
    CKEDITOR.replace( 'artical' );
 </script>
@endpush
@endsection