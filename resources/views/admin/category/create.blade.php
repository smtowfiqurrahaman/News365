@extends('layouts.app')
@section('title', 'X-News | Category')
@section('content')
<div class="row pt-5 pl-3 justify-content-center">
	<div class="col-md-12 col-lg-6 pt-5">
		{{-- 	   <form action="{{ route('category.store') }}" method="category" enctype="multipart/form-data">
			@csrf --}}
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title"><b>Create category</b></h4>
						<a href="{{ route('category.index') }}" class="btn btn-primary btn-round ml-auto"><i class="fa fa-arrow-left"></i> Back</a>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('category.store') }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6 col-lg-12">
								<div class="form-group">
									<label>Category Name</label>
									 <input type="text" class="form-control" name="name">
									{{-- <input type="text" name="name" class="form-control" placeholder="Enter Text" > --}}
									<br>
									<button class="btn btn-primary btn-round" type="submit">Create</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection