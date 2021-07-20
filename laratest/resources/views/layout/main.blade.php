<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
	<title>@yield('title')</title>
</head>
<body>

    <div class="sticky">
    <div class="topnav">
		<nav>
			@yield('nav_bar')
		</nav>	
	</div>
    </div>

	<div class="logintitleblock">
		@yield('page_title')
	</div>

	<div id="page_content">
		@yield('main_content')
	</div>

	<div id="footer">
		Copyright by Mahmud, Nafi @2021
	</div>

</body>
</html> 