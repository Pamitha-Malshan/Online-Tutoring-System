<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
   <style>
     
       table{
           
            width: 700px;
            height: 40px;
       }
       table tr{
           background:blue;
           height:35px;
       }
       button{
           width:200px;
           height: 39px;
           background: green;
           border-radius: 8px;
           font-size: 18px;
           color:white;
       }
       button:hover{
           color: red;
       }
       p{
           font-size: 35px;
       }
   </style>
</head>
<body>
    </br>
    </br>
    <div class="fram">
    <center>

        <p>Report of the Tute Content</p>
    </br>
   <table>
       <thead>
           <tr>
             <th>id</th>
             <th>code</th>
             <th>subject</th>
             <th>grade</th>
             <th>quentity (Tute)</th>
             <th>Tute Inserted Time</th>
          </tr>
      </thead>
      <tbody>
            @foreach ($tute as $TT)
            <tr>
                  <th>{{$TT->id}}</th>
                  <th>{{$TT->code}}</th>
                  <th>{{$TT->subject}}</th>
                  <th>{{$TT->grade}}</th>
                  <th>{{$TT->quentity}}</th>
                  <th>{{$TT->created_at}}</th>
            </tr>
            @endforeach
    </tbody>
    </table>
    
    </br>
    </br>
   
  </center>
</div>
</body>
</html>