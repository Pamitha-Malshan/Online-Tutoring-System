<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Message</title>
</head>
<body>
    <h1>Thank You!</h1>
    <p>Name : {{$details['name']}}</p>
    <p>Email : {{$details['email']}}</p>
    <p>Message : {{$details['message']}}</p>
    <p>Zoom Class ID : {{$details['zoom']}}</p>
    <p>Enrollment Key : {{$details['key']}}</p>
    
</body>
</html>