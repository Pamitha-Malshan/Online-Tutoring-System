@extends('layout')

@section('content')

<!-- admin update student payment status -->

<br><br>
<div class="container border border-secondary bg-light ">
    <br>
  <div class="form-group row">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Review And Update Payment Status(Admin)</h2>
      </div>
    </div>
  </div>


    <form action ="{{route('details.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type ="hidden" name ="id" value ="{{$payment->id}}"/>
    
    <div class ="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Student ID :</strong>
                <input type ="text" class = "form-control" value ="{{$payment->stuid}}" placeholder ="Enter Student ID" name ="stuid" pattern ="[a-zA-Z]+[0-9]{8}" readonly>
            </div>
        </div>

          <div class="col-md-6">
            <div class="form-group">
                <strong>Student Full Name :</strong>
                <input type ="text" class = "form-control" value ="{{$payment->stuname}}" placeholder ="Enter Student name" name ="stuname" readonly>
            </div>
          </div>
    </div>


    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Grade :</strong>
                    <input type ="text" class = "form-control" value ="{{$payment->grade}}" placeholder ="Enter Grade" name ="grade" pattern ="[0-9]{1,2}" readonly>
                </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
                    <strong>Enter Your Subjects id :</strong>
                    <input type ="text" class = "form-control" value ="{{$payment->subid}}" placeholder ="eg- S1234,M4567" name ="subid" readonly>
                </div>
              </div>
    </div>

    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Month of payments :</strong>
                    <input type ="text" class = "form-control" value ="{{$payment->month}}" placeholder ="month" name="month"readonly>
                </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
                    <strong>Total Class Fees LKR:</strong>
                    <input type ="text" class = "form-control" value ="{{$payment->totfee}}" placeholder ="eg-1000.00"  name ="totfee" readonly>
                </div>
              </div>
    </div>

    <div class ="row ">
            <div class="col-md-6">
                <div class="form-group">
                  <strong>Bank :</strong>
                    <select class="form-control" id="exampleFormControlSelect1" name ="bank" readonly>
                      <option value ="Sampath Bank">Sampath Bank</option>
                      <option value ="Commercial Bank">Commercial Bank </option>
                      <option value ="Seylan Bank">Seylan Bank</option>
                    </select>
                 </div>
            </div>
   

              <div class="col-md-6" >
                <div class="form-group">
                    <strong>Bank branch :</strong>
                    <input type ="text" class = "form-control" value ="{{$payment->branch}}" placeholder ="Enter Bank branck" name ="branch" readonly>
                </div>
              </div>
    </div>

    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type ="date" class = "form-control" value ="{{$payment->date}}" name ="date"  readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Student Email:</strong>
                    <input type ="text" class = "form-control"  value ="kamaldeshan@gmail.com"  readonly>
                </div>
            </div>

            

             
    </div>              
  
    <div class ="row ">
            <div class="col-md-12 ">
                <div class="form-group">
                  <strong>Update Student Payment Status :</strong>
                    <select class="form-control bg-success text-white" id="exampleFormControlSelect1" name ="status">                      
                    <option value ="Not Review">Not Review</option>
                    <option value ="Payment Accept">Payment Accept </option>
                      <option value ="Payment Decline">Payment Decline</option>
                    </select>
                 </div>
              </div>
            </div>                                    
                   
            <div class="form-group">             
                <button type ="submit" class =" btn btn-primary"  onclick="return confirm('Are you sure to update payment details?')"   >Update</button>
                                     
            </div>         
         
</form>

<script>
    function previewFile(input){

      var file=$("input[type=file]").get(0).files[0];
      if(file)
      {
        var reader = new FileReader();
        reader.onload = function(){

          $('#previewImg').attr("src",reader.result);
        }
        reader.readAsDataURL(file);
      }
    }


  </script>

  </div>
 
  <br>
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

</div>		
        
    @endsection

  
    

   
    



