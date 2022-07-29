<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Manage Exam</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

        * {
            font-family: Roboto;
        }

        section {
            width: 100%;
            display: inline-block;
            background: #ccc;
            height: 60vh;
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            text-decoration: underline;
        }

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 45px 50px;
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
            margin: 0;
        }
        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
            transition: ease .25s;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
            transition: ease .25s;
        }

        .footer-distributed .footer-links a:before {
            content: "·";
            font-size: 20px;
            left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
            content: none;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #33383b;
            border-radius: 2px;
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-left: 3px;
            transition:all .25s;
        }

        .footer-distributed .footer-right a:hover{transform:scale(1.1); -webkit-transform:scale(1.1);}

        .footer-distributed p.footer-links a:hover{text-decoration:underline;}

        /* Media Queries */

        @media (max-width: 600px) {
            .footer-distributed .footer-left, .footer-distributed .footer-right {
                text-align: center;
            }
            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }
            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap');
    </style>
</head>
<body>

    <header class="header">

        <div class="text-center">
            <img src="{{URL('/image/lgo1.png')}}" alt="">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home">Home</a>
            <a href="#news">Classes</a>
            <a href="#about">Attendance</a>
            <a href="#contact">Resourses</a>
            <a href="#about" class="active">Exams</a>
            <a href="#about">Payments</a>
            <a href="#about">Notices</a>
            <a href="#about">Timetable</a>
            <a href="#about">Feedback</a>
            <a href="#about">Sign up</a>
            <a href="#about">Log in</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    </header>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="p-3 mb-2 bg-dark text-white"  style="height: 100%; margin: 10px;">
                    <div class="text-center"> <br><br> 
                        <img src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/60/000000/external-exam-online-learning-vitaliy-gorbachev-blue-vitaly-gorbachev.png"/>
                        <br><br><br>
                        <p style="font-family: 'Poppins', sans-serif; font-size: 28px; margin: 0px;"> Exam Management </p>

                        <hr style="border: 1px solid rgb(216, 216, 216);">
                        <br>
                        <form method="POST" action="/serachExam">
                            <input type="text" class="form-control" name="examSearch" placeholder="Enter exam here"> <br>
                            <input type="submit" class="btn btn-primary" value="Search">
                        </form>
                        <br>
                        <a href="/addexam" class="btn btn-primary"> Add Exam </a>
                    </div>
                </div>
            </div>


            
            <div class="col-9">
                <div class="text-center">
                    <br>
                    <h1> Exam Management </h1>
                    <hr style="border: 1px solid rgb(138, 136, 136);">
                    
                    <table class="table table-dark">
                        <th> Class </th>
                        <th> Exam </th>
                        <th> Exam Type </th>
                        <th> Exam Date </th>
                        <th> Start Time </th>
                        <th> End Time </th>
                        <th> Duration </th>
                        <th> Total Marks </th>
                        <th> No of Questions </th>
                        <th> Update </th>
                        <th> Questions </th>
                        <th> Delete </th>

                        @foreach($classGet as $exam)
                        <tr>
                            <td> {{$exam->class}} </td>
                            <td> {{$exam->exam}} </td>
                            <td> {{$exam->examType}} </td>
                            <td> {{$exam->examDate}} </td>
                            <td> {{$exam->startTime}} </td>
                            <td> {{$exam->endTime}} </td>
                            <td> {{$exam->duration}} </td>
                            <td> {{$exam->totMarks}} </td>
                            <td> {{$exam->noOfQues}} </td>
                            <td> <a href="/updateExam/{{$exam->id}}" class="btn btn-success"> Update </a> </td>
                            <td> <a href="/insertQues/{{$exam->id}}" class="btn btn-success"> Add </a> </td>
                            <td> <a href="/deleteExam/{{$exam->id}}" class="btn btn-danger"> Delete </a> </td>
                        </tr>
                        @endforeach

                    </table>

                </div>

            </div>
            
        </div>
    </div>
    
    <br><br>
    <footer class="footer-distributed">

        <div class="container-lg">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">
                <p>Tutoring Tube &copy; 2021</p>
            </div>
        
        </div>
                
    </footer>
            
    

    
</body>
</html>