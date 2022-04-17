@extends('layouts')
@section('title')
Jaipur
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
<image src="https://www.nativeplanet.com/img/2016/11/albert1-11-1478865178.jpg">
</div>
<div class="gallery">
<image src="https://media.istockphoto.com/photos/hawa-mahal-jaipur-india-picture-id481277397?b=1&k=20&m=481277397&s=170667a&w=0&h=p1VRrVRm7Y9hd7U33dIE-VmfduuWsH3nIiUc5OaGmMI=">
</div>
<div class="gallery">
<image src="https://static.toiimg.com/thumb/width-800,height-600,msid-48773386.cms">
</div>
<div class="gallery">
<image src="https://www.treebo.com/blog/wp-content/uploads/2018/07/Historical-Places-in-Jaipur.jpg">
</div>
<div class="gallery">
<image src="https://img.traveltriangle.com/blog/wp-content/uploads/2015/07/City-Palace-in-Jaipur.jpg">
</div>
<div class="gallery">
<image src="https://render.fineartamerica.com/images/rendered/default/print/8/6/break/images/artworkimages/medium/2/amber-fort-jaipur-india-design-pics.jpg">
</div>
<div class="gallery">
<image src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJC3jbwBGa-lMmjh1cSr92T6RHbM4oUCJVbuWNiMUN34EaUGap&usqp=CAU">
</div>
<div class="gallery">
<image src="https://www.nativeplanet.com/img/2017/09/07-1504758106-1.jpg">
</div>
<div class="gallery">
<image src="https://rajputanacabs.b-cdn.net/wp-content/uploads/2019/05/City-Palace-and-Jantar-Mantar-Jaipur.jpg">
</div>
</div>
</body>
</html>




@endsection