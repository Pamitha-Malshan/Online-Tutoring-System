<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Classes</title>
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
  <a href="/admincmanage" class="active">Classes</a>
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


<style>
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: right;
  width: 20%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: right;
  width: 5%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}








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












</style>






<form class="example mt-4 mb-2" action="/searcholclassid" method="get">
@csrf

  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>






<div class="form-group row">
<div class="col-lg-12 margin-tb">
    <div class="text-center">
        <h2 class="font-weight-bold"><strong>Live Classes</strong></h2>
    </div>
 
</div>


</div>








@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



@if(session()->has('umessage'))
    <div class="alert alert-success">
        {{ session()->get('umessage') }}
    </div>
@endif


@if(session()->has('dmessage'))
    <div class="alert alert-danger">
        {{ session()->get('dmessage') }}
    </div>
@endif



@if(session()->has('ucmessage'))
    <div class="alert alert-info">
        {{ session()->get('ucmessage') }}
    </div>
@endif




@if(session()->has('ucnmessage'))
    <div class="alert alert-info">
        {{ session()->get('ucnmessage') }}
    </div>
@endif




 
<div class="table-responsive">

<table class="table table-bordered table-striped table-dark">
<tr class="bg-info">
<th>Grade</th>
<th>Subject</th>
<th>Date</th>
<th>Time</th>
<th>Handler</th>
<th>Link</th>
<th>Completeness</th>
<th>Change</th>
<th>Action</th>


</tr>

@foreach($classview as $class)
<tr>
   <td>{{$class->cid}}</td>
   <td>{{$class->sid}}</td>
   <td>{{$class->date}}</td>
   <td>{{$class->time}}</td>
   <td>{{$class->handler}}</td>
   <td><a href="{{$class->link}}">Click Here</a></td>

<td>
@if($class->isfinished)

   <button class="btn btn-success fa fa-plus-square" style="font-size:18px;"> Completed</button>
@else
   <button class="btn btn-warning fa fa-minus-square" style="font-size:18px;"> Incompleted</button>


@endif

</td>

<td>
@if(!$class->isfinished)


<a class="btn btn-info fa fa-arrow-circle-left" style="font-size:18px;" href="/olmarkas/{{$class->id}}"> Change</a>  
@else

<a class="btn btn-danger fa fa-arrow-circle-right" style="font-size:18px;" href="/olmarkasnot/{{$class->id}}"> Change</a>  
@endif
</td>


<td>
<a class="btn btn-primary fa fa-edit" style="font-size:24px; color:white" href="/updateolclass/{{$class->id}}"></a>
 <a class="btn btn-warning fa fa-trash-o" style="font-size:24px; color:red" href="/deleteolclass/{{$class->id}}"></a>

   </td>

</tr>

@endforeach


</table>
</div>

<div class="float-right mb-4">
        <a class="btn btn-success" href="/addolclassv">Add New Class</a>
    </div>


</div>







 

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