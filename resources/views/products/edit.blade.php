@extends('products.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="d-flex justify-content-between align-items-center">
			<h2>Edit Product</h2>
			<a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
		</div>		
	</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input. <br><br>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
	@csrf
	@method('PUT')

	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="{{$product->name}}" id="name" class="form-control" placeholder="Enter product name">
			</div>
			<div class="col-12">
				<div class="form-group">
					<label for="details">Details</label>
					<textarea class="form-control" name="details" id="details" rows="5" placeholder="Enter product details">{{$product->details}}</textarea>
				</div>
			</div>
			<div class="col-12 text-center mt-3">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</form>

@endsection