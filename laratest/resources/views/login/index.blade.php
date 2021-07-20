<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="logincontainer">

<div class="loginblock">

	<div class="logintitleblock">

		<h1>Access Account</h1>

	</div>

<div class="block">

	<form method="post">
		<!-- @csrf -->
		{{csrf_field()}}
		
			<legend><h3 style="margin:0">Login</h3></legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" class="textbox" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" class="textbox" name="password"></td>
				</tr>
</div>
				<tr>
					<td><input type="submit" class="button" name="submit" value="Submit"></td>
					<td><div class="link"><a href="{{route('main.index')}}">Back</a></div></td>
				</tr>
			</table>
	</form>
	
</div>
	
	<div class="sessionmsg">
    {{session('msg')}}
	</div>

</div>	

<div id="footer">
		Copyright by Mahmud, Nafi @2021
</div>

</body>
</html>
