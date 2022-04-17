@extends('layouts')
@section('title')
Login
@endsection
@section('content')
<!DOCTYPE html>
<html>
<style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
font-family: sans-serif;
background: url(https://swall.teahub.io/photos/small/35-353045_wallpaper-zenit-retro-camera-photos-map-vintage-camera.jpg);
background-size: cover;
}
.login-box{
width: 310px;
position: absolute;
margin: 7% 0 0 40%;
border-block: 10px;
} 
.login-box h1{
color:rgb(247, 241, 241);
float: left;
font-size:25px;
margin-bottom:10px;
}
.textbox{
width: 100%;
overflow: hidden;
padding: 9px 0;
margin: 8px 0;
border-bottom: 1px solid powderblue;
}
.textbox m{
color:rgb(248, 247, 247);
}
.textbox input{
border:none;
background: none;
color:white;
font-size: 20px;
width: 80%;
float: left;
margin:0 10px;
outline:none;
}
.btn{
width: 100%;
background: none;
border: 2px solid powderblue;
color: white;
padding: 5px;
font-size: 18px;
cursor: pointer;
margin:12px 0;
}
.subtn:hover{
color:black;
}
.subtn{
width:18.3%;
background: none;
border: 2px solid powderblue;
color: white;
padding: 5px;
font-size: 18px;
cursor: pointer;
margin:12px 0;
border-radius:5px;
margin:22% 0 0 40%;
}
</style>
<body>
    <h1 align="center" style="color:white;border-radius:15px;width:98%;margin-left:1%;padding:.3%">CAR   RENTAL  SYSTEM</h1>

    
<form class="login-box" method="GET" action="/mainpage">
    @csrf
<h1>Login</h1>
<div class="textbox">
<m class="fa fa-user" aria-hidden="true"></m>
<input type="text" placeholder="Username or email" id="name" name="username">
</div>
<div class="textbox">
<m class="fa fa-lock" aria-hidden="true"></m>
<input type="password" placeholder="Password" id="password" name="password">
</div>
<input class="btn" type="submit" value="Login"/>
</form>
<form action="/signup">
<input class="subtn" type="submit" value="Sign Up"/>
</form>
</body>
</html>


@endsection


