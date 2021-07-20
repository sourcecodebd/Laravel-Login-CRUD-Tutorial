@extends('layout.main')
	
	@section('title')
    View Product List
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
	<div class="logintitleblock">
    <h1>Product List</h1>
	</div>
	@endsection

    <table border="1" style="border-radius: 5%; border: 2px solid white; background-color: white; text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <tr>
            <td>Id</td>
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Quantity</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['product_id'] }}</td>
            <td>{{ $list[$i]['product_name'] }}</td>
            <td>{{ $list[$i]['product_price'] }}</td>
            <td>{{ $list[$i]['product_quantity'] }}</td>
            <td>
                <div class="link">
                <a href="{{ route('product.edit', [$list[$i]['product_id']]) }}">Edit</a>
                </div>
                <div class="link">
                <a href="{{ route('product.delete', [$list[$i]['product_id']]) }}">Delete</a>
                </div>
                <div class="link">
                <a href="{{ route('product.show', [$list[$i]['product_id']]) }}">Details</a>
                </div>
            </td>
        </tr>
        @endfor
        <tr>
		    <td><div class="link"><a href="{{route('product.index')}}">Back</a></div></td>
		<tr>
    </table>

</div>

<div class="sessionmsg">
    {{session('msg')}}
</div>

@endsection