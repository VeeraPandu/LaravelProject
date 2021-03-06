<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        
        .full-height {
        height: 100vh;
        }
        
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        
        .position-ref {
        position: relative;
        }
        
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        
        .content {
        text-align: center;
        }
        
        .title {
        font-size: 84px;
        }
        
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        
        .m-b-md {
        margin-bottom: 30px;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        
        <ul class="nav navbar-nav">
        <li class="active"><a href="/myhome">Home</a></li>
        <li class="active"><a href="/login">Login</a></li>
        <li class="active"><a href="/signup">Sign-Up</a></li>
        <li class="active"><a href="/contactus">Contact Us</a></li>
        </ul>
        </div>
        </nav>
   @yield('content')
   
</body>
</html>