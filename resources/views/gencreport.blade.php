<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Report</title>
</head>
<body>
    
<style>


body {
 margin: 5% 10% 0 10%;
}

             #cls{
                 font-family: Arial, Helvetica, sans-serif;
                 border-collapse: collapse;
                 width: 100%;
                 margin-top: 20px;
   
             }

             #cls td,#emp th{
                 border: 1px solid #ddd;
                 padding: 8px;
             }
             #cls tr:nth-child(even){
                 background-color: #3aae4f;
             }

             #clas th{
                 padding-top: 12px;
                 padding-bottom: 12px;
                 text-align: left;
                 background-color: #4CAF50;
                 color: #fff;

             }


 


             * {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=date] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 200px;
  height: 40px;
  background: #f1f1f1;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 200px;
  height: 40px;
  background: #f1f1f1;
}


.sselect {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 200px;
  height: 40px;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 150px;
  height: 40px;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}


h1 {
    text-align: center;
}            



        </style>
     
     <h1>Report Data</h1>  
     
 
     <form class="example" action="/repid" method="get">
@csrf

  <input type="date" placeholder="Search.." name="date">
  
 
  <select class="sselect" name="search">
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
            <option value="Grade 11">Grade 11</option>

            </select>



  <button type="submit"> Generate Report</button>
</form>


        
 
 
    




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