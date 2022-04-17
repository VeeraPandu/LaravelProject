@extends('layouts')
@section('title')
Sign Up
@endsection
@section('content')
<!DOCTYPE html>
<html>
<style>
body{
background:url('https://images.wallpaperscraft.com/image/single/suv_car_hill_117122_1920x1080.jpg');
background-size:cover;
font-family:Arial;
}
.style{
max-width:375px;
border-radius:20px;
margin:auto;
padding:40px;
margin-top:100px;
background:black;
}
h2{
text-align:center;
color:#fff;
}
input[type=text],input[type=password]{
padding:12px 5px;
width:100%;
background:rgba(0,0,0,0.15);
outline:none;
border:5px;
color:#fff;
margin:5px;
font-weight:bold;
}
input[type=submit]{
width:100%;
padding:10px 0px;
margin-top:30px;
border:none;
border-radius:20px;
font-size:20px;
color:black;
cursor:pointer;
}
input[type=submit]:hover{
background:skyblue;
transition:.5s;
}
</style>
<script>
function signin(){
alert("You have successfully Signed In");
}
</script>
</head>
<body>
<div class="style">
<h2>Sign up Here</h2>
<form action="/mainpage" onsubmit="signin()">
<input type="text" placeholder="First Name..."required>
<input type="text" placeholder="Last Name..."required>
<input type="text" placeholder="Email..."required>
<input type="text" placeholder="Contact No..."required>
<input type="text" placeholder="Password..."required>
<input type="submit" value="Sign Up">
</form>
</div>
</body>
</html>

@endsection