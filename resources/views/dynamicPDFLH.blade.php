<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>

    <title> PDF </title>
</head>
<body>
        <div class="text-center">

                    <br>
                    <h1> Result Management </h1>

                    <hr style="border: 1px solid rgb(138, 136, 136);">

                    <br><br>

                    <table>
                        <thead>
                            <tr>
                                <th style="font-weight: bold;"> Class </th>
                                <th style="font-weight: bold;"> Exam </th>
                                <th style="font-weight: bold;"> Student Name </th>
                                <th style="font-weight: bold;"> Marks </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($result as $results)
                            <tr>
                                <td>{{$results->className}}</td>
                                <td>{{$results->examName}}</td>
                                <td>{{$results->studnetName}}</td>
                                <td>{{$results->studentMark}}</td>
                            </tr>
                            @endforeach
            
                        </tbody>
                    </table>



        </div>
</body>
</html>