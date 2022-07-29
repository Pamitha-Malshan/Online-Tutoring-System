@extends('layout')

@section('content')

<!-- Add Subject in to the student subject cart -->

<br><br>
<div class="container border border-secondary bg-light">
    <br>
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Subject</h2>
        </div>   
    </div>
</div>


<form action="{{route('cartview.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Subject ID :</strong>
                <input type ="text" class = "form-control" placeholder ="Enter Subject id" name ="subjectid" pattern ="[a-zA-Z]+[0-9]{4}" title="Subject ID is Invalid" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Subject  :</strong>
                <input type ="text" class = "form-control" placeholder ="Enter subject name" name ="name" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Class Fee LKR : </strong>
                <input type ="text" class = "form-control"  name ="fees" value =  "1000.00" readonly>
            </div>
        </div>

        

        <div class="col-md-12">
            <div class="form-group">
                <button type ="submit" class =" btn btn-primary">Submit</button>
                <a class ="btn btn-primary" href= "{{route('cartview.index')}}"> <i class="fa fa-arrow-left"> Back </i></a>
            </div>
        </div>


    </div>
</form>


</div>

<br><br><br><br><br><br><br><br>

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


