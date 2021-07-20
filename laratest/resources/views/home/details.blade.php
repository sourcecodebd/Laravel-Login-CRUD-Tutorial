@extends('layout.main')
	
	@section('title')
	User Details
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('home.create')}}"> Create User</a>
    <a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
    <br><br>
	@endsection

	@section('page_title')
	<div class="logintitleblock">
    <h1>User Details</h1>
	</div>
	@endsection

	<div class="block">
			<table>
				<td colspan="2">
					<img src="{{asset('/upload')}}/{{$user['profile_img']}}" height="100px" width="100px">
				</td>
                <tr>
					<td>Username </td>
					<td>{{ $user['username'] }}</td>
				</tr>
                <tr>
					<td>Password </td>
					<td>{{ $user['password'] }}</td>
				</tr>
				<tr>
					<td>Name </td>
					<td>{{ $user['name'] }}</td>
				</tr>
                <tr>
					<td>CGPA </td>
					<td>{{ $user['cgpa'] }}</td>
				</tr>
                <tr>
					<td>Email </td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Department </td>
					<td>{{ $user['dept'] }}</td>
				</tr>
                <tr>
					<td>Type </td>
					<td>{{ $user['type'] }}</td>
				</tr>
				<tr>
					<td>Image </td>
					<td>{{ $user['profile_img'] }}</td>
				</tr>
</div>
				<tr>
				<td><div class="link"><a href="{{route('home.userlist')}}">Back</a></div></td>
				</tr>

			</table>
</div>

@endsection