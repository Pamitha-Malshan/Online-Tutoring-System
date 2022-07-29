<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   -->
 



    <title>Report</title>
</head>
<body>
    
<style>
             #cls{
                 font-family: Arial, Helvetica, sans-serif;
                 border-collapse: collapse;
                 width: 100%;
             }

             #cls td,#emp th{
                 border: 1px solid #ddd;
                 padding: 8px;
             }
             #cls tr:nth-child(even){
                 background-color: #b3b3b3;
             }

             #clas th{
                 padding-top: 12px;
                 padding-bottom: 12px;
                 text-align: left;
                 background-color: #4CAF50;
                 color: #fff;

             }



             h2 {
    text-align: center;
}   

        </style>
     
  
     
 
  


        
        
       <h2>One day report for grade</h2>




    <table id="cls">
        <thead>
            <tr>
                <th>Grade</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Time</th>
                <th>Handler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classData as $class)    
            <tr>
                <td>{{$class->cid}}</td>
                <td>{{$class->sid}}</td>
                <td>{{$class->date}}</td>
                <td>{{$class->time}}</td>
                <td>{{$class->handler}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>