<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
   <style>
       .fram{
           border: 2px solid black;
           border-radius: 8px;
           padding: 20px;
           margin: 0px 200px;
       }
       table{
            border: 2px solid black;
            width: 900px;
            height: 40px;
       }
       table tr{
           background:blue;
           height:35px;
       }
       
       .primary{
           width:200px;
           height: 39px;
           background: green;
           border-radius: 8px;
           font-size: 18px;
           color:white;
       }
       .comp{
           width:150px;
           height: 30px;
           background: red;
           border-radius: 8px;
           font-size: 18px;
           color:white;
       }
       .hed{
           font-size: 35px;
       }
       .con{
        font-size: 20px;
       }
   
</style>
<body>   
    </br>
    </br>
    </br>
    </br>
    <div class="fram">
    <center>

        <p class="hed">Report of the Delivery</p>
    </br>
  <table>  
    <thead>  
        <tr>       
        <th class="hk">id</th>
        <th class="hk">Delivery person code</th>
        <th class="hk">Delivery persone name</th>
        <th class="hk">student id</th>
        <th class="hk">student name</th>
        <th class="hk">student address</th>
        <th class="hk">tute</th>
        <th class="hk">IScompleted</th>
        <th class="hk">completed day</th>
    </tr>
    </thead>
   <tbody>
             
   <tr>
                  <th>{{$task->id}}</th>
                  <th>{{$task->dcode}}</th>
                  <th>{{$task->dname}}</th>
                  <th>{{$task->studentid}}</th>
                  <th>{{$task->studentname}}</th>
                  <th>{{$task->studentaddress}}</th>
                  <th>{{$task->tute}}</th>
                  <th>
                      @if($task->isimplement)
                       <button class="comp">complete </button>
                       <th>{{$task->updated_at}}</th>
                       @else
                       <button class="comp">not complete </button>
                       <th><p> - </p></th>
                       @endif
                  </th>
    </tr>
    </tbody>
    </table>
    </br>
    </br>
    <a href="/deliverypdf/{{$task->id}}">
    <button class="primary">Export PDF</button>
    </a>
    </br>
    </br>
  </center>
</div>


</body>
</html>