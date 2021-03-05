@extends('products.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="d-flex justify-content-between align-items-center">
			<h2>Show Product</h2>
			<a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
		</div>		
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="form-group">
			<strong>Name: </strong>
			{{ $product->name}}
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<strong>Details: </strong>
			{{ $product->details}}
		</div>
	</div>
</div>
@endsection