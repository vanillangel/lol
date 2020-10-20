
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        body{background-color: lightgray;}
        form{border:1px solid black; width:300px; border-radius: 5px;
            background-color: white;}
            form h4 a{text-decoration: none;}
form h4 a:link{ color:black; }
form h4 a:visited{ color:black; }
form h4 a:hover{ color:darkred; }

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