<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:800px;
            margin:0 auto;
        }
        .fram{
            border: 3px solid green;
            margin: 00px 100px 00px 100px;
        }
        h1{
            background-color: green;
            padding: 30px 30px 30px 30px;
            color:white;
        }
        .sd{
            padding:30px 60px 20px 60px;
            background-color:rgb(48, 47, 51);
            margin: 100px;
            border-radius:8px;
        }
        button{
            width:150px;
        }
        p{
            color:white;
            font-size:25px;
        }
    </style>
</head>
<body>
    </br>
<div class="fram">
    <center>
    <h1>Deliveries of each members</h1>
    </center>
<table>
    </br>
     <tr>
     <th>
     <div class="sd" >
         <center>
         <p>Reports</p>
         </center>
    </br>
    <a href="/sreport"><button class="btn btn-success">Tute</button></a></br></br>
    <a href="/report"><button class="btn btn-success">Complete</button></a></br></br>
    <a href="/reportS"><button class="btn btn-success" >PDF</button></a></br></br>
    <a href="/rhome" > <button class="btn btn-success">Back</button></a></br></br>
    </div>
    </th>
    <th>
    
<div class="container" style="margin-top: 50px;">
        <div class="row">
                 <div class="panel-body" align="left">
                 <div id="pie_chart" style="width:750px; height:450px;">
        </div>
    </div>
    <script type="text/javascript">
        var analytics = <?php echo $dname; ?>

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : '   Percentage of each members has delivery'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
    </th>
    </tr>
    </table>
    </div>
</body>
</html>