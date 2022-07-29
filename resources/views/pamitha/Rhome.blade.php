<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
   
   
	<link rel="stylesheet"  href="/css/Rhome.css">
<style>
   

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.bgcolor{
  background-color:#DBDBDB;

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
hr{
  color:blue;
  margin:0px 50px 0px 50px;
}
.side{
  background-color: rgb(4, 114, 62);
  width:920px;
  height: 50px;

}

</style>

</head>
<body>

<div class ="bgcolor">
<div class="row ">
<div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 
<img src="/image/lgo1.png" alt=""> 

</div>
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
  <a href="/" >Home</a>
  <a href="/admincmanage">Classes</a>
   <a href="#about">Attendance</a>
  <a href="#"class="active">Resourses</a>
  <a href="/examHome">Exams</a>
  <a href="/financial">Payments</a>
  <a href="#about">Notices</a>
   <a href="#about">Timetable</a>
   <a href="/msg">Feedback</a>
  <a href="#about">Sign up</a>
  <a href="#about">Log in</a>
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
 
</br>
	 <center>
	 <form action="/tsearch" method="get">
       <input type="text" name="name" placeholder="Enter what do you want..." required /><button>Search</button>
     </form>
     </center>
</br>

</br>
<center>          
    <table>
	
	   <tr>
	      <td>
		   <center>
        <center>
        <img src="/image/22.jpg" width="150px" height="180px" >
        </center>
		     <h1>Grade 6 to 10</h1>
             <a href="/grade6">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>
		   </td>
		    <td>
			 <center>
       <center>
        <img src="/image/pp.jpg" width="150px" height="180px">
        </center>
			 <h1>Grade 10 and 11</h1>		 
             <a href="/OL">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>
		   </td>
		    <td>
			<center>
      <center>
        <img src="/image/dd.jpg" width="150px" height="180px">
        </center>
			 <h1>Advance Leval</h1>
             <a href="/AL">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>
		   </td>
	   </tr>

    </table>
</br>
</br>
<table>
	<tr >
		<td>
	   <center>
     <center>
        <img src="/image/deli.png" width="200px" height="180px">
        </center>
			 <h1>Delivary TUTE</h1>
             <a href="/delivery">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>  
       </td>
	   <td>
	   <center>
     <center>
        <img src="/image/pdf.png" width="150px" height="180px">
        </center>
			 <h1>PDF Handle</h1>
             <a href="/pdf">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>
       </td>  
       <td>
	   <center>
     <center>
        <img src="/image/rep.jpg" width="150px" height="180px">
        </center>
			 <h1>Report</h1>
             <a href="/report">
                <input type="submit"name="" value="Manage" >
			 </a>
			 </center>
       </td>  
       </tr>
     
     

</div>	
</table>


</br>
</br> 
       
	   <center>
             <a href="/Dman">
                <button class="side" >Move Delivery person Side</button>
			 </a>
			 </center>
</br>
      
	   <center>
             <a href="/pdfR">
             <button class="side">Move student PDF Side</button>
			 </a>
			 </center>
    
       
    
    
</center>
</table>
</br>

</div>
      <div class="container-lg">
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