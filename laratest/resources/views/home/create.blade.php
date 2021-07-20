@extends('layout.main')
    
	@section('title')
	Create User
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
	<a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('home.userlist')}}"> User List</a>
    <a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
	<br><br>
	@endsection

	@section('page_title')
	<h1>Create New User</h1>
	@endsection

	<div class="block">
    <form method="post" enctype="multipart/form-data">
    	@csrf
		
			<legend><h3 style="margin:0">Add</h3></legend>
			<table>
				<tr>
					<td>Username </td>
					<td><input type="text" name="username" class="textbox" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" name="password" class="textbox" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Name </td>
					<td><input type="text" name="name" class="textbox" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" name="email" class="textbox" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Department </td>
					<td><input type="text" name="dept" class="textbox" value="{{old('dept')}}"></td>
				</tr>
				<tr>
					<td>CGPA </td>
					<td><input type="text" name="cgpa" class="textbox" value="{{old('cgpa')}}"></td>
				</tr>
                <tr>
					<td>Type </td>
					<td>
						<select name='type'>
							<option value="Admin"> ADMIN </option>
							<option value="User"> USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Upload Image </td>
					<td><input type="file" name="myfile" value="{{old('myfile')}}"></td>
				</tr>
</div>
				<tr>
					<td><input type="submit" name="submit" class="button" value="Save"></td>
					<td><div class="link"><a href="{{route('home.index')}}">Back</a></div></td>
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