@extends('layout.main')
    
	@section('title')
	Edit Product
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('product.create')}}"> Add Product</a>
	<a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
	<br><br>
	@endsection

	@section('page_title')
	<h1>Edit Product</h1>
	@endsection

	<div class="block">

    <form method="post">
    	@csrf
			<legend><h3 style="margin:0">Edit</h3></legend>
			<table>
				<tr>
					<td>Product Name </td>
					<td><input type="text" name="product_name" value="{{ $product['product_name'] }}"></td>
				</tr>
				<tr>
					<td>Product Price </td>
					<td><input type="text" name="product_price" value="{{ $product['product_price'] }}"></td>
				</tr>
				<tr>
					<td>Product Quantity </td>
					<td><input type="text" name="product_quantity" value="{{ $product['product_quantity'] }}"></td>
				</tr>
</div>
				<tr>
					<td><input type="submit" name="submit" class="button" value="Update"></td>
					<td><div class="link"><a href="{{route('product.productlist')}}">Back</a></div></td>
				</tr>
			</table>
	</form>

</div>

@endsection
