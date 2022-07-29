<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



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



</style>







    <title>Update Class</title>
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

 
 






    <div class="container mt-4 mb-4">
    
    <div class="card bg-dark text-light p-4">

    <div class="form-group row">
<div class="col-lg-12 margin-tb">
    <div class="float-right">
        <h1><strong>Update Classes</strong></h1>
    </div>

</div>
</div>




<form action="/updatedolclass" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Grade</strong>
            <input type="text" class="form-control" placeholder="enter class id" name="cid" value="{{$classdata->cid}}">
        
            
        </div>
    </div>



<div class="col-md-12">
        <div class="form-group">
            <strong>Subject</strong>
            <input type="text" class="form-control" placeholder="enter subject id" name="sid" value="{{$classdata->sid}}">
       
       
       
       
        </div>
    </div>



    <div class="col-md-12">
        <div class="form-group">
            <strong>Date</strong>
            <input type="date" class="form-control" placeholder="date" name="date" value="{{$classdata->date}}">
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Time</strong>
            <input type="time" class="form-control" placeholder="enter time" name="time" value="{{$classdata->time}}">
        </div>
    </div>




    <div class="col-md-12">
        <div class="form-group">
            <strong>Handler</strong>
            <input type="text" class="form-control" placeholder="enter handler" name="handler" value="{{$classdata->handler}}">
        </div>
    </div>



    <div class="col-md-12">
        <div class="form-group">
            <strong>Link</strong>
            <input type="text" class="form-control" placeholder="enter link" name="link" value="{{$classdata->link}}">
        </div>
    </div>


    <div class="col-md-12">
    <div class="form-group">
    <input type="hidden" name="id" value="{{$classdata->id}}">
    </div>
    </div>


    <div class="col-md-12 mt-3 mb-2">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
          
        <a class="btn btn-primary" href="/classview">Back</a>
  

        </div>
    </div>


</div>

</div>

</form>




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