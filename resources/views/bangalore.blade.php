@extends('layouts')
@section('title')
Bangalore
@endsection
@section('content')
<!doctype html>
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
<image src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQKrduzO4dmDr8VzoabRKcDx8ByCMp3UbFkolKWeReMjrjub-BU&usqp=CAU">
</div>
<div class="gallery">
<image src="https://www.tripsavvy.com/thmb/tc4I8RODcWgsyPjuDNnd6FCbYkA=/2125x1411/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-534909771-580f5f4c5f9b58564cc08bf2.jpg">
</div>

<div class="gallery">
<image src="https://www.holidify.com/images/cmsuploads/square/shutterstock_154851008_20200123162547_20200123162603.png">
</div>
<div class="gallery">
<image src="https://blog-content.ixigo.com/wp-content/uploads/2020/02/10-Destinations-that-You-Can-Visit-by-Bus-near-Bangalore.jpeg">
</div>
<div class="gallery">
<image src="https://img.theculturetrip.com/768x432/wp-content/uploads/2017/07/15890612962_cb0b324f93_z.jpg">
</div>
<div class="gallery">
<image src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2015/05/Mysore-Palace.jpg">
</div>
<div class="gallery">
<image src="https://blogs.revv.co.in/blogs/wp-content/uploads/2020/05/Iskcon-Temple-Bangalore.jpg">
</div>
<div class="gallery">
<image src="https://cdn1.goibibo.com/voy_ing/t_fs/madhya-pradesh-jabalpur-148410459919o.jpeg">
</div>

<image src="https://images.newindianexpress.com/uploads/user/imagelibrary/2019/1/28/w900X450/800px-High_Court_of_Karnataka_Bangalore_MMK-.jpg" width="380" height="250">
</div>
</body>
</html>
@endsection