<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Report</title>
</head>
<body>

<style>
 
    .background{
        background-color:#e9ecef;       
    }

    .hedding{
       font-size: 35px;
       text-align:center;
       margin-top:40px;
       margin-bottom:40px;
    }

    .row{
        font-family: Arial,Helvetica,sans-serif;
        background-color: #04aa6d;
        color:white ;
        font-size: 16px;
        text-align:center;
    }

    #report{        
        border-collapse: collapse;
        width: 100%;
     
            
    }

    #report td,#report th{
        border: 0.5px solid #606160 ;
        padding: 18px;
    }

    #report tr:nth-child(even){
        background-color:white;
    }

    .rowstyle{
     font-family: "Times New Roman", Times, serif;
      font-size: 18px;
      color:black ;
}

    .revenue{

        background-color:#e9ecef ;
        font-size: 25px;
      color:black ;

    }


</style>


<h1 class="hedding">Student Class Fees Report</h1>


   <table id="report">
       <thead>
           <tr class="row">              
                  <th>Student ID</th>
                  <th>Name</th>      
                  <th>Month</th>
                  <th>Class Fees</th>                 
           </tr>
       </thead>    
   
      <!-- for subject record -->

        @foreach ($reports as $rep)

<tr class="rowstyle" >

    <td>{{ $rep->stuid}}</td>
    <td>{{ $rep->stuname}}</td>   
    <td>{{ $rep->month}}</td>
    <td>{{ $rep->totfee}}</td>   
         
                
</tr>


        @endforeach  
</table>         
<br><br> 

   <table id="report" class="revenue" >

    <tr>
     <th >Total Revenue = {{$totfees}}.00 </th>
    </tr>
          
  </table>

  <br>


</body>
</html>
     
        


<style>
.button {
 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

.button1 {padding: 10px 24px;
    background-color: #007bff;
}

.button2 {padding: 10px 24px;
    background-color:#dc3545;
}

</style>

<a href="{{ url('financial') }}" class="button button1">Back</a>
<a href="{{ url('reportdownload') }}" class="button button2">Genarate Report</a>
