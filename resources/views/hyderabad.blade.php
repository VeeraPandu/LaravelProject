@extends('layouts')
@section('title')
Hyderabad
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
.container{
max-width:1220px;
margin:auto;
background:#f2f2f2;
overflow:auto;
}
.gallery{
border:1px solid #ccc;
float:left;
width:380px;
}
.gallery img{
width:100%;
height:50%;
}
</style>
</head>
<body>
<div class="container">
<div class="gallery">
<image src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Ramoji-Film-City.jpg">
</div>
<div class="gallery">
<image src="https://img.traveltriangle.com/blog/wp-content/uploads/2017/04/picnic-spots-in-Hyderabad1.jpg">
</div>
<div class="gallery">
<image src="https://i.pinimg.com/736x/f5/f3/04/f5f3042e155ca7e4583b291dccaa2350.jpg">
</div>
<div class="gallery">
<image src="https://static.toiimg.com/photo/38130176/.jpg">
</div>
<div class="gallery">
<image src="https://www.oyorooms.com/travel-guide/wp-content/uploads/2019/02/Golconda-fort.jpg">
</div>
<div class="gallery">
<image src="https://www.hyderabadtourism.travel/images/tourist-places/purani-haveli-hyderabad/purani-haveli-timing-hyderabad.jpg">
</div>
<div class="gallery">
<image src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2018/02/415.jpg">
</div>
<div class="gallery">
<image src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSStWoov0oGQn89KRh2dAyrMUNiFTCBAVl2JuY4Asg3f9DpfplQ&usqp=CAU">
</div>
<div class="gallery">
<image src="https://www.fabhotels.com/blog/wp-content/uploads/2019/05/Nehru-Zoological-Park.jpg">
</div>


</div>
</body>
</html>
@endsection