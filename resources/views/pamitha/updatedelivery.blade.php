<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        form{
              border: 2px solid black;
              padding : 20px 60px 20px 60px;
              margin:20px 260px 20px 260px;
              border-radius:10px;
        }
        input[type="text"]{
            width:350px;
            border: 2px solid blue;
            height:39px;
            border-radius:8px;
           
   }
   input[type="submit"]
                {
               border:none;
               outline:none;
               height: 35px;
               width : 170px;
               background:pink;
               font-size: 16px;
               border-radius:5px;
               border: 2px solid blue;
                }
                input[type="submit"]:hover{
               cursor:pointer;
               background: yellow;
               color:#cf1414;
               }
   .dk{
       border: 2px solid blue;
       width:200px;
       height:30px;
   }
   p{
       font-size: 30px;
       
   }
   label{
       font-size: 20px;
       
       
   }
 
   
    </style>
</head>
<body>

  <center>
<form action="/updated" method="POST">
<table>
      <tr>
        <th>
   <h1>Update Delivery details</h1>
    {{csrf_field()}}
    <input type="hidden"  name="id" value="{{$dely->id}}"   class="dk">
    <label>Enter delivery persone code :</label></br>
    <input type="text"  name="ucode" value="{{$dely->dcode}}"  required class="dk"><br><br>

    <label>Enter delivery person name :</label></br>
    <input type="text"  name="uname"  value="{{$dely->dname}}" required class="dk"><br><br>

    <label>Enter student id :</label></br>
    <input type="text"  name="uid"  value="{{$dely->studentid}}" required class="dk"><br><br>

    <label>Enter Student name :</label></br>
    <input type="text"  name="udname" value="{{$dely->studentname}}"  required class="dk"><br><br>

    <label>Enter Student address :</label></br>
    <input type="text"  name="uaddress"  value="{{$dely->studentaddress}}" required class="dk"><br><br>

    <label>Enter tutes :</label></br>
    <input type="text"  name="utute"  value="{{$dely->tute}}" required class="dk"><br><br>

    <button class="btn btn-primary">update</button>
    </th>
    <th>
       <a href="/delivery">
       <img src="/image/back.jpg" width="60px" height="60px" class="back" align="right">
       </a>
         <center>
        <img src="/image/bnd.jpg" width="530px" height="400px">
        </center>
   
  </th>
  </tr>
  </table>
    </form>
</center>
</body>
</html>