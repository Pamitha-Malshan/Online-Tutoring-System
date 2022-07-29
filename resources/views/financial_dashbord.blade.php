@extends('layout')

@section('content')

<!-- display financial manager dashbord -->

<link href="{{ URL::asset('/css/dashbord.css') }}" rel="stylesheet">

<br>

<div class="text-center">
        <h1>Financial Manager Dashboard</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow border border-primary" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/img/img5.jpg" alt="Card image cap">
                </div>              
                    <div class="card-body text-center">            
                    <a href="{{ url('paymentsummary') }}" class="btn btn-primary ">Manage  Student Payment</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border border-danger" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/img/img6.jpg" alt="Card image cap">
                </div>  
                    <div class="card-body text-center">            
                    <a href="{{ url('salary') }}" class="btn btn-danger ">Manage  Teachers Salary</a>
                    </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border border-success" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/img/img7.jpg" alt="Card image cap">
                </div>  
                    <div class="card-body text-center">            
                    <a href="{{ url('reports') }}" class="btn btn-success"> View Reports  </a>
                    </div>
            </div>
        </div>


        
    </div>
</div>

<br><br><br>

</div>
</div>   
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



