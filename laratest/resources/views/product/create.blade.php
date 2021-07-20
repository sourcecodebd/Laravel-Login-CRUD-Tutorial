@extends('layout.main')
    
	@section('title')
	Add Product
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('product.productlist')}}"> Product List</a>
    <a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
	<br><br>
	@endsection

	@section('page_title')
	<h1>Add New Product</h1>
	@endsection

	<div class="block">
    <form method="post" enctype="multipart/form-data">
    	@csrf
		
			<legend><h3 style="margin:0">Add</h3></legend>
			<table>
				<tr>
					<td>Product Name </td>
					<td><input type="text" name="product_name" class="textbox" value="{{old('product_name')}}"></td>
				</tr>
				<tr>
					<td>Product Price </td>
					<td><input type="text" name="product_price" class="textbox" value="{{old('product_price')}}"></td>
				</tr>
				<tr>
					<td>Product Quantity </td>
					<td><input type="text" name="product_quantity" class="textbox" value="{{old('product_quantity')}}"></td>
				</tr>
				<tr>
					<td>Upload Image </td>
					<td><input type="file" name="myfile" value="{{old('myfile')}}"></td>
				</tr>
</div>
				<tr>
					<td><input type="submit" name="submit" class="button" value="Save"></td>
					<td><div class="link"><a href="{{route('product.index')}}">Back</a></div></td>
				</tr>
			</table>
		
	</form>

</div>	

	<div class="sessionmsg">
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	</div>

@endsection