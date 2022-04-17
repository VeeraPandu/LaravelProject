<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<form action="/user/form" method='post'>
@csrf
Name:<input type='text' name = 'name'><br>
Username:<input type='text' name = 'username'><br>
Password:<input type='text' name = 'password'><br>
Submit:<button type="submit" value="submit">Submit</button>
</form>
</body>
</html>