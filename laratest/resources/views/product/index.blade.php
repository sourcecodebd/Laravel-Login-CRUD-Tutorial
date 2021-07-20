@extends('layout.main')
	
	@section('title')
	Product Page
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('product.index')}}"> Refresh</a>
    <br><br>
	@endsection

	@section('page_title')
	<div class="logintitleblock">
    <h1>Product</h1>
	</div>
	@endsection

    <div class="block">
    <h1>Product Information</h1>
    <h1>Hey {{ session('type') }}!</h1>

<tr>

<td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('product.create')}}">Add Product</a>
</td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('product.productlist')}}">View Product List</a>
</td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('home.index')}}">Home</a>
</td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('logout.index')}}">Logout</a>
 </td>

 <tr>
 <td><br><br><br></td>
 </tr>

 </tr>

 </div>
</div>
    
@endsection
