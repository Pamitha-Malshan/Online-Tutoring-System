<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



   
   <style>

     html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

    </style>



</head>
<body>



<div class="container">
    <div class="text-center">
    <h1>USER FEEDBACK</h1>
    <div class="row">
         <div class="col-md-12">
   
<table class="table table-dark">
                <th>ID</th>
                <th>stars</th>
                <th>Comments</th>


<tr>       
@foreach($task as $task)
            <td>{{$task->id}}</td>

            <td>
        @if(($task->rating)==1)
        <img src="img/onestarnew.jpg" alt=""> 

        @elseif(($task->rating)==2)
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 

        @elseif(($task->rating)==3)
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 

        @elseif(($task->rating)==4)
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt="">  

        @elseif(($task->rating)==5)
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt=""> 
        <img src="img/onestarnew.jpg" alt="">  
         
        @endif
            </td>

            <td>{{$task->comment}}</td>

</tr> 

@endforeach

</table>


<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Rate', 'star Precetage'],
  ['Five Stars',40],
  ['Four Stars',49],
  ['Three Stars',44],
  ['Two Stars',24],
  ['One Stars',15]
]);

var options = {
  title:'Rating Precentage'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>



















</div>
</div>
</div>
</div>
</body>
</html>