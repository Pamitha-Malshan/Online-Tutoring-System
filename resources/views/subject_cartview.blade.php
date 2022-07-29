@extends('layout')

@section('content')

<!-- view subject cartview -->

<br><br>
<div class="container">
  <div class="form-group row">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Subject Cart</h2>
      </div>
    <div class="float-right">
          <a class ="btn btn-success" href= "{{route('cartview.create')}}"><i class="fa fa-plus"> Add New Subject </i></a>
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
      <th>Subject ID</th>
      <th>Subject</th>
      <th>Class Fees</th>
      <th>Action</th>

    </tr>
    </thead>
      <!-- for subject record -->

        @foreach ($cart as $data)

    <tr>

    <td>{{$data->subjectid}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->fees}}</td>

    <td>

       <form action="{{route('cartview.destroy',$data->id)}}" method="POST">
         @csrf
         @method('DELETE')
          <div class="container">
            <div class="row">
              <div class="col text-center">
            
                <button type ="submit" class =" btn btn-danger" onclick="return confirm('Are you sure to delete the subject? ')"><i class="fa fa-trash"> Delete </i></button>
             
              </div>
            </div>
          </div>
        </form> 
    </td>
    </tr>
   
      @endforeach  
</table>

<br><br>

  <table class="table table-dark col text-center">

    <tr>
     <th class="bg-primary">Total Class Fee = {{$sum}}.00 </th>
    </tr>
          
  </table>
  <div class="float-right">
  <a class ="btn btn-primary" href="{{route('details.create')}}" > Next <i class="fa fa-arrow-right">  </i></a>
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

  
    

   
    



