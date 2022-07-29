<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('/css/email.css') }}" rel="stylesheet">  
    <title>Email</title>
  </head>
  <body>
   
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

<section style="padding-top:90px">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border border-secondary " >
                    <div class="card-header text-center">
                        <h2>Send Email Confirmation</h2>
                    </div>
                    <div class="card-body">


                        @if(Session::has('email_send'))

                        <div class="alert alert-success" role="alert">
                        {{Session::get('email_send')}}
                         </div>
                        @endif


                        <form action="{{route('message.send')}}" method ="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <lable for = "Name">Student Name</lable>
                            <input  type="text" name ="name" placeholder ="Enter Name" class ="form-control" required/>
                        </div>

                        <div class="form-group">
                            <lable for = "email">Email</lable>
                            <input  type="email" name ="email" placeholder ="Enter Email" class ="form-control" pattern ="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required/>
                        </div>

                        
                    <div class="form-group">
                        <lable for = "message">Message</lable>
                        <select class="form-control " id="exampleFormControlSelect1" name ="message">                      
                            <option value ="Not Select">Not Select</option>
                            <option value ="Your Class fees were accepted.">Your Class fees were accepted.</option>
                            <option value ="Your Class fees were Declined,  please contact -1880.">Your Class fees were Declined,  please contact -1880.</option>
                         </select>
                     </div>

                         <div class="form-group">
                            <lable for = "Name">Class Enrollment Key (optional)</lable>
                            <input  type="text" name ="key" placeholder ="Enrollment Key" class ="form-control" pattern ="[0-9]{4}" />
                        </div>


                        <div class="form-group">
                            <lable for = "Name">Zoom Class ID (optional)</lable>
                            <input  type="text" name ="zoom" placeholder ="Zoom ID" class ="form-control" pattern ="[0-9]{6}"/>
                        </div>

                        

                 <div class="float-left">
                 <a class ="btn btn-primary" href="{{ url('paymentsummary') }}" >  <i class="fa fa-arrow-left"> Back </i></a>
                 <button type ="submit" class="btn btn-success" ><i class="fa fa-paper-plane"> Send Email Notifications </i></button>
                 </div>
                  


                </form>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>


</body>
</html>