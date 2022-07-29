@extends('layout')

@section('content')

<!-- Admin Can view Student payment details summary  -->

<br><br>

<div class="container">
  <div class="form-group row">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Student Payment Details Summary(Admin)</h2>
      </div>

      <div class="float-right">
        <div class="col-md-12">
          <form action="/search" method = "get">
              <div class="input-group">
                <input type="search" name ="search" placeholder ="Enter Student ID"  class ="form-control bg bg-light">
                  <span class="input-group-prepend">
                    <button type ="submit" class = "btn btn-primary">
                      Search
                    </button>
                  </span>
              </div>
          </form>
        </div>
      </div>
   

    </div>
  </div>

  <!-- Display successfull message -->

@if(Session::has('message2'))
  <div class="alert alert-success" role="alert">
  {{Session::get('message2')}}
  </div>
    @endif


<table class ="table table-striped table-bordered ">
<thead class="thead-dark">
    <tr>
      <th class="text-center">Student ID</th>
      <th class="text-center">Name</th>      
      <th class="text-center">Month</th>
      <th class="text-center">Total Fee</th>
      <th class="text-center">Bank Slip</th>
      <th class="text-center">Status</th>
      <th class="text-center">Action</th>    
                  
      </tr>
  </thead>
      <!-- for subject record -->

        @foreach ($data as $details)

  <tr>

    <td>{{$details->stuid}}</td>
    <td>{{$details->stuname}}</td>   
    <td>{{$details->month}}</td>
    <td>{{$details->totfee}}</td>
    <td><img src = "{{asset('images')}}/{{$details->slipimage}}" style ="max-width:60px;"/></td>
    <td>{{$details->status}}</td>
    <td class="text-center"><a href ="edit_payment_info/{{$details->id}}" class ="btn btn-success"><i class="fa fa-edit"> Review </i></a>
    <a class =" btn btn-info" href="{{ url('message') }}" ><i class="fa fa-paper-plane"> Send </i></a></td>
    
                
  </tr>
        @endforeach
</table>         
<br><br>

  
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

  
    

   
    



