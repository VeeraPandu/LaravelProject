@extends('layouts')
@section('title')
Manage Bookings
@endsection
@section('content')
<!DOCTYPE html>
<html>
<style type="text/css">
body{
background:url('https://www.pixel4k.com/wp-content/uploads/2019/03/desert-4k_1551644840.jpg');
background-size:cover;
font-family:Arial;
}
.style{
width:450px;
margin:auto;
padding:50px;
#margin-top:100px;
}
h2{
margin-top:100px;
text-align:center;
color:skyblue;
}
input[type=text]{
width:95%;
padding:12px 5px;
border-radius:5px;
margin:5px;
outline:none;
}
input[type=submit]{
width:100%;
padding:10px 0;
margin-top:30px;
border:none;
background:#60adde;
opacity:0.7;
border-radius:20px;
font-size:20px;
color:#fff;
cursor:pointer;
}
</style>
<body>
<script>
function cancel(){
alert("Cancellation has been Successful.Thank you!");
}
</script>
<h2>Manage Your Booking</h2>
<div class="style">
<form onsubmit="return cancel()">
<input type="text" placeholder="Enter E-mail"required>
<input type="text" placeholder="Password"required>
<input type="text" placeholder="Car Reference Number"required>
<input type="Submit" value="Cancel">
</form>
</div>
</body>
</html>

@endsection
