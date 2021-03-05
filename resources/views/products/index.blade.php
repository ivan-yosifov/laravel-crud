@extends('products.layout')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="d-flex justify-content-between align-items-center">
			<h2>All Products</h2>
			<a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
		</div>		
	</div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Details</th>
		<th>Actions</th>
	</tr>
	@foreach($products as $product)
	<tr>
		<td>{{$product->id }}</td>
		<td>{{ $product->name }}</td>
		<td>{{ $product->details }}</td>
		<td>
			<form action="{{route('products.destroy',$product->id)}}" method="POST">
				<a href="{{route('products.show', $product->id)}}" class="btn btn-info">Show</a>
				<a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a>
				@csrf
				@method('DELETE')
				<button class="btn btn-danger" type="submit">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
{{ $products->links() }}
@endsection