@extends('layout.main')
	
	@section('title')
	Home Page
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Refresh</a>
    <br><br>
	@endsection

	@section('page_title')
	<div class="logintitleblock">
    <h1>Home</h1>
	</div>
	@endsection

    <div class="block">
    <h1>Welcome home! {{ session('username') }} </h1>
    <h1>Hey {{ session('type') }}!</h1>

<tr>

<td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('home.create')}}">Create User</a>
</td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('home.userlist')}}">View User List</a>
</td>
    <a style="border-radius: 1px; padding: 5px; border: none; text-decoration:none" class="button" href="{{route('product.index')}}">Product</a>
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
