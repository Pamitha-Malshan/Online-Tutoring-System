<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
      h1{
          background-color:rgb(4, 114, 62);
          padding: 35px;
          color:white;
          margin: 0px 00px;
      } 
      iframe{
          border: 2px solid black;
      }
      .fram{
        border: 2px solid rgb(4, 114, 62);
        margin:0px 150px;
      }
    </style>
</head>
<body>
    
     <center>
      </br>
    <div class="fram">  
      <h1>PDF View</h1>
      </br>
      <a href="/pdfR">
      <input type=""name="" value="Back" class="btn btn-primary" />
      </a>
      </br>
      </br>
      <iframe width="900px" height="600px" src="/stopdf/{{$data->file}}"></iframe>
    </br>
    </br>
    </div>
     </center>
    </br>
    </br>
</body>
</html>