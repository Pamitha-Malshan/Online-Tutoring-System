@extends('layout')

@section('content')

<!-- view student payment details -->

<br><br>
<div class="container border border-secondary bg-light ">
    <br>
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Student Payment Details</h2>
      </div>
    </div>
</div>

  

    <form action ="{{route('details.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class ="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Student ID :</strong>
                <input type ="text" class = "form-control" placeholder ="Enter Student ID" name ="stuid" pattern ="[a-zA-Z]+[0-9]{8}" title="Studentve ID is Invalid" required>
            </div>
        </div>

          <div class="col-md-6">
            <div class="form-group">
                <strong>Student Full Name :</strong>
                <input type ="text" class = "form-control" placeholder ="Enter Student name" name ="stuname" required>
            </div>
          </div>
    </div>


    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Grade :</strong>
                    <input type ="text" class = "form-control" placeholder ="Enter Grade" name ="grade" pattern ="[0-9]{1,2}" required>
                </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
                    <strong>Enter Your Subjects id :</strong>
                    <input type ="text" class = "form-control" placeholder ="eg- S1234,M4567" name ="subid" required>
                </div>
              </div>
    </div>

    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Month of payments :</strong>
                    <input type ="text" class = "form-control" placeholder ="month" name="month"required>
                </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
                    <strong>Total Class Fees LKR:</strong>
                    <input type ="text" class = "form-control" placeholder ="eg-1000.00"  name ="totfee" required>
                </div>
              </div>
    </div>

    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                  <strong>Bank :</strong>
                    <select class="form-control" id="exampleFormControlSelect1" name ="bank">
                      <option value ="Sampath Bank">Sampath Bank</option>
                      <option value ="Commercial Bank">Commercial Bank </option>
                      <option value ="Seylan Bank">Seylan Bank</option>
                    </select>
                 </div>
            </div>
   

              <div class="col-md-6">
                <div class="form-group">
                    <strong>Bank branch :</strong>
                    <input type ="text" class = "form-control" placeholder ="Enter Bank branck" name ="branch" required>
                </div>
              </div>
    </div>

    <div class ="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type ="date" class = "form-control"  name ="date"  required>
                </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label for = "file">Bank Slip</label>
                    <input type ="file" class = "form-control"  name ="file" onchange ="previewFile(this)" required/>
                    <img id ="previewImg" alt = "Bank Slip"  style ="max-width:130px;margin-top:20px;"/>
                </div>
              </div>
    </div>            
            <div class="form-group">             
                <button type ="submit" class =" btn btn-primary" onclick="return confirm('Are you sure to make a payment? ')">Submit</button>
            </div>
                 
                
             
       
  <div class ="row">
            <div class="col-md-12">
                <div class="form-group">                   
                    <input type ="hidden" value ="Not Review" class = "form-control"  name ="status"  readonly>
                </div>
            </div>          
 
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

  
    

   
    



