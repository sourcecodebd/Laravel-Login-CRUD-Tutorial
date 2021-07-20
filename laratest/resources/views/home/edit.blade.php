@extends('layout.main')
    
	@section('title')
	Edit User
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
	<h1>Edit User</h1>
	@endsection

	<div class="block">

    <form method="post">
    	@csrf
			<legend><h3 style="margin:0">Edit</h3></legend>
			<table>
				<tr>
					<td>Username </td>
					<td><input type="text" name="username" value="{{ $user['username'] }}"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" name="password" value="{{ $user['password'] }}"></td>
				</tr>
				<tr>
					<td>Name </td>
					<td><input type="text" name="name" value="{{ $user['name'] }}"></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" name="email" value="{{ $user['email'] }}"></td>
				</tr>
				<tr>
					<td>Department </td>
					<td><input type="text" name="dept" value="{{ $user['dept'] }}"></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" name="cgpa" value="{{ $user['cgpa'] }}"></td>
				</tr>
                <tr>
					<td>Type </td>
					<td>
						<select name='type'>
							<option value="Admin" @if($user['type'] == 'Admin') selected @endif > ADMIN </option>
							<option value="User"  @if($user['type'] == 'User') selected @endif > USER </option>
						</select>
					</td>
				</tr>
</div>
				<tr>
					<td><input type="submit" name="submit" class="button" value="Update"></td>
					<td><div class="link"><a href="{{route('home.userlist')}}">Back</a></div></td>
				</tr>
			</table>
	</form>

</div>

@endsection
