<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Result Management</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap');
    </style>

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

    <script>

        window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "Marks Distribution of Students"
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y}%",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 20,
                indexLabel: "{label} - {y}%",
                dataPoints: [
                    { y: {{ ($countA * 100)/$countAll }}, label: "A" },
                    { y: {{ ($countB * 100)/$countAll }}, label: "B" },
                    { y: {{ ($countC * 100)/$countAll }}, label: "C" },
                    { y: {{ ($countS * 100)/$countAll }}, label: "D" },
                    { y: {{ ($countW * 100)/$countAll }}, label: "W" },
                ]
            }]
        });
        chart.render();

        }

    </script>


</head>
<body>

    <header class="header">

        <div class="text-center">
            <img src="{{URL('/image/lgo1.png')}}" alt="">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="#news">Classes</a>
            <a href="#about">Attendance</a>
            <a href="#contact">Resourses</a>
            <a href="#about">Exams</a>
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
                    <h1> Result Management </h1>
                    <hr style="border: 1px solid rgb(138, 136, 136);">

                    <br>

                </div>    

                    <div class="row">
                        <div class="col">
                            <div class="p-3 mb-2 bg-primary bg-gradient text-white" style="height: 150px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> No of Students </p>
                                
                                <div class="row">
                                    <div class="col-3"  style="padding: 10px;">
                                        <h1 class="text-left" style="margin: 10px 0px 10px 20px;"> <i class="fa fa-user" aria-hidden="true"></i> </h1> 
                                    </div>
                                    
                                    <div class="col-9">
                                        <p style="font-family: 'Raleway', sans-serif; font-size: 38px; text-align: right; margin: 20px 40px 10px 0px;"> {{$noOfStudents}} </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 mb-2 bg-success bg-gradient text-white" style="height: 150px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> No of Students - Completed Exam </p>
                                
                                <div class="row">
                                    <div class="col-3"  style="padding: 10px;">
                                        <h1 class="text-left" style="margin: 10px 0px 10px 20px;"> <i class="fa fa-check" aria-hidden="true"></i> </h1> 
                                    </div>
                                    
                                    <div class="col-9">
                                        <p style="font-family: 'Raleway', sans-serif; font-size: 38px; text-align: right; margin: 20px 40px 10px 0px;"> {{$noOfStudentsCompleted}} </p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 mb-2 bg-danger bg-gradient text-white" style="height: 150px;">
                                <p style="font-family: 'Poppins', sans-serif; font-size: 18px; margin: 0px;"> No of Students - Not Completed Exam </p>
                                
                                <div class="row">
                                    <div class="col-3"  style="padding: 10px;">
                                        <h1 class="text-left" style="margin: 10px 0px 10px 20px;"> <i class="fa fa-times" aria-hidden="true"></i> </h1> 
                                    </div>
                                    
                                    <div class="col-9">
                                        <p style="font-family: 'Raleway', sans-serif; font-size: 38px; text-align: right; margin: 20px 40px 10px 0px;"> {{$noOfStudentsNotCompleted}} </p>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                <div class="text-center">
                    <br><br>

                    <div id="chartContainer" style="height: 400px; width: 100%; padding: 10px;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    
                    

                    <br><br>

                    <a href="{{url('dresult-pdf')}}" class='btn btn-danger'> Download PDF </a>

                    <br><br>

                    <table class="table table-dark">
                        <th> Class </th>
                        <th> Exam </th>
                        <th> Student Name </th>
                        <th> Marks </th>

                        @foreach($result as $student_result)
                        <tr>
                            <td> {{$student_result->className}} </td>
                            <td> {{$student_result->examName}} </td>
                            <td> {{$student_result->studnetName}} </td>
                            <td> {{$student_result->studentMark}} </td>
                        </tr>
                        @endforeach

                    </table>

                </div>

            </div>
            
        </div>
    </div>
    
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