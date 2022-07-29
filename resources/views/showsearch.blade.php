<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>show results</title>
</head>
<body>
   


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Class ID</th>
      <th scope="col">Subject</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Handler</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
      @foreach($show as $shows)
    <tr>
      <th scope="row">{{$shows->cid}}</th>
      <td>{{$shows->sid}}</td>
      <td>{{$shows->date}}</td>
      <td>{{$shows->time}}</td>
      <td>{{$shows->handler}}</td>
      <td>{{$shows->link}}</td>
    </tr>
   @endforeach
  </tbody>
</table>


</body>
</html>