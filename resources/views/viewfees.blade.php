<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    
    
<link rel="stylesheet" href="../css/card.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

/*header*/



body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}

.topnav {
overflow: hidden;
background-color: #333;
}

.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
background-color: #04AA6D;
color: white;
}

.topnav .icon {
display: none;
}

@media screen and (max-width: 600px) {
.topnav a:not(:first-child) {display: none;}
.topnav a.icon {
float: right;
display: block;
}
}

@media screen and (max-width: 600px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
}
}






@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

* {
font-family: Roboto;
}

section {
width: 100%;
display: inline-block;
background: #ccc;
height: 60vh;
text-align: center;
font-size: 22px;
font-weight: 700;
text-decoration: underline;
}

.footer-distributed {
background-color: #292c2f;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
width: 100%;
text-align: left;
font: normal 16px sans-serif;
padding: 45px 50px;
}

.footer-distributed .footer-left p {
color: #8f9296;
font-size: 14px;
margin: 0;
}
/* Footer links */

.footer-distributed p.footer-links {
font-size: 18px;
font-weight: bold;
color: #ffffff;
margin: 0 0 10px;
padding: 0;
transition: ease .25s;
}

.footer-distributed p.footer-links a {
display: inline-block;
line-height: 1.8;
text-decoration: none;
color: inherit;
transition: ease .25s;
}

.footer-distributed .footer-links a:before {
content: "·";
font-size: 20px;
left: 0;
color: #fff;
display: inline-block;
padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
content: none;
}

.footer-distributed .footer-right {
float: right;
margin-top: 6px;
max-width: 180px;
}

.footer-distributed .footer-right a {
display: inline-block;
width: 35px;
height: 35px;
background-color: #33383b;
border-radius: 2px;
font-size: 20px;
color: #ffffff;
text-align: center;
line-height: 35px;
margin-left: 3px;
transition:all .25s;
}

.footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

.footer-distributed p.footer-links a:hover{text-decoration:underline;}

/* Media Queries */

@media (max-width: 600px) {
.footer-distributed .footer-left, .footer-distributed .footer-right {
text-align: center;
}
.footer-distributed .footer-right {
float: none;
margin: 0 auto 20px;
}
.footer-distributed .footer-left p.footer-links {
line-height: 1.8;
}
}






 

div [class^="col-"]{
  padding-left:5px;
  padding-right:5px;
}
.card{
  transition:0.5s;
  cursor:pointer;
}
.card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
</style>



    <title>Fees View</title>
</head>
<body>




<div class="row">
<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 
<img src="images/lgo1.png" alt=""> 


</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>


<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>

<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 

</div>



 

 




</div>






<div class="topnav" id="myTopnav">
<a href="#home" >Home</a>
  <a href="/classcategory" class="active">Classes</a>
  <a href="#attendance">Attendance</a>
  <a href="#resourses">Resourses</a>
  <a href="#exam">Exams</a>
  <a href="#payments">Payments</a>
  <a href="#notices">Notices</a>
  <a href="#timetable">Timetable</a>
  <a href="#feedback">Feedback</a>
  <a href="#sign">Sign up</a>
  <a href="#log">Log in</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

 



<div class="container">
 



<div class="container mt-2">
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->


<br><br><br><br><br>

  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="card card-block bg-light">
      <h1 class="display-3 text-center text-success"><strong> Total Tuition Fees</strong></h1>
      <h1 class="display-1  text-center"><strong>Rs. {{$data}}.00</strong></h1>
      <br><br>
    <a href="/checkpay"><button class="btn-success text-center"><strong>
      Back</strong></button></a>
  </div>
    </div>
   
  </div>
  
</div>


</div>


<br><br><br><br><br>

    


<footer class="footer-distributed">

<div class="footer-right">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

</div>

<div class="footer-left">



    <p>Tutoring Tube &copy; 2021</p>
</div>

</footer>



</body>
</html>