@extends('layouts')
@section('title')
Car Rental System
@endsection
@section('content')
<!DOCTYPE html>
<html>
<style>
body{
background:url(https://webneel.com/wallpaper/sites/default/files/images/08-2013/10-star-fish-sea-beach-sand-wallpaper.jpg);
background-size:cover;
}
.form{
width:750px;
padding-left:200px;
float:left;
}
.textbox{
width:100%;
overflow:hidden;
font-size:20px;
margin:5px 0;
}
.textbox input{
border:10%;
outline:none;
font-family:Times New Roman;
background:none;
font-size:20px;
width:60%;
color:black;
}
.radio{
font-size:15px;
font-weight:bold;
padding-top:10px;
}

.btn{
width:60%;
background:none;
border:2px solid black;
padding:5px;
font-size:18px;
cursor:pointer;
margin:5px 0;
}
.btn:hover {
 transform: scale(1);
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
 }

.logo{
margin-left:2.5%;
position:absolute;
}
.logo:hover {
 transform: scale(1.2);
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
 }
button{
font-size:17px;
padding:5px;
border-radius:10px;
margin:30px;
border-color:solid powderblue;
text-align:right;
background:none;
cursor:pointer;
}
button:hover {
 transform: scale(1.1);
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
 }

#style1{
text-align:right;
color:rgb(0, 0, 0);
}
.locations{
padding-top:50px;
padding-right:5px;
float:right;
}
h1{
text-shadow:5px 0 5px grey;
border:2px solid white;
}
h5{
text-shadow:5px 0 5px grey;
}
pre{
font-family:TimesNewRoman;
}
</style>
<body>

<h1 align="center" style="background-color:skyblue;color:purple;border-radius:15px;width:95%;margin-left:2.5%;padding:.3%">CAR   RENTAL  SYSTEM</h1>

<div class="logo">
<img src="Car-Rental-Logo.png" height="70" width="90">
</div>

<div id="style1">
<a href="/managebooking"><button>Manage Booking</button></a>
<a href="/popularlocations"><button>Popular Locations</button></a>
<a href="login" onclick="xyz()"><button>Logout</button></a>
</div>

<hr/ style="width:95%">
<h5 align="center" style="font-size:20px; color:rgba(30,40,50,60);padding:10px">Book Your Car and Explore Your Dream</h5>
<hr/ style="width:95%">

<form class="form" action="/choosecars">
<h4>Lets Find Your Ideal Car</h4>

<h4>Pickup location</h4>
<div class="textbox">
<input type="text" name="" value="">
</div>

<h4>Pickup date</h4>
<div class="textbox">
<input type="date" name="Pickupdate">
</div>

<h4>Dropoff date</h4>
<div class="textbox">
<input type="date" name="dropoffdate" >
</div>

<div class="radio">
Purpose of rental<br/><input type="radio" name="purpose">Business
<input type="radio" name="purpose">Leisure
</div>

<h4>Timings</h4>
<div class="textbox">
<input type="text" name="" value="">
</div>

<input class="btn" type="submit" value="Find My Car">
</form>

<div class="locations">
<h4 style="text-align:right;padding-right:35px">Our Most Popular Destinations</h4>

<div id="style1">
<a href="/famousplaces/jaipur"><button>Jaipur,Rajastan</button></a>
<a href="/famousplaces/agra"><button>Agra,Uttar Pradesh</button></a>
</div>
<div id="style1">
<a href="/famousplaces/hyderabad"><button>Hyderabad,Telangana</button></a>
<a href="/famousplaces/chennai"><button>Chennai,Tamilnadu</button></a>
</div>
<div id="style1">
<a href="/famousplaces/thiruvananthapuram"><button>Thiruvananthapur,Kerala</button></a>
<a href="/famousplaces/bangalore"><button>Bangalore,Karnataka</button></a>
</div>
</div>

<div style="height:300px; border-left:1px solid black; margin:70px 850px; padding-top:300px;"></div>

<script>
function xyz(){
alert("Press ok to Logout");
}
</script>
</body>
</html>
@endsection
