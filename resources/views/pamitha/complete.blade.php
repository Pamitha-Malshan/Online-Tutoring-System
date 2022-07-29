<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form{
            background-color:;
            padding : 30px 100px 50px 100px;
            margin: 50px 400px 00px 400px;
            border-radius:10px;
            border:2px solid blue;
        }
        h1{
            font-size:35px;
        }
        select{
            width:80px;
        }
    </style>
</head>
<body>
    
    <center>
<form action="/up" method="POST">

  <img src="/image/sss.jpg" width="350px" height="250px" >
    </br>
    </br>
    {{csrf_field()}}
    <input type="hidden"  name="id" value="{{$dely->id}}"   class="dk">
    <center>
    <h1>Did you complete the delivery ?</h1>
    </center>
    </br>
    <select name="finish" value="{{$dely->isimplement}}" class="dk">
        <option value="0" >NO </option>
	     <option value="1" >YES</option>  
  </select>
    </br>
    </br>
    <input type="submit"name="" value="Enter" class="btn btn-success" />
    </form>
</center>
</body>
</html>