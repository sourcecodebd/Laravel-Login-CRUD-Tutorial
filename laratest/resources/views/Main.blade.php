<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="maincontainer">

<div class="loginblock">

<div class="maintitleblock">

	<h1>E-Pay</h1>

</div>

<div class="block">

	<h2>Welcome to our Website!</h2>
	
	<div class="link">
		<div class="mainlink">
		<a href="{{route('registration.index')}}">Registration</a>
		<a href="{{route('login.index')}}">Login</a>
		</div>
	</div>

<tr>
 <td><br></td>
</tr>

</div>

	<div class="sessionmsg">
    {{session('msg')}}
	</div>
	
<div class="social">
<a href="https://www.facebook.com/nafi.king16" class="fa fa-facebook"></a>
<a href="https://twitter.com/Nafi71340800" class="fa fa-twitter"></a>
<a href="https://sourcebd.github.io/nafi.com/" class="fa fa-google"></a>
<a href="https://www.youtube.com/channel/UC0lby0ELE868M02AF-yM9jg" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/dauntless_nafi" class="fa fa-instagram"></a>
</div>

</div>

<div id="footer">
		Copyright by Mahmud, Nafi @2021
</div>
</body>
</html>
