<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  


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




/*button*/

.button {
  background-color: #4CAF50; /* Green */
  border: 1px;
  color: white;
  padding: 2px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 8px;
  margin: 2px 1px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}





/*card*/
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}





/*zoom*/

.zoom {
 
  transition: transform .2s;
 
}

.zoom:hover {
  -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
}





/*footer------------------------------------------------------------------------------------*/



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



    <title>Class Category</title>
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

 

  <a href="/adminmain" >Home</a>
  <a href="/admincmanage" class="active">Classes</a>
  <a href="/rhome">Attendance</a>
  <a href="/rhome">Resourses</a>
  <a href="/examHome">Exams</a>
  <a href="/cartview">Payments</a>
  <a href="/msg">Notices</a>
  <a href="/rhome">Timetable</a>
  <a href="/msg">Feedback</a>
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




<table class="table table-striped table-dark mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Live Classes Manage</th>
      <th scope="col">Rec. Classes Manage</th>
      <th scope="col">Calculate Fees</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Grade 6-9</th>
      <td> <a href="/classview" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  Manage </a></td>
      <td><a href="/recclassview" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  Manage </a></td>
      <td><a href="/checkpay" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  CalFees </a></td>
    </tr>
    <tr>
      <th scope="row">O/L</th>
      <td><a href="/classview" class="btn btn-light fa fa-cogs" style="font-size:21px; color:dark">  Manage</a></td>
      <td><a href="/recclassview" class="btn btn-light fa fa-cogs" style="font-size:21px; color:dark">  Manage</a></td>
      <td><a href="/checkpay" class="btn btn-light fa fa-cogs" style="font-size:21px; color:dark">  CalFees</a></td>
    </tr>
    <tr>
      <th scope="row">A/L</th>
      <td><a href="/classview" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  Manage</a></td>
      <td><a href="/recclassview" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  Manage</a></td>
      <td><a href="/checkpay" class="btn btn-success fa fa-cogs" style="font-size:21px; color:dark">  CalFees</a></td>
    </tr>
  </tbody>
</table>







<a href="/gencreport"><button type="button" class="btn btn-dark text-light btn-lg btn-block mt-5 mb-1">Generate Report</button></a>


<a href="/classcategory"><button type="button" class="btn btn-dark text-light btn-lg btn-block mt-1 mb-5">Move to student side</button></a>








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