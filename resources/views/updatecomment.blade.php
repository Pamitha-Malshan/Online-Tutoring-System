<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Comments</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
body {
  background-image: url('img/187161.jpg');
}

</style>



</head>
<body>
    
<div class="container">
<form method="post" action="/updatetaskss">

{{csrf_field()}}
        Your ID
        <input type="text" class="form-control" name="id" value="{{$task->id}}"/>
        Comment
        <input type="text" name="comment" value="{{$task->comment}}"/>
        <input type="submit" class="btn btn-warning" value="Update"/>
    
        &nbsp;&nbsp; <input type="button" class="btn btn-danger" value="Cancel"/>
        


        <a href="/deletetask/{{$task->id}}" class="btn btn-warning" style="color:red;">Delete</a>

    </form>
</div>
   











<h1>Your ID</h1>
{{$task->id}}
<br>
<h1>Your New Comment</h1>
{{$task->comment}}
</body>
</html>