<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Himedi.com')</title>
</head>
<body>
	<ul>
		<li><a href="/">Welcome</a></li>
		<li><a href="/contact">Contact</a></li>
		<li><a href="/hello">Hello</a></li>
	</ul>
	@yield('content')
</body>
</html>