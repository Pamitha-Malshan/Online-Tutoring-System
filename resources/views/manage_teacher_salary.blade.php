@extends('layout')

@section('content')

<!-- dispaly teacher salary details and admin can edit and delete salary details -->

<br><br>
<div class="container ">
  <div class="form-group row">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Summary of Teachers' Salaries(Admin)</h2>
      </div>

      <div class="float-right">
        <div class="col-md-12">
          <form action="/search-teacher" method = "get">
              <div class="input-group">
                <input type="search" name ="searchteacher" placeholder ="Enter Teacher ID"  class ="form-control bg bg-light">
                  <span class="input-group-prepend">
                    <button type ="submit" class = "btn btn-primary">
                      Search
                    </button>
                  </span>
              </div>
          </form>
          </div>
          </div>

    <div class="float-right">
             <a class ="btn btn-success" href= "{{route('salary.create')}}"><i class="fa fa-plus"> Add New Salary Record </i></a>
    </div>

  </div>
</div>

@if(session('message'))

  <div class ="alert alert-success">
      {{session('message')}}
  </div>

@endif


<table class ="table table-striped table-bordered ">
<thead class="thead-dark">
    <tr>
      <th>Teacher ID</th>
      <th class="text-center">Teacher Name</th>
      <th class="text-center">NIC</th>
      <th>Subject</th>
      <th>Salary Of <br>Month</th>
      <th>Total <br>Subscribe</th>
      <th>Salary</th>      
    <th class ="text-center">Action</th>

    </tr>
    </thead>
      <!-- for subject record -->

        @foreach ($salary as $data)

    <tr>

    <td>{{$data->teachid}}</td>
    <td>{{$data->teachname}}</td>
    <td>{{$data->nic}}</td>
    <td>{{$data->subject}}</td>
    <td>{{$data->salarymonth}}</td>
    <td>{{$data->subscribe}}</td>
    <td>{{$data->amount}}</td>
    
      
     
    

    <td>
    
       <form action="{{route('salary.destroy',$data->id)}}" method="POST">
          <a href ="/edit_student/{{$data->id}}" class ="btn btn-success"><i class="fa fa-edit"> Edit </i></a>
         @csrf
         @method('DELETE')     
            
                <button type ="submit" class =" btn btn-danger" onclick="return confirm('Are you sure to delete the Salary Record? ')"><i class="fa fa-trash"> Delete </i></button>

        </form>         
    </td>
    </tr>
   
      @endforeach  
</table>

<br><br>

  <table class="table table-dark col text-center">

  
          
  </table>
  <div class="float-right">
  <a class ="btn btn-primary" href="{{ url('financial') }}" >  <i class="fa fa-arrow-left"> Back </i></a>
</div>
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

  
    

   
    



