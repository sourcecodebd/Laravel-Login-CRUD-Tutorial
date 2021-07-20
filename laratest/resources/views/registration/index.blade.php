<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>
<body>

<div class="regcontainer">

<div class="regblock">

<div class="logintitleblock">

	<h1>Create Account</h1>

</div>

	<div class="block">
    <form method="post" enctype="multipart/form-data">
    	@csrf
		
			<legend><h3 style="margin:0">Registration</h3></legend>
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
					<td><input type="submit" name="submit" class="button" value="Register"></td>
					<td><div class="link"><a href="{{route('main.index')}}">Back</a></div></td>
				</tr>
			</table>
		
	</form>

</div>	

	<div class="sessionmsg">
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	</div>

</div>

<div id="footer">
		Copyright by Mahmud, Nafi @2021
</div>

</body>
</html>