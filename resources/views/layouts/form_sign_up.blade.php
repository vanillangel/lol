<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		body{background-color: lightgray;}
		form{border:1px solid black; width:300px; border-radius: 5px;
			background-color: white;}
		form input{margin:10px;}
		form button {background-color: lightgray; display: block;
    margin: 0 auto 15px auto;
    text-align: center;border-radius: 5px;}

	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
</head>
<body>
@yield('content')
</body>
</html>