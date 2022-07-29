<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="/css/subjectinsert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
     .table{
         width: 800px;
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
  <a href="#home">Home</a>
  <a href="#news">Classes</a>
   <a href="#about">Attendance</a>
  <a href="/rhome">Resourses</a>
  <a href="#about">Exams</a>
  <a href="#about">Payments</a>
  <a href="#about">Notices</a>
   <a href="#about">Timetable</a>
   <a href="#about">Feedback</a>
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
function validateForm() {
    let x = document.forms["subject"]["code"].value;
    let y = document.forms["subject"]["subject"].value;
    let z = document.forms["subject"]["grade"].value;
    let q = document.forms["subject"]["qut"].value;
  
    if (x == ""  ) {
      swal("Empty field!", "Please fill subject code field", "error"); 
      return false;
    }
   
    else if (y == "") {
      swal("Empty field!", "Please fill subject field", "error");
        return false;
        
    }
    else if (z == "") {
      swal("Empty field!", "Please fill grade code field", "error");
        return false;
        
    }
    else if (q == "") {
      swal("Empty field!", "Please fill Quentity field", "error");
        return false;
        
    }
   }
</script>

<table>
    <tr>
        <th>
<form action="/saveinsert" method="POST" onsubmit="return validateForm()" name="subject">
{{csrf_field()}}
  <p class="del">Insert Tutes Details</p>
  
  <label>Enter Subject code :</label></br>
  <input type="text"  name="code" maxlength="4" minlength="4" placeholder="Enter 4 character code"  class="dk"><br><br>
  
  <label>Enter Subject name :</label></br>
  <select name="subject" id="" class="dk">
       <option value="maths" >Maths </option>
	     <option value="sinhala" >Sinhala </option>
	     <option value="English" >English</option>
      <option value="science" >Science</option>
      
  </select>
  </br>
  </br>

  <label>Enter Grade  :</label></br>
  <select name="grade" id="" class="dk" >
       <option value="10" >10 </option>
	     <option value="11" >11 </option>
	    
  </select>

  </br>
  </br>
   <label >Enter Quentity of tute :</label><br>
   <input type="number"  name="qut"   class="dk"><br><br>
   
    <center>
    <button class="btn btn-success">Insert <ion-icon name="add-outline"></ion-icon> </button>
	</center>   
  </form> 
        
  

    
        </th>
        <th>
    <table class="table table-bordered table-striped table-dark">
        <th>id</th>
        <th>code</th>
        <th>subject</th>
        <th>grade</th>
        <th>quentity</th>

        @foreach($subjects as $task)
        @if(($task->grade)==10 || ($task->grade)==11 )
             <tr>
                  <th>{{$task->id}}</th>
                  <th>{{$task->code}}</th>
                  <th>{{$task->subject}}</th>
                  <th>{{$task->grade}}</th>
                  <th>{{$task->quentity}}</th>

                 <th> <a href="/ddeletetask/{{$task->id}}">
                 <button class="btn btn-warning" onclick="return confirm('Are you sure to Delete details?')"><i class="fa fa-trash"> Delete </i></button>
                 </a>
                 <a href="/updateOL/{{$task->id}}">
                 <button class="btn btn-warning">update</button>
                </a></th>
            </tr>
            @endif
        @endforeach
    </table>
        </th>
        </tr>
</table>
        <div class="foot">
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
