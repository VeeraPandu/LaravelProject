<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--MaxCDN provides CDN support for Bootstrap's CSS and JavaScript-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
*{
    padding:0px;
    margin:0;
    box-sizing:border-box;
}

.button:hover{
    background-color:grey;
    border: 2px solid black;
}
.border{
    border:2px solid black;
    border-radius: 15px; 
 }
body
{
font-family: 'poppins',sans-serif;
}
.menu{
    padding: 0 10px 30px 10px;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(350px,1fr));
    grid-gap:10px 20px;
    background-color:white;
}
.heading{
    background-color:skyblue;
    color:white;
    margin-bottom: 30px;
    padding:10px 0;
    grid-column: 1/-1;
    text-align: center;
}

img{
    border-radius: 15px 15PX 0 0; 
    width:250px;
    height:300px;
}


.car img{
    position: relative;
    width: 100%;
}

.details{
    padding:20px 10px;
    display: grid;
    grid-template-rows: auto 1fr 50px;
    grid-row-gap: 15px;
}
.details-sub>h5{
    color:black;
    font-weight: 600;
    font-size:18px;
    color:skyblue;
}
.details-sub{
    display: grid;
    grid-template-columns: auto auto;

}
.price{
    text-align: right;
    color:black;
}

.details>button{
    background-color:black;
    border:none;
    color:white;
    font-size: 16px;
    font-weight: 600;
    border-radius:5px;
    width:180px;
}
.details>p{
    font-size: 15px;
    line-height: 28px;
    align-self: stretch;
}

</style>
</head>
<body target='_blank'>
<div class="menu">
<div class="heading">
<h1>CAR RENTALS</h1>
</div>

<div class="container">        
<div class="border">
<div  class="car">
<img src="https://www.autovista.in/img/blog/upcoming/Swift-Hybrid.jpg" alt="">
<div class="details">
<div class="details-sub">
<h5>Suzuki Swift</h5>
<h5 class="price">&#8377.30/Km</h5>                      
</div>
<p>5 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>             
</div>
</div>
</div>
</div> 

<div class="/mainpage">
<div class="border">
<div  class="car">
<img src="https://www.drivespark.com/img/2017/07/honda-city-hybrid-launched-malaysia-mileage-specs2-22-1500716955.jpg">
<div class="details">
<div class="details-sub">
<h5>Honda City</h5>
<h5 class="price">&#8377.30/Km</h5>                      
</div>
<p>5 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>               
</div>
</div>
</div>
</div>

<div class="/mainpage">
<div class="border">
<div  class="car">
<img src="https://www.drivespark.com/img/2016/09/maruti-suzuki-alto-800-2017-26-1474865795.jpg">
<div class="details">
<div class="details-sub">
<h5>Suzuki Works</h5>
<h5 class="price">&#8377.30/Km</h5>                      
</div>
<p>4 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>              
</div>
</div>
</div>
</div>

<div class="/mainpage">
<div class="border">
<div class="car">
<img src="https://www.drivespark.com/img/2015/04/09-1428583953-tata-nano-interesting-facts-3.jpg" alt="">
<div class="details">
<div class="details-sub">
<h5>Nano</h5>
<h5 class="price">&#8377.20/Km</h5>                      
</div>
<p>4 Seatrer</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>    
</div>
</div>
</div>
</div>


<div class="container">
<div class="border">
<div class="car">
<img src="https://imgctcf.aeplcdn.com/thumbs/p-nc-p-s600-ver4/images/cars/generic/Renault-Kwid-Top-Car-That-Women-Loves-To-Drive.png" alt="">
<div class="details">
<div class="details-sub">
<h5>Renault Kwid</h5>
<h5 class="price">&#8377.30/Km</h5>                      
</div>
<p>4 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>             
</div>
</div>
</div>
</div>


<div class="container">
<div class="border">
<div  class="car">
<img src="https://imgctcf.aeplcdn.com/thumbs/p-nc-p-s600-ver4/images/cars/Exciting-features-of-upcoming-Skoda-Octavia.jpg" alt="">
<div class="details">
<div class="details-sub">
<h5>Skoda Octavia</h5>
<h5 class="price">&#8377.40/Km</h5>                      
</div>
<p>5 Seater</p>
<form action="html project.html"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>       
</div>
</div>
</div>
</div>
                                     
<div class="container">
<div class="border">
<div  class="car">
<img src="https://imgctcf.aeplcdn.com/thumbs/p-nc-p-s600-ver4/images/cars/generic/Ford-Figo-Aspire-Top-Car-With-Best-Ground-Clearance-In-India.png" alt="">
<div class="details">
<div class="details-sub">
<h5>Ford Aspire</h5>
<h5 class="price">&#8377.25/Km</h5>                      
</div>
<p>4 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>              
</div>
</div>
</div>
</div>

<div class="container">
<div class="border">
<div class="car">
<img src="https://i.pinimg.com/originals/27/d3/32/27d33233635ba8948e4c419af8c0e255.jpg" alt="">
<div class="details">
<div class="details-sub">
<h5>Renault Duster</h5>
<h5 class="price">&#8377.50/Km</h5>                      
</div>
<p>6 Seater</p>
<form action="/mainpage"> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="abc()">Wishlist </button> 
<button type="submit" class="btn btn-primary disabled" class="button" onclick="def()">Select</button>  
</form>             
</div>
</div>
</div>          
</div>              
</div>
<Script>
function abc(){
alert("Added to Wishlist");
}

function def(){
alert("Your Car has been booked");
}
</script>
</body>
</html>