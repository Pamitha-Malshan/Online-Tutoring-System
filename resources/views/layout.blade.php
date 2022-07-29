<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ URL::asset('/css/navbar.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/footer.css') }}" rel="stylesheet">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>payments</title>
  </head>

  <body>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container-lg">
  <div class ="bgcolor">
    <div class="row ">
      <div class="col-2 col-xl-2 col-lg-2 mt-1 mb-1"> 
        <img src="/img/img2.png" alt=""> 
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
  <a href="#home" class="active">Home</a>
  <a href="#news">Classes</a>
  <a href="#contact">Resourses</a>
  <a href="#about">Exams</a>
  <a href="/cartview">Payments</a>
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
</div>

        @yield('content')

     
                    
</div>
  </body>

</html>

