@extends('layout')

@section('content')

<!-- edit teachers salaary details -->

<br><br>
<div class="container border border-secondary bg-light ">
    <br>
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
    <div class="float-left">
        <h2>Edit Teacher Salary(Admin)</h2>
    </div>   
    </div>
</div>


<form action="{{route('teachsalary.update')}}" method="POST">
    @csrf
    <input type="hidden" name ="id" value ="{{$data->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Teacher ID :</strong>
                <input type ="text" class = "form-control" value ="{{$data->teachid}}" placeholder ="Enter teacher id" name ="teachid" pattern ="[a-zA-Z]+[0-9]{4}" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Teacher Name  :</strong>
                <input type ="text" class = "form-control" value ="{{$data->teachname}}" placeholder ="Enter teacher name" name ="teachname" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>NIC :</strong>
                <input type ="text" class = "form-control" value ="{{$data->nic}}" placeholder ="Enter NIC" name ="nic" pattern ="[0-9]{12}V"required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Teaching Subject  :</strong>
                <input type ="text" class = "form-control" value ="{{$data->subject}}" placeholder ="Enter Subject" name ="subject" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Month Of Salary :</strong>
                <input type ="text" class = "form-control" value ="{{$data->salarymonth}}" placeholder ="Enter month" name ="salarymonth" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Subscribe :</strong>
                <input type ="text" class = "form-control" value ="{{$data->subscribe}}" placeholder ="Enter Subscribe Count" name ="subscribe" required>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Salary Amount :</strong>
                <input type ="text" class = "form-control" value ="{{$data->amount}}" placeholder ="LKR :xxxx.xx" name ="amount" required>
            </div>
        </div>


        

        

        <div class="col-md-12">
            <div class="form-group">
                <button type ="submit" class =" btn btn-primary">Update</button>
                <a class ="btn btn-primary" href= "{{ url('salary') }}"> <i class="fa fa-arrow-left"> Back </i></a>
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


